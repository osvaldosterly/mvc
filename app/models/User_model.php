<?php

class User_model {

    private $dbh; //database handler
    private $stmt;

    public function __construct(){
        //data source name
        $dsn = 'mysql:host=localhost;dbname=mvc';

        try{
            $this->dbh = new PDO($dsn, 'root', 'root');
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }


    public function getUser(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM user');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}