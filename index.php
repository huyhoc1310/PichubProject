<?php session_start(); ?>
<html>
<head>
    <!-- Site made with Mobirise Website Builder v4.3.4, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.3.4, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Home</title>
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
<section class="engine">
    <a href="https://mobirise.co/i">build your own website for free</a>
</section>
<section class="header1 cid-qy5CjryeaH mbr-parallax-background" id="header1-i" data-rv-view="120">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">Pichub</h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">Trang web quản lý
                    album ảnh miễn phí</h3>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5"> Bạn có thể xem và tải những bức ảnh với
                    chất lượng RAW hoặc những bức ảnh JPEG chất lượng cao</p>
            </div>
        </div>
    </div>
</section>
<section class="features12 cid-qy5EyJyzBW" id="features12-q" data-rv-view="125">
    <div class="container">
        <h2 class="mbr-section-title pb-2 mbr-fonts-style display-2"> TÍNH NĂNG CHÍNH</h2>
        <h3 class="mbr-section-subtitle pb-3 mbr-fonts-style display-5">EVERYTHING IS FREE FOR NON-COMERICAL USE</h3>
        <div class="media-container-row pt-5">
            <div class="block-content align-right">
                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3"><span class="mbri-upload mbr-iconfont" media-simple="true"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7"> UPLOAD&nbsp;</h4>
                        </div>
                    </div>
                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7"> UPLOAD ảnh không giới hạn với
                            chất lượng gốc. </p>
                    </div>
                </div>
                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3"><span class="mbri-drag-n-drop2 mbr-iconfont"
                                                         media-simple="true"></span></div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7"> Easy and Simple to
                                Use </h4>
                        </div>
                    </div>
                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7"> Dễ dàng sử dụng</p>
                    </div>
                </div>
            </div>
            <div class="mbr-figure" style="width: 50%;">
                <img src="assets/images/06.jpg" alt="Mobirise" media-simple="true"></div>
            <div class="block-content align-left  ">
                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3"><span class="mbri-features mbr-iconfont" media-simple="true"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">Album và tag</h4>
                        </div>
                    </div>
                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">Những bức ảnh sẽ được quản lý
                            theo tag và album</p>
                    </div>
                </div>
                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3"><span class="mbri-sites mbr-iconfont" media-simple="true"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7"> Free</h4>
                        </div>
                    </div>
                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7"> Miễn phí 100%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <?php
                        include 'connect.php';
            $username = $_SESSION['username'];
            $sql = "select * from images limit 18";
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



