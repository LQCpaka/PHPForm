<?php
 include_once("functions.php");
?>
<div class="row justify-content-center">
    <!-- Cột bên trái => Liệt kê các chủ đề -->
    <div class="col-md-3">
        <div class="card">
            <div class="card-header text-center">CHỦ ĐỀ</div>
            <ul class="list-group list-group-flush">
                <?php 
                    $rschuDe = getAllChuDe();
                    while ($rowChuDe = mysqli_fetch_array($rschuDe)){
                ?>
                <li class="list-group-item text-success">
                    <div class="chude" MaCD="<?php echo $rowChuDe["MaCD"]; ?>"><?php echo $rowChuDe["Tenchude"]; ?></div>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </div>
    <!-- Cột bên phải => Liệt kê sách theo chủ đề -->
    <div class="col-md-9">
        <div id="ketqua" class="row">
            <!-- Noi Xu ly tin xulyxemsach.php -->
            
        </div>
    </div>
</div>