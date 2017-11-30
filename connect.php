<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dthpicture";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
	  echo "Connection err";
    die("Connection failed: " . $conn->connect_error);
  } 
//  mysqli_query($conn, 'SET NAMES UTF8');
//  function mb_ucwords($str)
//  {
//    return mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
//  }
?>