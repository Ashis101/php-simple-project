<?php
class Flash{
    public $message=[];

    public function take($message)
    {
        array_push($this->message,$message);
    }

    public function showmessage(){
        var_dump($this->message);
    }
}