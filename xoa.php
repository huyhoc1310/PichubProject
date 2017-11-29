<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'dthpicture';
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$del = $_GET['dele'];

// $sql = "SELECT * FROM nguoidungvaitro WHERE nguoidungID = '$nguoidungID'";
// $query = mysqli_query($conn, $sql);
// $num_rows = mysqli_num_rows($query);
// if($num_rows == 0){
// 	echo "Nguoi dung khong co trong danh sach";
// }
// else{
$sql = "DELETE FROM users WHERE username = $del";
$query = mysqli_query($conn, $sql);
if ($query == TRUE) {
    header ('Location:Test.php?dele=okk');
}
else{
    echo "Xoa khong thanh cong!";
}

?>