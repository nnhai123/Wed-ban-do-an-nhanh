<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlydoannhanh";



$conn = mysqli_connect($servername, $username, $password, $dbname);



if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}


include "function_taikhoan.php";
$taikhoan = new taikhoan();


if (isset($_POST['tbOk'])) {
    $taikhoan->hovaten = isset($_POST['hovaten']) ? $_POST['hovaten'] : '';
    $taikhoan->tendangnhap = isset($_POST['tendangnhap']) ? $_POST['tendangnhap'] : '';
    $taikhoan->matkhau = isset($_POST['matkhau']) ? $_POST['matkhau'] : '';
    $matkhau_nhaplai = isset($_POST['matkhau_nhaplai']) ? $_POST['matkhau_nhaplai'] : '';
    $taikhoan->email = isset($_POST['email']) ? $_POST['email'] : '';
    $taikhoan->sdt = isset($_POST['sdt']) ? $_POST['sdt'] : '';
    $taikhoan->diachi = isset($_POST['diachi']) ? $_POST['diachi'] : '';
    $taikhoan->enable = isset($_POST['enable']) ? $_POST['enable'] : 0;


    if (empty($taikhoan->hovaten) || empty($taikhoan->tendangnhap) || empty($taikhoan->matkhau) || empty($matkhau_nhaplai) || empty($taikhoan->email) || empty($taikhoan->sdt)) {
        echo "<script>alert('Không được để trống bất kỳ trường nào');</script>";
    }
    // Kiểm tra mật khẩu nhập lại
    elseif ($taikhoan->matkhau !== $matkhau_nhaplai) {
        echo "<script>alert('Mật khẩu không trùng khớp. Vui lòng nhập lại!');</script>";
    }
    else {
        $taikhoan->insert();
        echo "<script>alert('Đăng ký thành công!');</script>";
    }
}
?>


 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
        box-sizing: border-box;
        font-size: 62.5%;
        line-height: 1.6rem;
        margin: 0 auto;
        }
        body {
     
            background-image: url('upload/lg.jpg');
            background-image:no-repeat ;
            
        }
        .relog-form__btn-link {
            width: 100%;
            border: none;
            cursor: pointer;
        }


        /* relog */


        .relog-register {
            display: flex;
            padding: 100px 0 50px 0;
        }


        .relog-form {
            margin: auto;
            text-align: center;
            padding: 50px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
            position: relative;
        }


        .relog-form__heading {
            color: #000;
            font-size: 3.0rem;
            font-weight: 300;
            text-transform: uppercase;
            margin: 0;
        }


        .relog-form__title {
            font-size: 1.3rem;
            color: #979890;
            margin: 18px 0;
        }


        .relog-form__link {
            font-size: 1.3rem;
            text-decoration: none;
            color: #1c5b41;
        }


        .relog-form__gr {
            display: flex;
            margin: 16px 0;
        }


        .relog-form__gr-input {
            flex: 1;
            padding: 16px 20px;
            min-width: 320px;
            font-size: 1.3rem;
            border-radius: 10px;
            border: none;
            background-color: #ebebeb;
        }


        .relog-form__btn-link {
            display: block;
            padding: 12px 0;
            text-decoration: none;
            color: #fff;
            font-size: 1.3rem;
            border-radius: 10px;
            background-color: #1c5b41;
            transition: background-color ease-in .2s;
        }


        .relog-form__btn-link:hover {
            background-color: orange;
        }


        .relog-form__select-text {
            margin-top: 20px;
            color: var(--black-color);
            font-size: 1.3rem;
        }


        .relog-form__social {
            display: flex;
            flex-direction: column;
            position: relative;
        }


        .relog-form__social-fb,
        .relog-form__social-gg {
            text-decoration: none;
            color: #fff;
            margin: 12px auto;
            padding: 12px 0;
            width: 130px;
            border-radius: 2px;
            display: flex;
            position: relative;
        }


        .relog-form__social-icon-fb {
            font-size: 1.3rem;
            margin: 0 15%;
            position: relative;
            top: 2px;
            right: 2px;
        }


        .relog-form__social-icon-gg {
            font-size: 1.3rem;
            margin: 0 15%;
            position: relative;
            top: 2px;
            right: 4px;
        }


        .relog-form__social-text::before {
            content: "";
            display: block;
            position: absolute;
            right: 88px;
            top: 50%;
            transform: translateY(-50%);
            border-right: 1px solid #3a3a3a;
            height: 36px;
        }


        .relog-form__social-text {
            text-align: start;
            font-size: 1.2rem;
            margin: 0;
        }


        .relog-form__social-fb {
            background-color: #3b5998;
        }


        .relog-form__social-gg {
            background-color: #e14b33;
        }


        .relog-form__social-text-fb {
            margin-left: 6px;
        }


        .relog-form__btn-forget {
            display: block;
            text-decoration: none;
            color: #1c5b41;
            font-weight: 300;
            font-size: 1.4rem;
            margin-top: 20px;
            transition: color ease-in .2s;
        }


        .relog-form__btn-forget:hover {
            color: orange;
        }
        .relog-form__checkbox {
            font-size: 1.5rem;
            font-weight: 500;
            color: #1c5b41;
            display: flex;
            justify-content: start;
            align-items: center;
            margin: 20px 0;
        }


        .relog-form__checkbox-miss {
            margin:0 4px 0 16px ;
           
        }


        .relog-form__back-icon {
            color: #1c5b41;
            font-size: 3.6rem;
            position: absolute;
            top: 13px;
            right: 14px;
        }
    </style>
</head>
<body>
    <form action="#" method="post" class="relog-register">
        <div class="relog-form">
            <h2 class="relog-form__heading">Đăng Ký</h2>
           
            <div class="relog-form__info">
            <div class="relog-form__gr">
                    <input type="text" name="hovaten" class="relog-form__gr-input" placeholder="Họ và Tên">
                </div>
                <div class="relog-form__gr">
                    <input type="text" name="tendangnhap" class="relog-form__gr-input" placeholder="Tên Đăng Nhập">
                </div>
                <div class="relog-form__gr">
                    <input type="text" name="email" class="relog-form__gr-input" placeholder="Email">
                </div>
                <div class="relog-form__gr">
                    <input type="text" name="sdt" class="relog-form__gr-input" placeholder="Số Điện Thoại">
                </div>
                <div class="relog-form__gr">
                    <input type="text" name="diachi" class="relog-form__gr-input" placeholder="Địa Chỉ">
                </div>
                <div class="relog-form__gr">
                    <input type="password" name="matkhau" class="relog-form__gr-input" placeholder="Password">
                </div>
                <div class="relog-form__gr">
                    <input type="password" name="matkhau_nhaplai" class="relog-form__gr-input" placeholder="Nhập lại Password">
                </div>
               
            </div>
                   
            <div class="relog-form__btn">
                <button type="submit" name="tbOk" class="relog-form__btn-link">Đăng ký</button>
            </div>
            <p class="relog-form__title">Đã có tài khoản, đăng nhập <a href="login.php" class="relog-form__link"> tại đây</a></p>
            <a title="Quay trở về trang chủ" href="index.php" class="relog-form__back">
                <i class="relog-form__back-icon fa-regular fa-circle-xmark"></i>
            </a>
        </div>
    </form>
</body>
</html>




 

