<?php
            session_start();
            include_once "functions.php";
            
            $idlt = isset($_GET["idlt"]) ? $_GET["idlt"] : 0;
            $p = isset($_GET["p"]) ? $_GET["p"] : 1;

        ?>
        
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color:#337AB7; color:white;">
                                <?php
                                    $titleTheLoai = getAllTheLoaiId($idlt);
                                    $rowTitleTheLoai = mysqli_fetch_assoc($titleTheLoai);
                                    
                                ?>
                                <h4><b><?php echo $rowTitleTheLoai["TenTheLoai"]; ?> > <?php echo $rowTitleTheLoai["Ten"]; ?></b></h4>
                            
                            </div>
                            <?php
                                
                                $st1t = 5;
                                $from = ($p-1) * $st1t;
                                $tinTheoLoaiTinPhanTrang = getSoTinTheoTrang($from,$st1t,$idlt);
                                while($rowTinTheoLoaiTin = mysqli_fetch_assoc($tinTheoLoaiTinPhanTrang)) {
                            ?>
                            <div class="row-item row">
                                <div class="col-md-3">

                                    <a href="chitiet.php?idlt=<?php echo $idlt; ?>&i=<?php echo $rowTinTheoLoaiTin["id"] ?>">
                                        <br>
                                        <img width="200px" height="200px" class="img-responsive" src="img/tintuc/<?php echo $rowTinTheoLoaiTin["Hinh"] ?>" alt="">
                                    </a>
                                </div>

                                <div class="col-md-9">
                                    <h3><?php echo $rowTinTheoLoaiTin["TieuDe"] ?></h3>
                                    <p><?php echo $rowTinTheoLoaiTin["TomTat"] ?></p>
                                    <a href="chitiet.php?idlt=<?php echo $idlt; ?>&i=<?php echo $rowTinTheoLoaiTin["id"] ?>" class="btn btn-primary" >Xem Chi Tiết<span class="glyphicon glyphicon-chevron-right"></span></a>
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
                                            $tinTucTheoTheLoaiTin = getAllTinByLoaiTin($idlt);
                                            $tongSoTin = mysqli_num_rows($tinTucTheoTheLoaiTin);
                                            $tongSoTrang = ceil($tongSoTin/$st1t);
                                            
                                        ?>
                                        <li>
                                            <a href="loaitin.php?idlt=<?php echo $idlt; ?>&p=1">&laquo;</a>
                                        </li>
                                        
                                        <?php
                                            $offset = 3;
                                            $tuTrang = max(1, $p - $offset);
                                            $dentrang = min($tongSoTrang,$p + $offset);
                                            for($i = $tuTrang; $i <= $dentrang; $i++){
                                                $active = $p == $i ? "class='active'" : "";
                                        ?>
                                        <li <?php echo $active; ?>>
                                            <a href="loaitin.php?idlt=<?php echo $idlt; ?>&p=<?php echo $i;?>"><?php echo $i;  ?></a>
                                        </li>
                                        <?php
                                            }
                                        ?>
                                        
                                        <li>
                                            <a href="loaitin.php?idlt=?<?php echo $idlt; ?>&p=<?php echo $tongSoTrang; ?>">&raquo;</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.row -->

                        </div>
                    </div>