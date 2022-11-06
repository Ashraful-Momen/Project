<?php

namespace App\classes;



class Database{
    public $host, $username,$password,$dbName,$conn;

    public function __construct($dbName)
    {
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbName = $dbName;
        
    }
    public function DB_connect(){

        $conn = mysqli_connect($this->host,$this->username,$this->password, $this->dbName);

        if(!$conn){
            echo mysqli_error($this->conn);
        }
        else{
            echo "<br> Connected";
        }
        return $conn;

    }
}