<?php

include 'db.php';

function Login()
{
  if(empty($_POST['name'])){
    header("Location: login.php?wrong1");
  }
  if(empty($_POST['password'])){
    header("Location: login.php?wrong2");
  }

  $name = $_POST['name'];
  $password = $_POST['password'];

  if(!CheckLoginInDB($name,$password)){
    header("Location: login.php?wrong3");

  }else{
    $_SESSION["c_id"] = $name;
    header("Location: index.php");
  }

}


login();

function CheckLoginInDB($name,$password){

  $result = get_result("SELECT u_name FROM user WHERE u_name = '".$name."' AND  password = '".$password."'");

  if ($result->num_rows !== 1)
  {
    return false;
  }else{
    return true;
  }

}
