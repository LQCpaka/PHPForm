<?php
    function connect(){
        $conn = mysqli_connect("localhost","root","","qlsach");
        return $conn;
    }

    function disconnect($conn){
        mysqli_close($conn);
    }

    function getAllChuDe(){
        $conn = connect();
        $sql = "SELECT * FROM chude";
        $rs = mysqli_query($conn, $sql);
        disconnect($conn);
        return $rs;
    }
    function getAllNSX(){
        $conn = connect();
        $sql = "SELECT * FROM nhaxuatban";
        $rs = mysqli_query($conn, $sql);
        disconnect($conn);
        return $rs;
    }
    function getSachByChuDe($macd){
        $conn = connect();
        $sql = "SELECT * FROM sach WHERE MaCD = $macd";
        $rs = mysqli_query($conn, $sql);
        disconnect($conn);
        return $rs;
    }

    function themSach($txttensach,$txtdongia,$cbochude,$cbonhaxb,$file_anh_bia){
        $conn = connect();
        $sql = "INSERT INTO sach(TenSach,Dongia,MaCD,MaNXB,AnhBia) 
                VALUES ('$txttensach','$txtdongia','$cbochude','$cbonhaxb','$file_anh_bia')";
        $rs = mysqli_query($conn, $sql);
        disconnect($conn);
        return $rs;
    }

?>