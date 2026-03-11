

<style>
.left-menu {
    width: 200px; /* Chiều rộng của menu */
    padding: 20px; /* Padding cho menu */
    background-color: white; /* Màu nền cho menu */
    position: fixed; /* Đặt menu cố định */
    top: 200px; /* Khoảng cách từ đỉnh trang */
    left: 0; /* Đặt menu ở bên trái */
   


    border-right: 2px solid #e0e0e0; /* Đường viền bên phải */
    border-radius: 0 15px 15px 0; /* Bo tròn góc bên phải */
    overflow-y: auto; /* Thanh cuộn nếu menu dài */
}


.left-menu ul {
    list-style-type: none; /* Bỏ dấu chấm của danh sách */
    padding: 0; /* Bỏ padding cho danh sách */
}


.left-menu li {
    margin-bottom: 15px; /* Khoảng cách giữa các mục menu */
    position: relative; /* Để sử dụng cho hiệu ứng hover */
}


.left-menu a {
    text-decoration: none; /* Bỏ gạch chân của liên kết */
    color: #555; /* Màu chữ cho liên kết */
    font-size: 18px; /* Kích thước chữ cho liên kết */
    padding: 10px; /* Padding cho liên kết */
    display: block; /* Hiển thị như khối để toàn bộ khu vực có thể nhấn được */
    border-radius: 8px; /* Bo tròn góc cho liên kết */
    position: relative; /* Để định vị vạch đỏ */
    overflow: hidden; /* Ẩn phần vượt quá cho hiệu ứng */
}


.left-menu .sub-menu {
    display: none; /* Ẩn danh sách con */
    position: relative; /* Đặt vị trí của danh sách con ở dưới */
    margin-left: 20px; /* Khoảng cách bên trái cho danh sách con */
    background-color: white; /* Màu nền cho danh sách con */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Đổ bóng cho danh sách con */
    z-index: 1000; /* Đảm bảo danh sách con ở trên cùng */
}


.left-menu li:hover .sub-menu {
    display: block; /* Hiển thị danh sách con khi hover */
}


.left-menu .sub-menu a::after {
    content: "";
    position: absolute;
    height: 2px; /* Chiều cao của vạch */
    width: 0; /* Chiều rộng bắt đầu từ 0 */
    background-color:var(--red); /* Màu của vạch */
    left: 50%; /* Bắt đầu từ giữa */
    bottom: 0; /* Đặt vạch ở dưới cùng */
    transition: width 0.3s ease, left 0.3s ease; /* Hiệu ứng chuyển động */
}


.left-menu .sub-menu a:hover::after {
    width: 100%; /* Mở rộng vạch khi hover */
    left: 0; /* Di chuyển về bên trái */
}
</style>


<div class="left-menu">
    <ul>
        <li>
            <a href="#">Danh Mục</a>
            <ul class="sub-menu">
                <li><a href="cat.php?nhom_id=3242">Bánh mì và Sandwich</a></li>
                <li><a href="cat.php?nhom_id=32424">Tacos và Wraps</a></li>
                <li><a href="cat.php?nhom_id=235345">Pizza và Mỳ Ý</a></li>
                <li><a href="cat.php?nhom_id=2111">Gà Chiên</a></li>
                <li><a href="cat.php?nhom_id=2112">Đồ Uống và Tráng Miệng</a></li>
                <li><a href="cat.php?nhom_id=2511">Khuyến mãi</a></li>
                <li><a href="lienhe.php">Đánh giá</a></li>
                <li><a href="tintuc.php">Tin tức</a></li>
            </ul>
        </li>
    </ul>
</div>




