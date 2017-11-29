<?php session_start(); ?>
<html>
<head>
    <!-- Site made with Mobirise Website Builder v4.3.2, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.3.4, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Album</title>
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
    <link rel="stylesheet" href="css/trangcanhan.css">
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
<div class="container">
<div class="col-md-12">
    <div class="row">
        <?php
        include 'connect.php';

        if (!isset($_SESSION['username']) && !$_SESSION['password']) {
            echo "<p align='center'><b>Bạn cần đăng nhập!.</b></p><a  href='Login.php'><p align='center'><b>Đăng nhập</b></p></a>";
        }
        $username = $_SESSION['username'];
        if ($_GET['link']) {
            $albumID = $_GET['link'];
            $sql = "select albumName from albums where albumID = '$albumID' and username = '$username'";
            $query = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($query);
            if ($num > 0) {
                while ($row = mysqli_fetch_array($query)) {
                    $albumName = $row['albumName'];
                    $GLOBALS['albumName'] = $albumName;
                }
            }
        } ?>

        <div class="col-md-12">
            <h2 style="text-align: center">
                Album: <?php echo $GLOBALS['albumName']; ?>
            </h2>
        </div>
        <div class="col-md-12" style="text-align: center">
        <a href="upload.php"><button style="text-align: center" class="btn btn-warning" >Upload image now</button></a>
        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <?php
            //            include 'connect.php';
            //            session_start();
            $username = $_SESSION['username'];
            $link = $_GET['link'];
            $sql = "select * from images where username = ('$username') and albumID = '$link'";
            $query = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($query);
            if ($num > 0) {
                while ($row = mysqli_fetch_array($query)) {
                    $images = glob($row['imageFile']);
                    static $i = 0;
                    foreach ($images

                             as $image) {
                        $imageID = $row['imageID'];
                        $image = "\"" . $image . "\"";
                        ?>
                        <a data-toggle="modal" data-target="<?php echo "#" . $i ?>">
                            <div class="col-md-3">
                                <div class="show-images">
                                    <img alt="image" src=<?php echo $image ?>/>
                                </div>
                            </div>
                        </a>

                        <div class="modal fade" id="<?php echo $i ?>" role="dialog">
                            <div class="modal-dialog modal-lg" style="width:1250px;" role="document">
                                <?php echo $_SESSION['imageFile'] ?>
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                style="position: absolute; right: 25px;">
                                            &times;
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!--                                        <div class="row">-->
                                        <div class="col-md-8">
                                            <img alt="image" src=<?php echo $image; ?>/>
                                        </div>
                                        <div class="col-md-4">
                                            <form action="" method="post">
                                                <label><?php echo $username;
                                                    $nameForCheckModal = "comment" . $i; ?>
                                                    <input type="text" name=<?php echo $nameForCheckModal ?> value=""
                                                           style="" placeholder="Viết bình luận..."/>
                                                </label>
                                                <?php
                                                if (isset($_POST[$nameForCheckModal])) {
                                                    $valueComment = $_POST[$nameForCheckModal];
                                                    if (!strcmp($valueComment, "Viết bình luận...")) {
                                                        return;
                                                    }
                                                    $username = $_SESSION['username'];
                                                    if (empty($valueComment)) {
                                                        return;
                                                    }
                                                    $sql2 = "insert into comments(`imageID`, `username`, `content`) VALUES ('$imageID', '$username', '$valueComment')";
                                                    $query2 = mysqli_query($conn, $sql2);
                                                    if ($query2) {
                                                        unset($valueComment);
                                                        $_SESSION['i'] = $i;

                                                    }
                                                    unset($valueComment);
                                                    unset($_POST[$nameForCheckModal]);
                                                    $_POST[$nameForCheckModal] = "";
                                                    unset($_POST);
                                                }
                                                ?>
                                            </form>
                                            <form >
                                                <?php
                                                $sql1 = "select * from comments where imageID = '$imageID'";
                                                $query1 = mysqli_query($conn, $sql1);
                                                $num1 = mysqli_num_rows($query1);
                                                if ($num1 > 0) {
                                                    while ($row1 = mysqli_fetch_array($query1)) {
                                                        $content = $row1['content'];
                                                        $usernameComment = $row1['username'];
                                                        ?>
                                                        <div class ="row"  style="padding-left: 16px;">
                                                            <a href="trangcanhan.php?link=<?php echo $username ?>"><?php echo $username . " "; ?></a>
                                                            <p><?php echo " " . $content ?></p>
                                                            <br>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal"> Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $i++;
                    }
                }
            }
            ?>
        </div>
    </div>
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
<br>
<br> 
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