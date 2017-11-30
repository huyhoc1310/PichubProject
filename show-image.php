<?php
include 'connect.php';
//session_start();
/**
 * Created by PhpStorm.
 * User: VuTan
 * Date: 2017-11-29
 * Time: 4:57 PM
 */ ?>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<!--<head>-->
    <!-- Site made with Mobirise Website Builder v4.3.2, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.3.2, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
    <meta name="description" content="Website Generator Description">
    <title>image</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/trangcanhan.css">
    <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/show-image.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--</head>-->
<!--<body>-->

    <div class="col-md-12">
        <div class="row">
            <?php
//            include 'connect.php';
//            session_start();
            $username = $_SESSION['username'];
            $sql = "select * from images where username = ('$username')";
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
<!--</body>-->
<!--</html>-->