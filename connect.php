<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
mysql_select_db("dthpicture",$conn);
?>