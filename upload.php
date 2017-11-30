<html>
<head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.3.4, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Upload</title>
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
<br>
<?php
session_start();
$servername = 'localhost';
                $username = 'root';
                $password = '';
                $db = 'dthpicture';
                $conn = new mysqli($servername, $username, $password, $db);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
if (!isset($_SESSION['username']) && !$_SESSION['password']) {
    echo "<p align='center'><b>Bạn cần đăng nhập để upload ảnh!.</b></p><a  href='Login.php'><p align='center'><b>Đăng nhập</b></p></a>";
}

// Ấn định  dung lượng file ảnh upload
define("MAX_SIZE", "100");

// hàm này đọc phần mở rộng của file. Nó được dùng để kiểm tra nếu
// file này có phải là file hình hay không .
function getExtension($str)
{
    $i = strrpos($str, ".");
    if (!$i) {
        return "";
    }
    $l = strlen($str) - $i;
    $ext = substr($str, $i + 1, $l);
    return $ext;
}

//This variable is used as a flag. The value is initialized with 0 (meaning no
// error  found)
//and it will be changed to 1 if an errro occures.
//If the error occures the file will not be uploaded.
$errors = 0;
//checks if the form has been submitted
if (isset($_POST['Submit'])) {
// lấy tên file upload
    $image = $_FILES['image']['name'];
// Nếu nó không rỗng
    if ($image) {
// Lấy tên gốc của file
        $filename = stripslashes($_FILES['image']['name']);
//Lấy phần mở rộng của file
        $extension = getExtension($filename);
        $extension = strtolower($extension);
// Nếu nó không phải là file hình thì sẽ thông báo lỗi
        if (($extension != "jpg") && ($extension != "jpeg") && ($extension !=
                "png") && ($extension != "gif")) {
// xuất lỗi ra màn hình
            echo '<h1>Đây không phải là file hình!</h1>';
            $errors = 1;
        } else {
//Lấy dung lượng của file upload
            $size = filesize($_FILES['image']['tmp_name']);
            if ($size > MAX_SIZE * 100240) {
                echo '<h1>Vượt quá dung lượng cho phép!</h1>';
                $errors = 1;
            }

// đặt tên mới cho file hình up lên
            $image_name = time() . '.' . $extension;
// gán thêm cho file này đường dẫn
            global $newname;
            $newname = "assets/images/" . $image_name;
//            echo $newname;
// kiểm tra xem file hình này đã upload lên trước đó chưa
//            echo $_FILES['image']['tmp_name'];

            $copied = copy($_FILES['image']['tmp_name'], $newname);
//            if (!$copied) {
//                echo '<h1> File hình này đã tồn tại </h1>';
//                $errors = 1;
//            }
        }
    }
}

if (isset($_POST['Submit']) && !$errors) {
    echo "<h1>File hình đã được Upload thành công </h1>";
    $username = $_SESSION["username"];
    //get tagid
    $tagName = ($_POST['tagName']);
    // $sql = "insert into tags values ('$tagName')";
    // $query = mysqli_query($conn, $sql);
    // $sql1 = "SELECT tagid FROM tags WHERE tagid = (select max(tagid) from tags)";
    // // $query1 = mysqli_query($conn, $sql1);
    // $row = mysqli_fetch_assoc($query1);
    // $tagid = null;
    // if ($row == 1) {
    //     $tagid = $row['tagid'];

    // }

    //get listid
    $albumID = ($_POST['albumName']);
    $description = $_POST['description'];
    echo $description;
    if ($albumID == "") {
        echo "Vui lòng nhập đầy đủ thông tin";
    }
    $sql = "INSERT INTO images(albumID,imageFile,description,username) VALUES ('$albumID', '$newname', '$description', '$username')";
    $query = mysqli_query($conn, $sql);
        if($query){
            header ('Location: trangcanhan.php');
            $username = $_SESSION['username'];
            $sql = "Select * from images WHERE username = '$username' Order By imageID DESC LImit 1"; 
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $_SESSION['imageID'] = $row['imageID'];
                    $imageID = $row['imageID'];
                    $arr = explode(' ', $tagName);
                    foreach($arr as $word) {
                        $sql ="insert into tags values('$imageID', '$word')";
                        echo $row['imageID'];
                        $query = mysqli_query($conn,$sql);
                        if(!$query) {
                        echo "err with tag: ". $word;
                        }
                    }
                }
            }
                    
       }           
    }
$newname = "";
$copied = null;
?>

<!-- nhớ đặt enctype to "multipart/frm-data"
và sử dụng  input type "file" -->

    <form name="newad" method="post" enctype="multipart/form-data"
          action="">
          <center>
    <fieldset style="width: 690px; height: 310px;">
        <legend><b>UPLOAD IMAGE</b></legend>
        <br>
            <table width="540" border="0" align="center" cellpadding="3" cellspacing="7" >
                <tr>
                    <td>Choose image</td>
                    <td><input type="file" name="image" ></td>
                </tr>
                <tr>
                    <td>Album name</td>
                    <td>
                        <select name="albumName">
                            <option>Chọn trong danh sách</option>
                            <?php
                            $servername = 'localhost';
                $username = 'root';
                $password = '';
                $db = 'dthpicture';
                $conn = new mysqli($servername, $username, $password, $db);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                            $username = $_SESSION['username'];
                            $sql = "select * from albums where username = '$username' ";
                            $query = mysqli_query($conn, $sql);
                            $num = mysqli_num_rows($query);
                            if ($num > 0) {
                                while ($row = mysqli_fetch_array($query)) { ?>
                                    <option value="<?php echo $row['albumID'] ?>"> <?php echo $row['albumName'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select></td>
                </tr>
                <tr>
                <td>Description</td>
                <td><textarea name="description" style="width: 300px; height: 100px;" ></textarea></td> 
            </tr>
            <tr>
                <td>Tag</td>
                <td><input type="text" name="tagName" size="34" placeholder='Các tag cách nhau bởi dấu " "'></td>
            </tr>
                </table>
             <br>
             <center>
                <tr>
                    <td colspan="2" align="center"> <input name="Submit" type="submit" value="Upload image" href="trangcanhan.php"/></td>
                </tr>
               </center>
            
  </fieldset>
</center>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
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