<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/signup.css"> 
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
	//mysqli_query($conn,"SET NAMES 'UTF8'");
	session_start();
	if (isset($_POST["btn-signup"])) {
		$username = addslashes( $_POST['username'] );
		$email = addslashes( $_POST['email'] );
		$password   = addslashes($_POST['password']);
		$cfpassword = addslashes($_POST['confirm-password']);
		if (!$username  || !$email || !$password || !$cfpassword)
		{
			echo "<p align='center' style='color: white'><b>Vui lòng nhập đầy đủ thông tin.</b></p><a  href='javascript: history.go(-1)'><p align='center' style='color: white'><b>Trở lại</b></p></a>";
			exit;
		}
		$sql = "SELECT username FROM users WHERE username='$username'";
		$query = mysqli_query($conn, $sql);
		$num_rows = mysqli_num_rows($query);
		if($num_rows > 0){
			echo "<p align='center' style='color: white'><b>Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác!</b></p><a  href='javascript: history.go(-1)'><p align='center' style='color: white'><b>Trở lại</b></p></a>";
			exit;
		}
		else{
			$_SESSION['username']=$username;
		}

		$sql = "SELECT email FROM users WHERE email='$email'";
		$query = mysqli_query($conn, $sql);
		$num_rows = mysqli_num_rows($query);
		if($num_rows > 0){
			echo "<p align='center' style='color: white'><b>Email này đã có người dùng. Vui lòng chọn Email khác!</b></p><a  href='javascript: history.go(-1)'><p align='center' style='color: white'><b>Trở lại</b></p></a>";
			exit;
		}
		else{
			$_SESSION['email']=$email;
		}

		if($password < 8){
			echo "<p align='center' style='color: white'><b>Mật khẩu cần ít nhất 8 kí tự</b></p><a  href='javascript: history.go(-1)'><p align='center' style='color: white'><b>Trở lại</b></p></a>";
			exit;

		}
		else{
			$_SESSION['password']=$password;
		}
		if($cfpassword != $password){
			echo "<p align='center' style='color: white'><b>Mật khẩu nhập lại chưa đúng</b></p><a  href='javascript: history.go(-1)'><p align='center' style='color: white'><b>Trở lại</b></p></a>";
			exit;
		}
		$sql ="
		INSERT INTO users (
		username,
		password,
		email            
		)
		VALUE (
		'{$username}',
		'{$password}',
		'{$email}')
		";
		$query = mysqli_query($conn, $sql);

		if ($query){
			header('Location: login.php');
			echo "<p align='center' style='color: white'><b>Đăng ký thành công.</b></p>";}
			else
				echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='signup.php'>Thử lại</a>";
		}
		?>

		<div class="signup-block">
			<h1>Signup</h1>
			<form action="signup.php"  method="post">
				<input type="text" value="" placeholder="Username" id="username" name="username"  />
				<input type="email" value="" placeholder="Email" id="email" name="email" />
				<input type="password" value="" placeholder="Password" id="password" name="password" />
				<input type="password" value="" placeholder="Confirm Password" id="confirm-password" name="confirm-password" />
				<br>
				<br>
				<button onclick = "validate();" name="btn-signup" >Signup</button>
			</form>
		</div>
	</body>
	</html>