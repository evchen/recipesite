<?php
//open database connection
$mysqli = new mysqli('localhost','root', '', 'recipe') or die ('Error connecting to mysql: ' . mysqli_error($link));

function get_result($query){
  // Import our global mysqli-varible
  global $mysqli;

  // Run the query
  $result = $mysqli->query($query);

  return $result;

}
