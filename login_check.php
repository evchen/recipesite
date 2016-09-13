<?php

include 'db.php';

function Login()
{
  if(empty($_POST['name'])){
    header("Location: login.php?wrong");
  }
  if(empty($_POST['password'])){
    header("Location: login.php?wrong");
  }

  $name = $_POST['name'];
  $password = $_POST['password'];

  if(!CheckLoginInDB($name,$password)){
    header("Location: login.php?wrong");

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
