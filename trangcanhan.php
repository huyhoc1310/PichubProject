<?php session_start(); ?>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.3.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Website Generator Description">
  <title>Page 2</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/trangcanhan.css">
  <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
 
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
?>
<div class="user-profile">
	<img class="avatar" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTF_erFD1SeUnxEpvFjzBCCDxLvf-wlh9ZuPMqi02qGnyyBtPWdE-3KoH3s" alt="Ash" />
    <div class="username"><?php echo $_SESSION['username']; ?></div>
  <div class="bio">
  	Senior UI Designer
  </div>
  <br>
</div>

<section class="mbr-gallery mbr-slider-carousel cid-qBCX1x0e0w" id="gallery2-k" data-rv-view="256">
    <div class="container">
        <div><!-- Filter --><div class="mbr-gallery-filter container gallery-filter-active"><ul buttons="0"><li class="mbr-gallery-filter-all"><a class="btn btn-md btn-primary-outline active display-4" href="">Photos</a></li></ul></div><!-- Gallery --><div class="mbr-gallery-row"><div class="mbr-gallery-layout-default"><div><div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Likes"><div href="#lb-gallery2-k" data-slide-to="0" data-toggle="modal"><img src="assets/images/gallery00.jpg" alt=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Downloads"><div href="#lb-gallery2-k" data-slide-to="1" data-toggle="modal"><img src="assets/images/gallery01.jpg" alt=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Likes"><div href="#lb-gallery2-k" data-slide-to="4" data-toggle="modal"><img src="assets/images/gallery04.jpg" alt=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Likes"><div href="#lb-gallery2-k" data-slide-to="5" data-toggle="modal"><img src="assets/images/gallery05.jpg" alt=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Downloads"><div href="#lb-gallery2-k" data-slide-to="6" data-toggle="modal"><img src="assets/images/gallery06.jpg" alt=""><span class="icon-focus"></span></div></div></div></div><div class="clearfix"></div></div></div><!-- Lightbox --><div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery2-k"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><div class="carousel-inner"><div class="carousel-item active"><img src="assets/images/gallery00.jpg" alt=""></div><div class="carousel-item"><img src="assets/images/gallery01.jpg" alt=""></div><div class="carousel-item"><img src="assets/images/gallery02.jpg" alt=""></div><div class="carousel-item"><img src="assets/images/gallery03.jpg" alt=""></div><div class="carousel-item"><img src="assets/images/gallery04.jpg" alt=""></div><div class="carousel-item"><img src="assets/images/gallery05.jpg" alt=""></div><div class="carousel-item"><img src="assets/images/gallery06.jpg" alt=""></div><div class="carousel-item"><img src="assets/images/gallery07.jpg" alt=""></div></div><a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery2-k"><span class="mbri-left mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery2-k"><span class="mbri-right mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span></a></div></div></div></div></div>
    </div>

</section>


  <section class="engine"><a href="https://mobirise.co/e">web building software</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/jquery-mb-vimeo_player/jquery.mb.vimeo_player.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/mobirise-gallery/player.min.js"></script>
  <script src="assets/mobirise-gallery/script.js"></script>
  <script src="assets/mobirise-slider-video/script.js"></script>
  
  
</body>
</html>