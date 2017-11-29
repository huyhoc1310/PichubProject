
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--    <link rel="stylesheet" type="text/css" href="css/upload.css">-->
</head>
<body>
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
            if ($size > MAX_SIZE * 10240) {
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
<div class="upload-block">

    <form name="newad" method="post" enctype="multipart/form-data"
          action="">
        <table>

            <tr>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td><input type="text" name="description" placeholder="Description"></td>
            </tr>
            <tr>
                <td><input type="text" name="tagName" placeholder="Tag"></td>
            </tr>
            <tr>
                <td>
                    <label for="searchTerm">Search for:</label>
                    <label>
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
                        </select>
                    </label>
                </td>
            </tr>
            <tr>
                <td><input name="Submit" type="submit" value="Upload image" href="trangcanhan.php"/>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>