<?php
session_start();
include "../config/database.php";

class LoginModel{
  
  private $db;
  private $conn;

  public function __construct(){
    $this->db = new Database();
    $this->conn = $this->db->open();
  }

  public function getUser($username,$password){
    $userData = [];
    $sql = "CALL getUser(?,?)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0){
      $row = $result->fetch_assoc();
      $userData = array(
        "id"=>$row["id"],
        "username"=>$row["username"],
        "firstname"=>$row["firstname"],
        "middlename"=>$row["middlename"],
        "lastname"=>$row["lastname"],
        "role"=>$row["role"]
      );
      $_SESSION["user_id"] = $row["id"];
      $_SESSION["username"] = $row["username"];
      $_SESSION["firstname"] = $row["firstname"];
      $_SESSION["middlename"] = $row["middlename"];
      $_SESSION["lastname"] = $row["lastname"];
      $_SESSION["role"] = $row["role"];
      $_SESSION["fullname"] = $row["firstname"]." ".$row["middlename"]." ".$row["lastname"];
    }
    $userData = (object)$userData;
    $this->conn->close();
    return $userData;
  }

  public function logOut(){
    session_destroy();
  }
}