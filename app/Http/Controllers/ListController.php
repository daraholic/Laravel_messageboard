<?php

namespace App\Http\Controllers;
use App\Services\MessageService;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use SebastianBergmann\LinesOfCode\IllogicalValuesException;
// use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

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
        // dd("111");
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

        // jojo way
        // try {
        //     $validated = $request->validate([
        //         'name'=>'required|max:11',
        //         'message'=>'required|max:300',
        //     ]);
        // } catch(ValidationException $e) {
        //     // return redirect('/messageboard');
        //     return "please input again.";
        // }

        // official way
        $validator=Validator::make($request->all(), [
            'name'=>'required|max:11',
            'message'=>'required|max:11',
        ]);
        if ($validator->fails()) {
            // return $validator->errors()->first();
            // respose
            return response()->json(['name'=>'1'],400);
        }

        // if($validator->fails()){
        //     return validate();
        // }

        // costomizing the error messages
        
        // $validator = Validator::make($request->all(),$errors=[
        //     'name'=>'required|max:3',
        //     'message'=>'required|max:3',
        // ],
        // $errors=[
        //     'required' => 'The name is required.',
        //     'max' => 'name only 3 words',
        //     'required'=>'The message is required.',
        //     'max' => 'message onl 3 words',
 
        // ]);
        // $error=[
            
            // 'name.max'=>'plz input :attribute ',
            // 'message'=>'plz input :attribute ',
        // ];
        // if($validator->fails()){
        //     return $error;
        // }
        // dd($validated);
        
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

    public function update(Request $request,$id)
    {
        // dd($id);
        // DB::table('messages')->where('id',$id) 
        
        // $message=Message::find($id);
        // $message->name = $request->name;
        // $message->message = $request->message;
        // $message->save();
        // 目的：驗證
        // 驗證id是否存在於db,傳id
        //    name 不能重複 不可為空值 字數上限
        //    message 不可為空值 字數上限

        // dd($request->id);
        // dd($request->name,$request->message);

        // jojo way
        // try {
        //     $validated = $request->validate([
        //         'id'=>'exists:messages',
        //         'name'=>'required|unique:messages|max:11',
        //         'message'=>'required|max:300',
        //     ]);
        // } catch(ValidationException $e) {
        //     return redirect('/messageboard');
        // }

        
        // official way
        $validator = Validator::make($request->all(), [
            'id'=>'exists:messages',
            'name'=>'required|unique:messages|max:11',
            'message'=>'required|max:300',
        ]);
        if ($validator->fails()) {
            // return $validator->errors()->first();
            return response()->json(['id'=>'do not exite'],400);
        }

        $this->message->updateMessage($request,$id);
        // 
        // ->update(['name'=>$request->name,'message'=>$request->message]);
        
    
        return redirect('/api/messageboard');
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
