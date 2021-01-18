<?php
include_once('php/connect.php');
if ($_POST['ten'] == '' or $_POST['ho'] == '' or $_POST['sdt'] == '' or $_POST['email'] == '' or $_POST['diachi'] == ''
        or $_POST['newUser'] == ''  or $_POST['newPass'] == '') {
    echo "<script language='javascript'>alert('Phải điền đầy đủ cho tất cả các trường');";
    echo "location.href='index.php';</script>";
    exit;
} else {
    $ten = $_POST['ten'];
    $ho = $_POST['ho'];
    $dien_thoai = $_POST['sdt'];
    $email = $_POST['email'];
    $dia_chi = $_POST['diachi'];
    $user = $_POST['newUser'];
    $password = $_POST['newPass'];
    $password= md5($password);
    $maquyen=1;
    $trangthai=1;
     $sl="
INSERT INTO nguoidung (MaND, Ho, Ten, GioiTinh, SDT, Email, DiaChi, TaiKhoan, MatKhau, MaQuyen, TrangThai) VALUE
('', '$ho', '$ten', '', '$dien_thoai', '$email', '$dia_chi', '$user', '$password', '$maquyen', '$trangthai')";
    if (mysqli_query($connect, $sl)) {
        echo "<script language='javascript'>alert('Đăng kí thành công');";
        echo "location.href='index.php';</script>";
    } else {
        echo 'Lỗi: '. mysqli_error();
    }
}
?>