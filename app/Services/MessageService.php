<?php

namespace App\Services;

use App\Repositories\MessageRepository;

class MessageService
{
    private $message;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->message = $messageRepository;
    }

    public function getMessage()
    {
        return $this->message->getList();
    }

    public function addMessage($request)
    {
        $name = data_get($request,'name');
        $message = data_get($request,'message');
        
        return $this->message->addMessage($name,$message);
    }

    public function deleteMessage($id)
    {
        $id= $this->message->deleteMessage($id);

        return $id;
    }

    public function getOne($id)
    {
        return $this->message->getOne($id);
    }

    public function updateMessage($request)
    {
        $id=data_get($request,'id');
        $name = data_get($request,'name');
        $message = data_get($request,'message');
 
        return $this->message->updateMessage($id,$name,$message);
    }
}
