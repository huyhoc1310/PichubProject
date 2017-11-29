<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'dthpicture';
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $b = $_GET['state'];
?>
<html>
<head>
    <title>Quản lý users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<?php
$b = $_GET['state'] ?? '';
$c = $_GET['dele'] ?? '';
?>
<form method="POST" action="thaotac.php">
    <center>



            <legend ><b>THÔNG TIN NGƯỜI DÙNG</b></legend>
            <table width="490" border="1" align="center" cellpadding="4" cellspacing="0">
                <center>    
                    <tr>
                        <td align = "center">Tên người dùng</td>
                        <td align = "center">Email</td>     
                        <td align = "center"  colspan = "2">Thao tác </td>


                         </tr>
                    <?php require 'thaotac.php';
                    $list = danhsach();?>
                                <?php foreach ($list as $it){ ?>
                    <tr>
                        <td align = "center" ><?php echo $it['username']; ?></td>
                        <td align = "center" ><?php echo $it['email'];?></td>

                        <td align = "center"><a href ="sua.php?state=<?php echo $it['username']; ?>" type = "submit" > Sửa </a></td>
                        <td align = "center"> <a href="xoa.php?dele=<?php echo $it['username']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');" name = "xoatt"> Xóa </a></td>
                        <?php } ?>
                    </tr>
            </table>

    </center>
</form>   
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>     
</body>
</html>
<?php if($b === 'ok'): ?>
    <script>
        alert ("Sửa thông tin thành công!") ;
    </script>
<?php endif; ?>
<?php if($c === 'okk'): ?>
    <script>
        alert ("Xóa thông tin thành công!") ;
    </script>
<?php endif; ?>




