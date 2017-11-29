<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'dthpicture';
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//Hien thi danh sach
function danhsach(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'dthpicture';
    $conn = new mysqli($servername, $username, $password,$db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $kq = mysqli_query($conn,"SELECT username, email from users");
    return $kq;
}


//xoa thong tin
//  if (isset($_POST["xoatt"])){
// 		$sql = "DELETE FROM nguoidungvaitro WHERE nguoidungID = $nguoidungID  and vaitroID = $vaitroID  and ngaycap = $ngaycap";
// 		$query = mysqli_query($conn, $sql);
// 		if ($query == TRUE) {
// 			echo "Xoa thanh cong";
// 		}
// 		else{
// 			echo "Xoa khong thanh cong!";
// 		}
// }


//sua thong tin
// if (isset($_POST["suatt"])) {
// 	$vaitroID= $_POST['vaitro'];
// 	$nguoidungID = $_POST['nguoidung'];
// 	$ngaycap = $_POST['ngaycap'];
// 	if ($vaitroID == "" || $ngaycap =="") {
// 		echo "Ban can nhap du thong tin de sua thong tin";
// 	}
// 	else{
// 		$sql = "SELECT * FROM nguoidungvaitro WHERE nguoidungID = '$nguoidungID'";
// 		$query = mysqli_query($conn, $sql);
// 		$num_rows = mysqli_num_rows($query);
// 		if($num_rows == 0){
// 			echo "Nguoi dung khong co trong danh sach";
// 		}
// 		else{
// 			$sql = "UPDATE nguoidungvaitro SET ngaycap = '$ngaycap', vaitroID = '$vaitroID' WHERE nguoidungID = '$nguoidungID'";
// 			$query = mysqli_query($conn, $sql);
// 			if ($query == TRUE) {
// 				header ('Location: Test.php');
// 			}
// 			else{
// 				echo "Sua thong tin khong thanh cong!";
// 			}
// 		}
// 	}
// }

?>