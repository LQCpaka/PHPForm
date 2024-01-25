<!DOCTYPE html>
<html lang="en">

<?php
 include_once("head.php");
?>

<body class="mBG">
    <?php
    session_start();
    include_once "functions.php";
    include_once "nav.php";
    if (isset($_POST["btnSubmit"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $userInfo = getThongTinDangNhap($email, $password);

    if ($userInfo) {
        $_SESSION["id"] = $userInfo["id"];
        $_SESSION["name"] = $userInfo["name"];
        header("location:index.php");
        
        
    } else {
        echo "<script type='text/javascript'>alert('Sai Ten Dang Nhap Hoac Mat Khau');</script>";
    }
        
    }   

    ?>


    <!-- Page Content -->
    <div class="container">

        <!-- slider -->
        <div class="row carousel-holder">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Đăng nhập</div>
                    <div class="panel-body">
                        <form method="POST">
                            <div>
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                            <br>
                            <div>
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <br>
                            <button name="btnSubmit" type="submit" class="btn btn-success">Đăng nhập
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <!-- end slide -->
    </div>
    <!-- end Page Content -->


    <!-- end Footer -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>

</body>

</html>