<?php
    include_once("functions.php");
    $maCD = $_GET["MaCD"];
    $rsSach = getSachByChuDe($maCD);
    while ($rowSach = mysqli_fetch_assoc($rsSach)) {
?>
<div class="col-sm-4 mb-3">
    <div class="card">
        <div class="card-header bg-danger text-white"><?php echo $rowSach["TenSach"]; ?></div>
        <img src="images/<?php echo $rowSach["AnhBia"] ?>" alt="AnhBia" class="card-img-top">
        <div class="card-footer text-center">
            <div class="card-title"><?php echo $rowSach["Dongia"]; ?></div>
            <div class="btn btn-success m-auto">Xem chi tiết</div>
        </div>
    </div>
</div>

<?php } ?>