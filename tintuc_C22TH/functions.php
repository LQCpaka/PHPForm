<?php 
    function ketNoiDB(){
        return mysqli_connect("localhost","root","","tintuc_c22");
    }
    function dongKetNoi($conn){
        mysqli_close($conn);
    }


    // Lay danh sach cac slider trong
    function getSlider(){
        $conn = ketNoiDB();
        $sql = "SELECT * FROM slide";
        $rs = mysqli_query($conn,$sql);
        dongKetNoi($conn);
        return $rs;
    }

    // Lay danh sach cac the loai
    function getAllTheLoai(){
        $conn = ketNoiDB();
        // $sql = "SELECT * FROM theloai ";
        $sql = "SELECT DISTINCT theloai.* FROM theloai
        INNER JOIN loaitin ON theloai.id = loaitin.idTheLoai";
        $rs = mysqli_query($conn,$sql);
        dongKetNoi($conn);
        return $rs;
    }
    //Title
    
    function getAllTheLoaiId($idlt){
        $conn = ketNoiDB();
        $sql = "SELECT loaitin.*, theloai.Ten as TenTheLoai FROM loaitin 
        INNER JOIN theloai ON loaitin.idTheLoai = theloai.id WHERE loaitin.id = $idlt";
        $rs = mysqli_query($conn,$sql);
        dongKetNoi($conn);
        return $rs;
    }

    // get all chat

    function getAllChat($idlt){
        $conn = ketNoiDB();
        $sql = "SELECT comment.*, users.name as TenUser FROM comment
        INNER JOIN users ON comment.idUser = users.id WHERE comment.idTinTuc = $idlt ORDER BY comment.created_at DESC";
        $rs = mysqli_query($conn,$sql);
        dongKetNoi($conn);
        return $rs;
    }
    // xu xy Chat
    function xuLyChat($idUser,$idTinTuc,$noiDung){
        $conn = ketNoiDB();
        $sql = "INSERT INTO comment (idUser,idTinTuc,NoiDung,created_at)
                VALUES ('$idUser','$idTinTuc','$noiDung',NOW())";
        $rs = mysqli_query($conn,$sql);
        dongKetNoi($conn);
        return $rs;
    }


    // Lay danh sach cac loai tin theo id the loai truyen vao
    function getLoaiTinByTheLoai($idtl){
        $conn = ketNoiDB();
        $sql = "SELECT * FROM loaitin WHERE idtheloai = $idtl";
        $rs = mysqli_query($conn,$sql);
        dongKetNoi($conn);
        return $rs;
    }

    // Lay mot tin noi bat thuc the loai voi idtl truyen vao 
    function getTinNoiBatByTheLoai($idtl){
        $conn = ketNoiDB();
        $sql = "SELECT tintuc.* FROM loaitin INNER JOIN tintuc on loaitin.id = tintuc.idLoaiTin
        WHERE idTheLoai = $idtl AND NoiBat = 1 LIMIT 0,1";
        $rs = mysqli_query($conn,$sql);
        dongKetNoi($conn);
        return $rs;
    }
    // Lay danh sach tin theo trang, truyen vao $from (mau tin bat dau), $st1t (So tin 1 trang)
    function getSoTinTheoTrang($from, $st1t, $idlt){
        $conn = ketNoiDB();
        $sql = "SELECT * FROM tintuc WHERE idLoaiTin = $idlt LIMIT $from, $st1t";
        $rs = mysqli_query($conn,$sql);
        dongKetNoi($conn);
        return $rs;
    }

    // Lay Danh Sach Tin theo tu khoa can tim, truyen vao from(mau tin bat dau), $st1t (so tin 1 trang)
    function getSoTinTheoTuKhoaPhanTrang($from, $st1t, $tuKhoa){
        $conn = ketNoiDB();
        $sql = "SELECT * FROM tintuc WHERE TieuDe LIKE '%$tuKhoa%' LIMIT $from, $st1t";
        $rs = mysqli_query($conn,$sql);
        dongKetNoi($conn);
        return $rs;
    }
    // Lay tong so mau tin trong table tinuc
    function getAllTin($idlt){
        $conn = ketNoiDB();
        $sql = "SELECT * FROM tintuc WHERE idLoaiTin = $idlt";
        $rs = mysqli_query($conn,$sql);
        dongKetNoi($conn);
        return $rs;
    }
    
    function getAllTinByLoaiTin($idlt){
        $conn = ketNoiDB();
        $sql = "SELECT * FROM tintuc WHERE idLoaiTin = $idlt";
        $rs = mysqli_query($conn,$sql);
        dongKetNoi($conn);
        return $rs;
    }
    function getAllTinTuKhoa($tuKhoa){
        $conn = ketNoiDB();
        $sql = "SELECT * FROM tintuc WHERE TieuDe LIKE '%$tuKhoa%'";
        $rs = mysqli_query($conn,$sql);
        dongKetNoi($conn);
        return $rs;
    }

    $idlt = "";
    function getAllTinChiTiet($idlt, $limit){
        $conn = ketNoiDB();
        $sql = "SELECT * FROM tintuc WHERE idLoaiTin = $idlt ORDER BY RAND() LIMIT $limit";
        $rs = mysqli_query($conn,$sql);
        dongKetNoi($conn);
        return $rs;
    }
    function getAllTinChiTietNoiBat($limit){
        $conn = ketNoiDB();
        $sql = "SELECT * FROM tintuc WHERE idLoaiTin ORDER BY NoiBat DESC LIMIT $limit";
        $rs = mysqli_query($conn,$sql);
        dongKetNoi($conn);
        return $rs;
    }
    function getTinChiTiet($id){
        $conn = ketNoiDB();
        $sql = "SELECT * FROM tintuc WHERE id = $id";
        $rs = mysqli_query($conn,$sql);
        dongKetNoi($conn);
        return $rs;
    }
    function getTinByComment($id){
        $conn = ketNoiDB();
        $sql = "SELECT * FROM comment WHERE id = $id & idlt";
        $rs = mysqli_query($conn,$sql);
        dongKetNoi($conn);
        return $rs;
    }
    // Thong tin dang nhap

    function getThongTinDangNhap($email,$password){
        $conn = ketNoiDB();

        // Kiểm tra mật khẩu đã mã hóa
        $hashedPassword = md5($password);
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$hashedPassword'";
        $rs = mysqli_query($conn, $sql);

        if ($rs && mysqli_num_rows($rs) > 0) {
            $rowUser = mysqli_fetch_assoc($rs);
            dongKetNoi($conn);
            return $rowUser;
        }

        // Kiểm tra mật khẩu chưa mã hóa
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $rs = mysqli_query($conn, $sql);

        if ($rs && mysqli_num_rows($rs) > 0) {
            $rowUser = mysqli_fetch_assoc($rs);
            dongKetNoi($conn);
            return $rowUser;
        }

        dongKetNoi($conn);
        return null;
    }
    // dang ky tai khoan
    function xuLyDangKy($name,$email,$password){
        $conn = ketNoiDB();
        $hashedPassword = md5($password);
        $sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$hashedPassword')";
        $rs = mysqli_query($conn,$sql);
        dongKetNoi($conn);
        return $rs;
    }

    

?>