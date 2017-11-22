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
</head>

<body>
  <section class="menu cid-qy5EfwEAEs" once="menu" id="menu2-n" data-rv-view="118">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-toggleable-sm">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="hamburger"> <span></span> <span></span> <span></span> <span></span> </div>
      </button>
      <div class="menu-logo">
        <div class="navbar-brand"> <span class="navbar-logo">
                    <a href="index.php">
                        <img src="assets/images/logo2.png" alt="Mobirise" media-simple="true" style="height: 3.8rem;">
                    </a>
                </span> <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="index.php">
                        Pichub</a></span> </div>
      </div>
      <div class="wrap">
        <div class="search">
          <input type="text" class="searchTerm" placeholder="What are you searching for?" style="color: black">
          <button type="submit" class="searchButton"> <i class="fa fa-search"></i> </button>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-buttons mbr-section-btn">
            <?php
            if (isset($_SESSION['username']) && $_SESSION['password']){
                echo '<a class="btn btn-sm btn-primary display-4"  href="upload.php"> <span class="btn-icon mbri-mobile mbr-iconfont mbr-iconfont-btn">
                    </span> Upload </a>';
            }
            else{
                echo '
                    <a class="btn btn-sm btn-primary display-4"  href="login.php"> <span class="btn-icon mbri-mobile mbr-iconfont mbr-iconfont-btn">
                    </span> Upload </a>';
            }
            ?>
        </div>
        <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
          
         <?php 
       if (isset($_SESSION['username']) && $_SESSION['password']){
           echo '<li class="nav-item"><a class="nav-link link text-black display-4" href="logout.php"> Logout('.$_SESSION['username'].')</a>';
       }
       else{
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
          <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">>Pichub<</h1>
          <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">Trang web quản lý album ảnh miễn phí</h3>
          <p class="mbr-text align-center pb-3 mbr-fonts-style display-5"> Bạn có thể xem và tải những bức ảnh với chất lượng RAW hoặc những bức ảnh JPEG chất lượng cao</p>
          <div class="mbr-section-btn align-center">
            <a class="btn btn-md btn-primary display-4" href="https://mobirise.com"> <span class="mbr-iconfont mbri-file"></span>LEARN MORE</a>
            <a class="btn btn-md btn-white-outline display-4" href="https://mobirise.com"> <span class="mbr-iconfont mbri-idea"></span>LIVE DEMO</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mbr-section article content9 cid-qy5D6PU2L2" id="content9-l" data-rv-view="123">
    <div class="container">
      <div class="inner-container" style="width: 100%;">
        <hr class="line" style="width: 25%;">
        <div class="section-text align-center mbr-fonts-style display-5">"PICHUB là một trong những trang web quản lý ảnh tuyệt vời nhất mà tôi từng biết đến"
          <br>-Mark Zuckerberg-&nbsp;</div>
        <hr class="line" style="width: 25%;"> </div>
    </div>
  </section>
  <section class="features12 cid-qy5EyJyzBW" id="features12-q" data-rv-view="125">
    <div class="container">
      <h2 class="mbr-section-title pb-2 mbr-fonts-style display-2"> NHỮNG TÍNH NĂNG CHÍNH</h2>
      <h3 class="mbr-section-subtitle pb-3 mbr-fonts-style display-5">EVERYTHING IS FREE FOR NON-COMERICAL USE</h3>
      <div class="media-container-row pt-5">
        <div class="block-content align-right">
          <div class="card pl-3 pr-3 pb-5">
            <div class="mbr-card-img-title">
              <div class="card-img pb-3"> <span class="mbri-upload mbr-iconfont" media-simple="true"></span> </div>
              <div class="mbr-crt-title">
                <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7"> UPLOAD&nbsp;</h4>
              </div>
            </div>
            <div class="card-box">
              <p class="mbr-text mbr-section-text mbr-fonts-style display-7"> UPLOAD ảnh không giới hạn với chất lượng gốc. </p>
            </div>
          </div>
          <div class="card pl-3 pr-3 pb-5">
            <div class="mbr-card-img-title">
              <div class="card-img pb-3"> <span class="mbri-drag-n-drop2 mbr-iconfont" media-simple="true"></span> </div>
              <div class="mbr-crt-title">
                <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7"> Easy and Simple to Use </h4>
              </div>
            </div>
            <div class="card-box">
              <p class="mbr-text mbr-section-text mbr-fonts-style display-7"> Dễ dùng nữa ._.</p>
            </div>
          </div>
        </div>
        <div class="mbr-figure" style="width: 50%;">
          <img src="assets/images/06.jpg" alt="Mobirise" media-simple="true"> </div>
        <div class="block-content align-left  ">
          <div class="card pl-3 pr-3 pb-5">
            <div class="mbr-card-img-title">
              <div class="card-img pb-3"> <span class="mbri-features mbr-iconfont" media-simple="true"></span> </div>
              <div class="mbr-crt-title">
                <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">Album và tag</h4>
              </div>
            </div>
            <div class="card-box">
              <p class="mbr-text mbr-section-text mbr-fonts-style display-7">Những bức ảnh sẽ được quản lý theo tag và album</p>
            </div>
          </div>
          <div class="card pl-3 pr-3 pb-5">
            <div class="mbr-card-img-title">
              <div class="card-img pb-3"> <span class="mbri-sites mbr-iconfont" media-simple="true"></span> </div>
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
  <section class="mbr-gallery mbr-slider-carousel cid-qy5CX7FRyo" id="gallery2-j" data-rv-view="128">
    <div class="container">
      <div>
        <!-- Filter -->
        <div class="mbr-gallery-filter container gallery-filter-active">
          <ul buttons="0">
            <li class="mbr-gallery-filter-all">
              <a class="btn btn-md btn-primary-outline active display-4" href="">All</a>
            </li>
          </ul>
        </div>
        <!-- Gallery -->
        <div class="mbr-gallery-row">
          <div class="mbr-gallery-layout-default">
            <div>
              <div>
                <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Awesome">
                  <div href="#lb-gallery2-j" data-slide-to="0" data-toggle="modal">
                    <img src="assets/images/gallery00.jpg" alt=""><span class="icon-focus"></span></div>
                </div>
                <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Responsive">
                  <div href="#lb-gallery2-j" data-slide-to="1" data-toggle="modal">
                    <img src="assets/images/gallery01.jpg" alt=""><span class="icon-focus"></span></div>
                </div>
                <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Creative">
                  <div href="#lb-gallery2-j" data-slide-to="2" data-toggle="modal">
                    <img src="assets/images/gallery02.jpg" alt=""><span class="icon-focus"></span></div>
                </div>
                <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Animated">
                  <div href="#lb-gallery2-j" data-slide-to="3" data-toggle="modal">
                    <img src="assets/images/gallery03.jpg" alt=""><span class="icon-focus"></span></div>
                </div>
                <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Awesome">
                  <div href="#lb-gallery2-j" data-slide-to="4" data-toggle="modal">
                    <img src="assets/images/gallery04.jpg" alt=""><span class="icon-focus"></span></div>
                </div>
                <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Awesome">
                  <div href="#lb-gallery2-j" data-slide-to="5" data-toggle="modal">
                    <img src="assets/images/gallery05.jpg" alt=""><span class="icon-focus"></span></div>
                </div>
                <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Responsive">
                  <div href="#lb-gallery2-j" data-slide-to="6" data-toggle="modal">
                    <img src="assets/images/gallery06.jpg" alt=""><span class="icon-focus"></span></div>
                </div>
                <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Animated">
                  <div href="#lb-gallery2-j" data-slide-to="7" data-toggle="modal">
                    <img src="assets/images/gallery07.jpg" alt=""><span class="icon-focus"></span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Lightbox -->
      </div>
    </div>
  </section>
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
</body>

</html>



