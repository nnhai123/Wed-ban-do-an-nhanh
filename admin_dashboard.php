<?php

session_start();


if (!isset($_SESSION['admin_tendangnhap'])) {

    header("Location: adminlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('upload/lg.jpg') ;
        }

        .dashboard-container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 25%;
        }

        h1 {
            color: #ffc107;
        }

        .option {
            margin: 20px 0;
        }

        a {
            text-decoration: none;
            background-color: #49B14D;
            color: white;
            padding: 15px 30px;
            border-radius: 8px;
            font-size: 18px;
            display: inline-block;
            transition: background-color 0.3s ease;
            width: 70%;
        }

        a:hover {
            background-color: #e0a800;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Admin Dashboard</h1>
        <p>Chào mừng, <?php echo $_SESSION['admin_tendangnhap']; ?>!</p>

        <div class="option">
            <a href="taikhoan.php">Quản lý tài khoản</a>
        </div>
        <div class="option">
            <a href="sanpham.php">Quản lý món ăn</a>
        </div>
        <div class="option">
            <a href="sanpham_nhom.php">Quản lý nhóm món ăn</a>
        </div>
        <div class="option">
            <a href="admin_logout.php">Đăng xuất</a>
        </div>
    </div>
</body>
</html>
