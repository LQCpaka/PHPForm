<?php
session_start();
include_once "functions.php";

if(isset($_SESSION["id"])){
    $idUser = $_SESSION["id"];
    $idTinTuc = $_GET["i"];
    $noiDung = $_POST["noiDung"];
    xuLyChat($idUser, $idTinTuc, $noiDung);
    
    // Trả về HTML mới cho phần hiển thị bình luận
    $newComments = getAllChat($idTinTuc);
    
    // Lặp qua mỗi bình luận và hiển thị nó
    while($rowChat = mysqli_fetch_assoc($newComments)){
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
}
?>
<hr>
