
<?php
// Ấn định  dung lượng file ảnh upload
define ("MAX_SIZE","10000");

// hàm này đọc phần mở rộng của file. Nó được dùng để kiểm tra nếu
// file này có phải là file hình hay không .
function getExtension($str) {
    $i = strrpos($str,".");
    if (!$i) { return ""; }
    $l = strlen($str) - $i;
    $ext = substr($str,$i+1,$l);
    return $ext;
}

//This variable is used as a flag. The value is initialized with 0 (meaning no
// error  found)
//and it will be changed to 1 if an errro occures.
//If the error occures the file will not be uploaded.
$errors=0;
//checks if the form has been submitted
if(isset($_POST['Submit']))
{
// lấy tên file upload
    $image=$_FILES['image']['name'];
// Nếu nó không rỗng
    if ($image)
    {
// Lấy tên gốc của file
        $filename = stripslashes($_FILES['image']['name']);
//Lấy phần mở rộng của file
        $extension = getExtension($filename);
        $extension = strtolower($extension);
// Nếu nó không phải là file hình thì sẽ thông báo lỗi
        if (($extension != "jpg") && ($extension != "jpeg") && ($extension !=
                "png") && ($extension != "gif"))
        {
// xuất lỗi ra màn hình
            echo '<h1>Đây không phải là file hình!</h1>';
            $errors=1;
        }
        else
        {
//Lấy dung lượng của file upload
            $size=filesize($_FILES['image']['tmp_name']);
            if ($size > MAX_SIZE*1024)
            {
                echo '<h1>Vượt quá dung lượng cho phép!</h1>';
                $errors=1;
            }

// đặt tên mới cho file hình up lên
            $image_name=time().'.'.$extension;
// gán thêm cho file này đường dẫn
            $newname="assets/images/".$image_name;
// kiểm tra xem file hình này đã upload lên trước đó chưa
            $copied = copy($_FILES['image']['tmp_name'], $newname);
            if (!$copied)
            {
                echo '<h1> File hình này đã tồn tại </h1>';
                $errors=1;
            }}}}

if(isset($_POST['Submit']) && !$errors)
{
    echo "<h1>File hình đã được Upload thành công </h1>";
}

?>

<!-- nhớ đặt enctype to "multipart/frm-data"
và sử dụng  input type "file" -->
<form name="newad" method="post" enctype="multipart/form-data"
      action="">
    <table>
        <tr><td><input type="file" name="image"></td></tr>
        <tr><td><input name="Submit" type="submit" value="Upload image">
            </td></tr>
    </table>
</form>