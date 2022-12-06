<?php 

// How to make a connection 
// https://code.tutsplus.com/tutorials/pdo-vs-mysqli-which-should-you-use--net-24059
// https://www.youtube.com/watch?v=PHiu0JA9eqE&ab_channel=DaniKrossing
class DataBase {

    private $serverName;
    private $userName;
    private $password;
    private $dataBaseName;

    protected function connect(){
        $this->serverName ="localhost";
        $this->userName = "root";
        $this->password="";
        $this->dataBaseName="train_website";

        // PDO
        // $pdo = new PDO("mysql:host=localhost;dbname=database", 'username', 'password');
 
        // mysqli, object oriented way
        // $mysqli = new mysqli('localhost','username','password','database');

        $conn=new PDO("mysql:host=$this->serverName;dbname=$this->dataBaseName" , "$this->userName","$this->password");

        return $conn; 

    }
}
