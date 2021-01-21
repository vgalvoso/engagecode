<?php
session_start();

if(isset($_SESSION["user_id"])){
  $role = $_SESSION["role"];
  switch($role){
    case "1"://approver
      header("Location:../views/Approver/index.php");
      break;
    case "2": //requestor
      header("Location:../views/Requestor/index.php");
      break;
    default:
      header("Location:../../index.php");
    break;
  }
}