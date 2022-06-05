<?php

namespace App\Repositories;

use App\Models\Message;

class MessageRepository
{
    private $message;
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function getList()
    {
        return $this->message->all();
    }
    
    public function addMessage($name,$message)
    { 
        return $this->message->create(['name'=>$name,'message'=>$message,]);
    }

    public function deleteMessage($id)
    {
        $message = $this->message->findOrFail($id);
        return $message->delete();
    }

    public function getOne($id)
    {
        return $this->message->find($id);
    }

    public function updateMessage($id,$name,$message)
    {
        $data=$this->message->findOrFail($id);
        $data->name=$name;
        $data->message=$message;
        // dd($name,$message);
        $data->save();
        return $data;
    }

}
