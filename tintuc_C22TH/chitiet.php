<?php
    session_start();
    include_once "functions.php";
    $idlt = $_GET["idlt"];        
    $i = $_GET["i"];

?>

<!DOCTYPE html>
<html lang="en">

<?php
    include_once "head.php";
?>

<body class="mBG">

    <!-- Navigation -->
    <?php
        include_once("nav.php");
    ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <?php
                $tinTucTheoTheLoaiTinM = getTinChiTiet($i);
                while($rowTinTucTheoLoaiTinM = mysqli_fetch_assoc($tinTucTheoTheLoaiTinM)){
                    $thoiGianTuDataBase = $rowTinTucTheoLoaiTinM["created_at"];
                    $thoiGianConvert = date("F j, Y \a\\t H:i A", strtotime($thoiGianTuDataBase));
            ?>
            <!-- Blog Post Content Column -->
            <div class="col-lg-9 panel panel-default" >

                <!-- Blog Post -->
                <div class="panel-heading">
                    <h1><?php echo $rowTinTucTheoLoaiTinM["TieuDe"]; ?></h1>
                </div>
                <!-- Title -->
                

                <!-- Author -->
                <p class="lead">
                    by <a href="#">Start Bootstrap</a> 
                </p>
                <!-- http://placehold.it/900x300 -->
                <!-- Preview Image -->
                <img class="img-responsive" style="height:400px; width: 100%" src="img/tintuc/<?php echo $rowTinTucTheoLoaiTinM["Hinh"]; ?>" alt="">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted: <?php echo $thoiGianConvert ?></p>
                <hr>
                    <div>
                        
                    </div>
                <!-- Post Content -->
                <p class="lead" ><?php echo $rowTinTucTheoLoaiTinM["TomTat"]; ?></p>
                <?php echo $rowTinTucTheoLoaiTinM["NoiDung"]; ?>
                <hr>

                <?php } ?>

                <!-- Blog Comments -->
                
                <?php if(isset($_SESSION["id"])){?>
                <!-- Comments Form -->
                        
                    <div class="well">
                        <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                        <form id="cGhi" method="POST">
                            <div class="form-group">
                                <textarea class="form-control" name="noiDung" rows="3"></textarea>
                            </div>
                            <button type="submit" name="btnSubmit" class="btn btn-primary">Gửi</button>
                        </form>
                    </div>
                <?php
                    } else {
                ?>
                 <?php } ?>
                <hr>

                <div id="posted-comments">
                    <!-- Posted Comments -->
                    <?php 
                        $getAllDoanChat = getAllChat($i);
                        while($rowChat = mysqli_fetch_assoc($getAllDoanChat)){
                            $thoiGianTuDataBase = $rowChat["created_at"];
                            $thoiGianConvert = date("F j, Y \a\\t H:i A", strtotime($thoiGianTuDataBase));
                    ?>
                    <!-- Comment -->
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="http://placehold.it/64x64" alt="">
                        </a>
                        
                        
                        <div class="media-body">
                            <h4 class="media-heading"> 
                                <?php echo $rowChat["TenUser"]; ?>
                                <small><?php echo $thoiGianConvert ?></small>
                            </h4>
                            <?php echo $rowChat["NoiDung"]; ?>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    <hr>
                </div>
                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin liên quan</b></div>
                    <div class="panel-body">
                        <?php
                            $tinTucTheoTheLoaiTin = getAllTinChiTiet($idlt, 5);
                            while($rowTinTucTheoLoaiTin = mysqli_fetch_assoc($tinTucTheoTheLoaiTin)){
                        ?>
                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="chitiet.php?idlt=<?php echo $rowTinTucTheoLoaiTin["idLoaiTin"];?>&i=<?php echo $rowTinTucTheoLoaiTin["id"]; ?>">
                                    <img class="img-responsive" src="img/tintuc/<?php echo $rowTinTucTheoLoaiTin["Hinh"]; ?>" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="chitiet.php?idlt=<?php echo $rowTinTucTheoLoaiTin["idLoaiTin"];?>&i=<?php echo $rowTinTucTheoLoaiTin["id"]; ?>"><b><?php echo $rowTinTucTheoLoaiTin["TieuDe"]; ?></b></a>
                            </div>
                            <p><?php echo $rowTinTucTheoLoaiTin["TomTat"]; ?>.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->
                        <?php
                            }
                        ?>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin nổi bật</b></div>
                    <div class="panel-body">
                        <?php
                            $tinTucTheoTheLoaiTinNoiBat = getAllTinChiTietNoiBat(5);
                            while($rowTinTucTheoTheLoaiTinNoiBat = mysqli_fetch_assoc($tinTucTheoTheLoaiTinNoiBat)){
                        ?>
                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="chitiet.php?idlt=<?php echo $rowTinTucTheoTheLoaiTinNoiBat["idLoaiTin"];?>&i=<?php echo $rowTinTucTheoTheLoaiTinNoiBat["id"] ?>">
                                    <img class="img-responsive" src="img/tintuc/<?php echo $rowTinTucTheoTheLoaiTinNoiBat["Hinh"]; ?>" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="chitiet.php?idlt=<?php echo $rowTinTucTheoTheLoaiTinNoiBat["idLoaiTin"];?>&i=<?php echo $rowTinTucTheoTheLoaiTinNoiBat["id"] ?>"><b><?php echo $rowTinTucTheoTheLoaiTinNoiBat["TieuDe"]; ?></b></a>
                            </div>
                            <p><?php echo $rowTinTucTheoTheLoaiTinNoiBat["TomTat"]; ?></p>

                            <div class="break"></div>
                        </div>

                        <!-- end item -->

                        <?php
                            }
                        ?>
                    </div>
                </div>
                
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

    <!-- Footer -->
    <hr>
    <?php include_once "footer.php"; ?>
    <!-- end Footer -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>
    <script> 
        $(document).ready(function(){
            $("#cGhi").submit(function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "xulychat.php?i=<?php echo $i; ?>",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        console.log(data);
                        // Sau khi gửi thành công, cập nhật phần hiển thị bình luận
                        $("#posted-comments").html(data);
                    }
                });
            });
        });
    </script>

</body>

</html>
