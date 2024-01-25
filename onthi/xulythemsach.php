<?php

    include_once "functions.php";
    $txttensach = "";
    $txtdongia = "";
    $cbochude = "";
    $cbonhaxb = "";
    $file_anh_bia = "";
    if(isset($_POST["btnsubmit"])){
        $txttensach = $_POST['txttensach'];
        $txtdongia = $_POST['txtdongia'];
        $cbochude = $_POST['cbochude'];
        $cbonhaxb = $_POST['cbonhaxb'];
        var_dump($_POST);
        if(isset($_FILES['file_anh_bia'])){
            move_uploaded_file($_FILES['file_anh_bia']['tmp_name'],
             'images/'.$_FILES['file_anh_bia']['name']);
            $file_anh_bia = $_FILES['file_anh_bia']['name'];
            var_dump($file_anh_bia);
        }
        
    }
    $rsThemSach =  themSach($txttensach,$txtdongia,$cbochude,$cbonhaxb,$file_anh_bia);
        if($rsThemSach){
            header('location:index.php');
        } else{
            echo "Lỗi khi thêm dữ Liệu";
        } 

?>