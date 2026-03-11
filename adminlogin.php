<?php
session_start();
include 'ketnoi.php';
$message = "";


$db = new ketnoi();
$conn = $db->getConn();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tendangnhap = $_POST['tendangnhap'];
    $matkhau = $_POST['matkhau'];

    
    $result = $conn->query("SELECT * FROM admin WHERE tendangnhap='$tendangnhap'");

    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();

    
        if ($matkhau == $admin['matkhau']) { 
          
            $_SESSION['admin_tendangnhap'] = $admin['tendangnhap'];
            $_SESSION['admin_id'] = $admin['id'];

           
            header("Location: admin_dashboard.php");
            exit();
        } else {
            $message = "Sai tài khoản hoặc mật khẩu!";
        }
    } else {
        $message = "Sai tài khoản hoặc mật khẩu!";
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng Nhập Admin</title>
    <style>
        * {
        box-sizing: border-box;
        font-size: 62.5%;
        line-height: 1.6rem;
        margin: 0 auto;
        }
        body {
         
            background-image: url('upload/lg.jpg') ;
            
        }
      

        .relog-form__btn-link {
            width: 100%;
            border: none;
            cursor: pointer;
        }

        /* relog */

        .relog {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh; /* Để căn giữa theo chiều dọc */
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
         .relog-form__title {
            font-size: 1.3rem;
            color: #979890;
            margin: 18px 0;
        }
        .relog-form__heading {
            color: #000;
            font-size: 3.0rem;
            font-weight: 300;
            text-transform: uppercase;
            margin: 0;
        }

        .relog-form__error-message {
            font-size: 1.6rem; /* Tăng kích thước font chữ */
            color: red; /* Đổi màu chữ thành đỏ */
            text-align: center;
            margin-top: 1.6rem;
            font-weight: bold; /* Đậm để dễ nhìn hơn */
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

        .relog-form__checkbox {
            font-size: 1.5rem;
            font-weight: 500;
            color: #1c5b41;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .relog-form__checkbox-miss {
            margin-right: 8px;
            
        }

        .relog-form__btn-forget {
            display: block;
            text-decoration: none;
            color: #1c5b41;
            font-weight: 500;
            font-size: 1.5rem;
            margin-top: 20px;
            transition: color ease-in .2s;
        }

        .relog-form__btn-forget:hover {
            color: orange;
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
    <form action="adminlogin.php" method="post" class="relog">
        <div class="relog-form">
            <h2 class="relog-form__heading">Đăng Nhập Admin</h2>
            <div class="relog-form__info">
                <div class="relog-form__gr">
                    <input type="text"  class="relog-form__gr-input" placeholder="Tên đăng nhập" name="tendangnhap">
                </div>
                <div class="relog-form__gr">
                    <input type="password"  class="relog-form__gr-input" placeholder="Mật khẩu" name="matkhau">
                </div>
            </div>
            <div class="relog-form__btn">
            <input class="relog-form__btn-link" type="submit" value="Login" name='ok'>
            <a title="Quay trở về trang chủ" href="index.php" class="relog-form__back">
                <i class="relog-form__back-icon fa-regular fa-circle-xmark"></i>
            </a>

        <?php if (!empty($message)): ?>
        <p class="relog-form__error-message"><?= $message ?></p>
        <?php endif; ?>
        <p class="relog-form__title">Nếu bạn là khách hàng,đăng nhập <a href="login.php" class="relog-form__link"> tại đây</a></p>
    </div>
    </form>
</body>
</html>

