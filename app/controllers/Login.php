<?php
include "../models/LoginModel.php";
//login
if(isset($_POST["login"])){
  echo loginSuccess();
}
//logout
if(isset($_POST["logout"])){
  echo logOut();
}

function loginSuccess(){
  $login = "failed";
  $username = $_POST["username"];
  $password = $_POST["password"];

  $model = new LoginModel();
  $userData = $model->getUser($username,$password);
  if(count((array)$userData) > 0){
    $login = "success";
  }
  return $login;
}

function logOut(){
  $model = new LoginModel();
  $model->logOut();
  return "success";  
}