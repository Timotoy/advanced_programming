<?php

class User{
    public $name;
    public $username;
    public $email;

    public function addFriend(){
        echo "You added a friend."."<br>";
    }
    public function postStatus(){
        echo "You posted a status"."<br>";
    }
}

$example = new User();
echo $example->addFriend();
echo $example->postStatus();