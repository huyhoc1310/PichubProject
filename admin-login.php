
<?php
/**
 * Created by PhpStorm.
 * User: NoOne
 * Date: 11/28/2017
 * Time: 9:20 PM
 */
session_start()
?>
<html>
<head>
    <title>Admin login</title>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'dthpicture';
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["btn_submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);
    if ($username == "" || $password =="") {
        echo "Bạn cần nhập đầy đủ tên đăng nhập và mật khẩu";
    }else{
        $sql = "SELECT * FROM admin WHERE adminname = '$username' and adminpassword = '$password'";
        $query = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows==0) {
            echo "<p align='center' style='color: white'><b>Tên đăng nhập hoặc mật khẩu không đúng.</b></p>";
        }else{
            //lưu tên đăng nhập và password vào session
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header('Location: manager.php');
        }
    }
}
?>
<form method="POST" action="admin-login.php">
    <div class="login-block">
        <h1>ADMIN Login</h1>
        <input type="text" value="" placeholder="Username" id="username" name="username" />
        <input type="password" value="" placeholder="Password" id="password" name="password" />
        <button name="btn_submit">Login</button>
    </div>
</form>
</body>
</html>