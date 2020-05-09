<?php

class User_model {
    private $auser = [
        [
            "name" => "John Doe",
            "email" => "johndoe@gmail.com",
            "user_type" => "Admin"
        ],
        [
            "name" => "Guy Fawkes",
            "email" => "guy fawkes@hotmail.com",
            "user_type" => "Editor"
        ],
        [
            "name" => "Julian Asange",
            "email" => "julianasange@protonmail.com",
            "user_type" => "Contributor"
        ]
    ];

    public function getUser(){
        return $this->auser;
    }
}