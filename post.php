<?php

include 'db.php';

  $user = $_POST['user'];
  $r_id = $_POST['r_id'];
  $comment = $_POST['content'];

  $query="INSERT INTO comment(c_id, r_id, u_name, content) VALUES (NULL, '$r_id', '$user', '$comment')";
  $result = get_result($query);

  if ($result==true)
 {
    header("Location: meatballs.php");
  }
  else {
    var_dump($query);
  }

?>
