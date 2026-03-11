<?php include "headerquantri.php";?>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "qlydoannhanh";
 
  
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  
  if (!$conn) {
      die("connection failer" . mysqli_connect_error());
  }

$tendangnhap=$_GET['tendangnhap'];
$sql="DELETE FROM  `taikhoan` WHERE tendangnhap='$tendangnhap' ";
$result=mysqli_query($conn,$sql);



if($result) {
    echo"<script>alert('xóa thành công')</script>";
    echo "<script>window.history.back()</script>";
}
else
{
    echo" <script>alert('lỗi')</script>";

}
?>