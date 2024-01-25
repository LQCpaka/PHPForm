        <?php
            session_start();
            include_once "functions.php";
            $tuKhoa = $_GET["tuKhoa"];
            // $idlt = $_GET["idlt"];
            $p = isset($_GET["p"]) ?  $_GET["p"] : 1;
            // $tenTheLoai = "";

        ?>

        <!DOCTYPE html>
        <html lang="en">

        <?php
            include_once"head.php";
        ?>

        <body class="mBG">
            
                <?php
                    include_once("nav.php");
                ?>

            <!-- Page Content -->
            <div class="container">
                <div class="row">
                <?php
                    include_once("leftmenu.php");
                ?>

                    <div class="col-md-9 ">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color:#337AB7; color:white;">
                            
                                <h4><b>Danh Sách Tin Tìm Thấy</b></h4>
                            
                            </div>
                            <?php
                                
                                $st1t = 5;
                                $from = ($p-1) * $st1t;
                                $tinTheoTuKhoaPhanTrang = getSoTinTheoTuKhoaPhanTrang($from,$st1t,$tuKhoa);
                                while($rowTinTheoTuKhoa = mysqli_fetch_assoc($tinTheoTuKhoaPhanTrang)) {
                            ?>
                            <div class="row-item row">
                                <div class="col-md-3">

                                    <a href="chitiet.php?idlt=<?php echo $rowTinTheoTuKhoa["idLoaiTin"]; ?>&i=<?php echo $rowTinTheoTuKhoa["id"] ?>">
                                        <br>
                                        <img width="200px" height="200px" class="img-responsive" src="img/tintuc/<?php echo $rowTinTheoTuKhoa["Hinh"] ?>" alt="">
                                    </a>
                                </div>

                                <div class="col-md-9">
                                    <h3><?php echo $rowTinTheoTuKhoa["TieuDe"] ?></h3>
                                    <p><?php echo $rowTinTheoTuKhoa["TomTat"] ?></p>
                                    <a 
                                    class="btn btn-primary" href="chitiet.php?idlt=<?php echo $rowTinTheoTuKhoa["idLoaiTin"]; ?>&i=<?php echo $rowTinTheoTuKhoa["id"] ?>">Xem Chi Tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                                <div class="break"></div>
                            </div>
                            <?php
                                }
                            ?>
                            


                            <!-- Pagination -->
                            <div class="row text-center">
                                <div class="col-lg-12">
                                    <ul class="pagination">
                                        <?php
                                            $tinTheoTuKhoa = getAllTinTuKhoa($tuKhoa);
                                            $tongSoTin = mysqli_num_rows($tinTheoTuKhoa);
                                            $tongSoTrang = ceil($tongSoTin/$st1t);
                                            
                                        ?>
                                        <li>
                                            <a href="timkiem.php?tuKhoa=<?php echo $tuKhoa; ?>&p=1">&laquo;</a>
                                        </li>
                                        
                                        <?php
                                            $offset = 3;
                                            $tuTrang = max(1, $p - $offset);
                                            $dentrang = min($tongSoTrang,$p + $offset);
                                            for($i = $tuTrang; $i <= $dentrang; $i++){
                                                $active = $p == $i ? "class='active'" : "";
                                        ?>
                                        <li <?php echo $active; ?>>
                                            <a href="timkiem.php?tuKhoa=<?php echo $tuKhoa; ?>&p=<?php echo $i;?>"><?php echo $i;  ?></a>
                                        </li>
                                        <?php
                                            }
                                        ?>
                                        
                                        <li>
                                            <a href="timkiem.php?tuKhoa=?<?php echo $tuKhoa; ?>&p=<?php echo $tongSoTrang; ?>">&raquo;</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.row -->

                        </div>
                    </div> 

                </div>

            </div>
            <!-- end Page Content -->

            <!-- Footer -->
            <?php 
                include_once "footer.php"
            ?>
            
            
            <!-- end Footer -->
            <!-- jQuery -->
            <script src="js/jquery.js"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>
            <script src="js/my.js"></script>

        </body>

        </html>
