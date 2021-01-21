<?php
class Database{

  private $server;
  private $user;
  private $pass;
  private $dbname;
  private $conn;

  public function __construct(){
    $this->server = "localhost";
    $this->user = "root";
    $this->pass = "";
    $this->dbname = "codebasedb";
  }

  public function open(){
    $this->conn = new mysqli($this->server,$this->user,$this->pass,$this->dbname);
    if($this->conn->connect_errno){
      echo "Can't connect to the database!";
      exit();
    }
    return $this->conn;  
  }

  public function close(){
    $this->conn->close();
  }

}
  