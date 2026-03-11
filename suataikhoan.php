

<link href="quantri/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    
    <link href="quantri/css/sb-admin-2.min.css" rel="stylesheet">
<?php include "headerquantri.php";
include "function_taikhoan.php";
$taikhoan = new taikhoan();
$tendangnhap = $_GET['tendangnhap'];
$result = $taikhoan->hienthiid($tendangnhap);


$row = mysqli_fetch_array($result);
if(isset($_POST['ok'])){
    $taikhoan->hovaten = isset($_POST['hovaten']) ? $_POST['hovaten'] : '';
    $taikhoan->tendangnhap = isset($_POST['tendangnhap']) ? $_POST['tendangnhap'] : '';
    $taikhoan->matkhau = isset($_POST['matkhau']) ? $_POST['matkhau'] : '';
    $matkhau_nhaplai = isset($_POST['matkhau_nhaplai']) ? $_POST['matkhau_nhaplai'] : '';
    $taikhoan->email = isset($_POST['email']) ? $_POST['email'] : '';
    $taikhoan->sdt = isset($_POST['sdt']) ? $_POST['sdt'] : '';
    $taikhoan->diachi = isset($_POST['diachi']) ? $_POST['diachi'] : '';
    $taikhoan->enable = isset($_POST['enable']) ? $_POST['enable'] : 0;
    $taikhoan->update();
}
?>
<!DOCTYPE html>
<html lang="en">




<body>
 
    <div class="container">
        <h2>Sửa Tài Khoản</h2>
        <form action="" method="POST">
        <div class="form-group">
                <label for="email">Họ và tên:</label>
                <input type="text" class="form-control" name="hovaten" value="<?php echo $row['hovaten'] ?> ">
            </div>
            <div class="form-group">
                <label for="email">Tên đăng nhập:</label>
                <input type="text" class="form-control" id="ten" name="ten"
                    value="<?php echo $row['tendangnhap'] ?>" disabled >
                <input type="hidden" class="form-control" id="tendn" name="tendangnhap"
                    value="<?php echo $row['tendangnhap'] ?>" >
            </div>
            <div class="form-group">
                <label for="pwd">Mật khẩu:</label>
                <input type="password" class="form-control" name="matkhau" value="<?php echo $row['matkhau'] ?> "
                    required>
            </div>
           
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?> ">
            </div>
            <div class="form-group">
                <label for="sdt">Số điện thoại:</label>
                <input type="text" class="form-control" name="sdt" value="<?php echo $row['sdt'] ?> ">
            </div>
            <div class="form-group">
                <label for="diachi">Địa chỉ:</label>
                <input type="text" class="form-control" name="diachi" value="<?php echo $row['diachi'] ?> ">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label" style="margin-right: 30px; "> Kích hoạt </label>
                <input class="form-check-input" type="checkbox" name="enable" value="1" <?php if ($row['enable'] == 1)
                        echo "checked" ?> />
            </div>
            <button type="submit" class="btn btn-primary" name='ok'>Cập nhật</button>
            <a href="taikhoan.php" class="btn btn-primary">Trở lại</a>
        </form>
    </div>
</body>


</html>



