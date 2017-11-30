<?php session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'dthpicture';
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_SESSION['username']; ?>
<html>
<head>
    <!-- Site made with Mobirise Website Builder v4.3.2, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.3.2, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
    <meta name="description" content="Website Generator Description">
    <title>Trang cá nhân</title>
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
    <link rel="stylesheet" type="text/css" href="css/trangcanhan.css">
    <link rel="stylesheet" type="text/css" href="css/homepage.css">
    <link rel="stylesheet" type="text/css" href="css/show-image.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
              //  $us = $_GET['us'];
               // if(empty($_GET['us'])) {
                //    $us = $_SESSION['username'];
              //  }
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
<br>

<div>
    <div class="username"><?php echo "<center><h1>" . $_SESSION['username'] . "</h1></center>"; ?></div>

</div>
<br>
<br>
<br>
<div class="container">
<div class="col-md-12">
    <div class="col-md-1"></div>
    <div class="col-md-8">
        <form method="post">
            <div class="create-album">
                <input type="text" name="newAlbumName" placeholder="New Album Name"/>
                <button type="submit" name="create" value="Tao Album">Tạo album</button>
            </div>
        </form>
        <?php
        $flag = true; //flag = false when albumname is exist
        if (!empty($_POST["create"])) {
                if (!isset($_SESSION['username']) && !$_SESSION['password']) {
                    echo "<p align='center'><b>Bạn cần đăng nhập!.</b></p><a  href='Login.php'><p align='center' style='color: white'><b>Đăng nhập</b></p></a>";
                }
            $username = $_SESSION['username'];
            $albumName = $_POST['newAlbumName'];
            $sql = "select * from albums where username = ('$username')";
            $query = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($query);

            if ($num > 0) {
                while ($row = mysqli_fetch_array($query)) {
                    $existAlbumName = $row['albumName'];
                    if (strcmp($albumName, $existAlbumName) == 0) {
                        echo "Album này đã tồn tại!";
                        $flag = false; //flag = false when albumname is exist
                        break;
                    }
                }
            }
            if (!empty($albumName) && $flag) {
                $sql = "INSERT INTO `albums`(`albumName`, `username`) VALUES ('$albumName', '$username')";
                $query = mysqli_query($conn, $sql);
                if ($query) {
                    echo "Tạo album thành công!";
                } else {
                    echo "sql: Tạo album không thành công!";
                }
            } else {
                echo "Tạo album không thành công!";
            }
        }
        ?>
    </div>
</div>
</div>
<div class="container">
<div class="col-md-12">
    <div class="row">
        <?php
        $username = $_SESSION['username'];
        $sql = "select * from albums where username = ('$username')";
        $query = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($query);
        if ($num > 0) {
            while ($row = mysqli_fetch_array($query)) {
                $link = "\"" . "album.php?link=" . $row['albumID'] . "\"";
                ?>
                <a href=<?php echo $link ?>>
                    <div class="col-md-3">
                        <div class="show-albums">
                            <img alt="album image" src="assets/images/album.png"/>
                            <h3>
                                <?php echo $row['albumName']; ?>
                            </h3>
                        </div>
                    </div>
                </a>
                <?php
            }
        }
        ?>
    </div>
</div>
<?php include 'show-image.php'?>

</div>
<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smooth-scroll/smooth-scroll.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
<script src="assets/jarallax/jarallax.min.js"></script>
<script src="assets/masonry/masonry.pkgd.min.js"></script>
<script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/social-likes/social-likes.js"></script>
<script src="assets/jquery-mb-vimeo_player/jquery.mb.vimeo_player.js"></script>
<script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
<script src="assets/theme/js/script.js"></script>
<script src="assets/mobirise-slider-video/script.js"></script>
<script src="assets/mobirise-gallery/player.min.js"></script>
<script src="assets/mobirise-gallery/script.js"></script>
<script src="assets/formoid/formoid.min.js"></script>
<footer>
    <div class="container">
        <div align="center">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Pichub Team 2017<Br></p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

