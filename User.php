<?php

class User{
    public $name;
    public $username;
    public $email;

    function __construct($name,$username,$email)
    {
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
    }
    public function addFriend(){
        echo $this->name." added a friend."."<br>";
    }
    public function postStatus(){
        echo $this->name." posted a status"."<br>";
    }
}
// name, username, email
$example = new User("Timothy","timo0802","tmbrccl@gmail.com");
echo $example->addFriend();
echo $example->postStatus();