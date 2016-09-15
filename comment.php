<?php
  include 'db.php';

  function get_comments($var, $r_id){
    $sql = get_result("SELECT content FROM comment WHERE r_id=$r_id");

     while ($row = $sql->fetch_assoc()){
         $comments[] = $row['content'];

       }
    return $comments[$var];
  }

  function get_user($var, $r_id){
    $sql = get_result("SELECT u_name FROM comment WHERE r_id=$r_id");

     while ($row = $sql->fetch_assoc()){
         $user[] = $row['u_name'];

       }
    return $user[$var];
  }

  function get_c_id($var, $r_id){
    $sql = get_result("SELECT c_id FROM comment WHERE r_id=$r_id");

     while ($row = $sql->fetch_assoc()){
         $c_id[] = $row['c_id'];

       }
    return $c_id[$var];
  }

  function delete_comment($c_id){

    $query="DELETE FROM comment WHERE c_id=$c_id";
    $result = get_result($query);

    if ($result==true)
   {
      header("Location: meatballs.php");
    }
    else {
      var_dump($query);

  }
}

?>
