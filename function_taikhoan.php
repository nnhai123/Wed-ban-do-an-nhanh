<?php
include "ketnoi.php";
class taikhoan extends ketnoi{
    public $hovaten;
    public $tendangnhap;
    public $matkhau;
    public $diachi;
    public $email;
    public $sdt;
    public $enable;
function hienthi(){
    $sql = "SELECT * FROM `taikhoan`";
    $result = mysqli_query($this->conn,$sql);
    return $result;
}
function hienthiid($id){
    $sql = "SELECT * FROM taikhoan WHERE tendangnhap = '$id'";
    $result = mysqli_query($this->conn,$sql);
    return $result;


}
function delete($ten){
    $sql = "DELETE FROM `taikhoan` WHERE tendangnhap = '$ten'";
    $result = mysqli_query($this->conn, $sql);


   if($result) {
    echo"<script>alert('xóa thành công')</script>";
    echo "<script> window.location ='taikhoan.php' </script>";
}
else
{
    echo" <script>alert('lỗi')</script>";


}
}
function insert(){
    $sql = "INSERT INTO `taikhoan`(`hovaten`, `tendangnhap`, `matkhau`, `email`, `sdt`,`diachi`,`enable`)
    VALUES ('".$this->hovaten."', '".$this->tendangnhap."', '".$this->matkhau."', '".$this->email."', '".$this->sdt."', '".$this->diachi."','".$this->enable."')";
    $result = mysqli_query($this->conn, $sql);
    if($result){
        echo "<script>alert('Bạn Đã Đăng Kí thành công')</script>";
        echo "<script> window.location ='login.php' </script>";
    } else {
        echo "<script>alert('lỗi')</script>";
    }
    return $result;
}
function insert1(){
    $sql = "INSERT INTO `taikhoan`(`hovaten`,`tendangnhap`, `matkhau`,  `email`, `sdt`,`diachi`, `enable`)
    VALUES ('".$this->hovaten."','".$this->tendangnhap."','".$this->matkhau."','".$this->email."','".$this->sdt."','".$this->diachi."','".$this->enable."')";
    $result = mysqli_query($this->conn,$sql);
    if($result){
        echo "<script>alert('Đăng ký thành công')</script>";
        echo "<script>window.location ='taikhoan.php'</script>";
    } else {
        echo "<script>alert('Đăng ký thất bại')</script>";
    }
    return $result;
}
function update(){


$sql = "UPDATE`taikhoan` SET
`hovaten`='".$this->hovaten."',
 `matkhau`='".$this->matkhau."',
 `email`='".$this->email."',
  `sdt`='".$this->sdt."',
  `diachi`='".$this->diachi."',
 `enable`='".$this->enable."'
  WHERE `tendangnhap`='".$this->tendangnhap."'";
$result = mysqli_query($this->conn,$sql);


if ($result) {
    echo "<script>alert(' Sửa Thành công!')</script>";
    echo "<script> window.location ='taikhoan.php' </script>";
}
return $result;
}
};



