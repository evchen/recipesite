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
  $r_id = $_POST['r_id'];

  if(!CheckLoginInDB($name,$password)){
    header("Location: login.php?wrong");

  if(!$r_id==null)
    session_start();
    $_SESSION['user'] = $name;
    header("Location: index.php");
  }else{
    session_start();
    $_SESSION['user'] = $name;
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
