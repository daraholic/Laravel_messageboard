<?php

namespace App\Http\Controllers;

use App\Services\MessageService;
use Illuminate\Http\Request;

class ListController extends Controller
{
    
    private $message;

    public function __construct(MessageService $messageService)
    {
        $this->message = $messageService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function list()
    {
        $lists=$this->message->getMessage();
        return view('messageboard', ['lists' => $lists]);

    }

    // original function
    // public function list()
    // { 
        // $lists = DB::table('messages')->get();
    //     $lists = Message::all();
    //     return view('messageboard', ['lists' => $lists]);
        
    // }

    public function add()
    { 
        return view("addmessage");
        
    }
    
    public function save(Request $request)
    {
        // DB::table('messages')->insert([
        //     'name' => $request->name,
        //     'message' => $request->message,
        // ]);

        // $message = new Message;
        // 產生一個Message的instance
        // $message->name = $request->name;
        // $message->message = $request->message;
        // $message->save();

        // $message = Message::create([
        //     'name'=>$request->name,
        //     'message'=>$request->message,
        // ]);
        $this->message->addMessage($request);
        return redirect('/messageboard');
    }

    public function delete($id)
    {
        // DB::table('messages')->where('id',$id)->delete();
        // Message::destroy($id);
        // 兩種方式（官網： delete)
        $this->message->deleteMessage($id);
        return redirect('/messageboard');
    }

    public function edit($id)
    {
        // $data=DB::table('messages')->where('id',$id)->get();
        // $data=Message::find($id);
        $data=$this->message->getOne($id);
        return view('editmessage', ['data' => $data]);
    }

    public function update(Request $request)
    {
        // DB::table('messages')->where('id',$id) 
        
        // $message=Message::find($id);
        // $message->name = $request->name;
        // $message->message = $request->message;
        // $message->save();
        $this->message->updateMessage($request);

        // ->update(['name'=>$request->name,'message'=>$request->message]);
        
    
        return redirect('/messageboard');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
        //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
        //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
