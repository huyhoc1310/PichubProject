<?php
session_start()
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.3.4, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="css/homepage.css">
    <title>Login</title>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <section class="menu cid-qy5EfwEAEs" once="menu" id="menu2-n" data-rv-view="118">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <div class="hamburger"><span></span> <span></span> <span></span> <span></span></div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand"> <span class="navbar-logo">
                    <a href="index.php">
                        <img src="assets/images/logo2.png" alt="Mobirise" media-simple="true" style="height: 3.8rem;">
                    </a>
                </span> <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4"
                                                             href="index.php">
                        Pichub</a></span></div>
        </div>
        <form action="search.php" method="POST">
            <div class="wrap">
                <div class="search">
                    <input type="text" class="searchTerm" placeholder="What are you searching for?" name="noidung"
                           style="color: black">
                    <button type="submit" class="searchButton" name="searchtag"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-buttons mbr-section-btn">
                <?php
                if (isset($_SESSION['username']) && $_SESSION['password']) {
                    echo '<a class="btn btn-sm btn-primary display-4"  href="upload.php"> <span class="btn-icon mbri-mobile mbr-iconfont mbr-iconfont-btn">
                    </span> Upload </a>';
                } else {
                    echo '
                    <a class="btn btn-sm btn-primary display-4"  href="login.php"> <span class="btn-icon mbri-mobile mbr-iconfont mbr-iconfont-btn">
                    </span> Upload </a>';
                }
                ?>
            </div>
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">

                <?php
                if (isset($_SESSION['username']) && $_SESSION['password']) {
                    echo '<li class="nav-item"><a class="nav-link link text-black display-4" href="trangcanhan.php">' . $_SESSION['username'] . '</a>';
                    echo '<li class="nav-item"><a class="nav-link link text-black display-4" href="logout.php"> Logout </a>';
                } else {
                    echo '<li class="nav-item">
            <a class="nav-link link text-black display-4" href="login.php"> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-black display-4" href="signup.php"> Sign up </a>
          </li>';
                }
                ?>

            </ul>
        </div>
    </nav>
</section>
<br>
<br>
<br>
<br>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'dthpicture';
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// if(!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['username'])){
// 	echo "<p align='center' style='color: white;font-size: 23px'><b>ĐĂNG KÝ THÀNH CÔNG<b></p>";
// }
$mess = $_GET['state'] ?? '';
$mess = strip_tags($mess);

if (isset($_POST["btn_submit"])) {
//lay thong tin nguoi dung
    $username = $_POST["username"];
    $password = $_POST["password"];
    //lam sach thong tin
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);
    if ($username == "" || $password == "") {
        echo "Ban can nhap day du ten dang nhap va mat khau";
    } else {
        $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
        //$sql1 = "SELECT userID FROM users WHERE username = '$username' and password = '$password'";
        $query = mysqli_query($conn, $sql);
        //$query1 = mysqli_query($conn,$sql1);
        //$num_rows1 = mysqli_num_rows($query1);
        //$_POST["userID"] = $num_rows1;
        $num_rows = mysqli_num_rows($query);
        if ($num_rows == 0) {
            echo "<p align='center' style='color: white'><b>Tên đăng nhập hoặc mật khẩu không đúng.</b></p>";
        } else {
            //lưu tên đăng nhập và password vào session
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            //$_SESSION['userID'] = $num_rows1;
            header('Location: index.php');
        }
    }
}
?>
<form method="POST" action="Login.php">
    <div class="login-block">
        <?php if ($mess === 'success'): ?>
            <script>
                alert("Đăng kí thành công. Mời bạn đăng nhập!");
            </script>
        <?php endif; ?>
        <h1>Login</h1>
        <input type="text" value="" placeholder="Username" id="username" name="username"/>
        <input type="password" value="" placeholder="Password" id="password" name="password"/>
        <button name="btn_submit">Login</button>
        <p align="center">Create a new account? <a href="signup.php">Signup</a></p>
    </div>
</form>

<footer>
    <div class="container">
        <div align="center">
            <div class="row">
                <div class="col-lg-12">
                    <p style="color: #fff">Copyright &copy; Pichub Team 2017<Br></p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>