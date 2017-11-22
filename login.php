<?php 
session_start() 
?>
<html>
<head>
	<title>Login</title>
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
	// if(!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['username'])){ 
	// 	echo "<p align='center' style='color: white;font-size: 23px'><b>ĐĂNG KÝ THÀNH CÔNG<b></p>"; 
	// } 
	if(isset($_POST["btn_submit"])){
//lay thong tin nguoi dung
		$username = $_POST["username"];
		$password = $_POST["password"];
		$userID = $_POST["userID"];
	//lam sach thong tin
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "Ban can nhap day du ten dang nhap va mat khau";
		}else{
			$sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
			$sql1 = "SELECT userID FROM users WHERE username = '$username' and password = '$password'";
			$query = mysqli_query($conn,$sql);
			$query1 = mysqli_query($conn,$sql1);
			$num_rows1 = mysqli_num_rows($query1);
			//$_POST["userID"] = $num_rows1;
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "<p align='center' style='color: white'><b>Tên đăng nhập hoặc mật khẩu không đúng.</b></p>";
			}else{
			//lưu tên đăng nhập và password vào session
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['userID'] = $num_rows1;
				header('Location: index.php');
			}
		}
	}
	?>
	<form method="POST" action="Login.php">
		<div class="login-block">
			<h1>Login</h1>
			<input type="text" value="" placeholder="Username" id="username" name="username" />
			<input type="password" value="" placeholder="Password" id="password" name="password" />
			<button name="btn_submit">Login</button>
			<p align="center">Create a new account? <a href="signup.php">Signup</a></p>
		</div>
	</form>
</body>
</html>