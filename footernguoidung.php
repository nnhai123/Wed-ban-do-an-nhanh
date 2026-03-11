<style>
    
.footer {
    margin-top: 50px;
    background-color: #2c3e50; /* Đặt màu nền tối để tạo cảm giác hiện đại */
    padding: 40px 0;
    font-family: 'Arial', sans-serif;
    width: 100%; 
    height: auto;
}

.footer-container {
    display: flex;
    justify-content: center; /* Đặt các phần tử gần nhau */
    gap: 280px; /* Điều chỉnh khoảng cách giữa các ảnh */
    width: 100%; 
    margin: 0 auto;
    height: auto;
    max-width: 800px; /* Đặt giới hạn chiều rộng để ảnh không bị trải dài quá nhiều */
}

.footer-item {
    flex: 0 0 auto;
    text-align: center;
    color: #ecf0f1; /* Màu chữ sáng nổi bật trên nền tối */
    transition: transform 0.3s ease-in-out; /* Thêm hiệu ứng khi hover */
}

.footer-item:hover {
    transform: translateY(-10px); /* Hiệu ứng hover nâng lên một chút */
}

.footer-item img {
    width: 150px; /* Giảm kích thước ảnh để ảnh gần nhau hơn */
    height: 150px;
    border-radius: 50%;
    border: 3px solid #ecf0f1; /* Đường viền cho ảnh để trông nổi bật hơn */
    margin-bottom: 10px;
}

.footer-item p {
    font-size: 16px;
    color: #B5292F; /* Màu chữ nhạt hơn cho mô tả */
    margin: 5px;
}

/* Responsive Design cho màn hình nhỏ hơn */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
    }

    .footer-item {
        margin-bottom: 20px;
    }
}


/* Phong cách cho các phần widget */
/* Phong cách cho phần widget */
.widget-area {
    width:auto;
    height: 100%;
    background-color: #808080; 
    padding: 40px 20px; 
    border-radius: 8px; 
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5); 
}

.widget-title {
    font-size: 20px;
    margin-bottom: 15px;
    color: #ffa500; 
    border-bottom: 2px solid #ffa500; 
    padding-bottom: 5px; 
}

.widget-row {

    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.widget-row-col, .widget-row-col-1 {
    flex: 1;
    padding: 15px; 
    min-width: 220px; 
}

.widget-row-col-content p {
    color: #ddd; 
    line-height: 1.5; /* Tăng khoảng cách dòng cho dễ đọc */
}

.widget-contact {
    list-style: none;
    padding: 0;
    margin: 0;
}

.widget-contact-item a {
    display: flex;
    align-items: center;
    color: #fff; 
    text-decoration: none;
    margin-bottom: 10px;
    transition: color 0.3s;
}

.widget-contact-item a:hover {
    color: #ffa500; 
}

.widget-contact-item i {
    margin-right: 8px;
    color: #ffa500; 
}

.widget-social {
    display: flex;
    gap: 10px;
    margin-top: 10px;
}

.widget-social-item a {
    color: #fff;
    font-size: 24px; 
    transition: color 0.3s;
}

.widget-social-item a:hover {
    color: #ffa500; 
}


</style>
<link href='./assetss/img/favicon.png' rel='icon' type='image/x-icon' />
    <link rel="stylesheet" href="./assetss/css/main.css">
    <link rel="stylesheet" href="./assetss/css/home-responsive.css">
    <link rel="stylesheet" href="./assetss/css/toast-message.css">
    <link rel="stylesheet" href="./assetss/font/font-awesome-pro-v6-6.2.0/css/all.min.css"/>
<footer class="footer">
     <div class="footer-container">
        <div class="footer-item">
        <a href="https://web.facebook.com/profile.php?id=100015396402565" target="_blank">
            <img src="./assetss/img/namhai.jpg" alt="Image 1">
        </a>
            <p>21103100212</p>
            <p>Nguyễn Nam Hải</p>
            <p>DHTI15A1HN</p>
        </div>
        <div class="footer-item">
            <a href="https://web.facebook.com/profile.php?id=100015428050890" target="_blank">
                <img src="./assetss/img/dat.jpg" alt="Image 2">
            </a>
            <p>21103100019</p>
            <p>Nguyễn Hữu Đạt</p>
            <p>DHTI15A1HN</p>
        </div>
        <div class="footer-item">
            <a href="https://web.facebook.com/Beoresder36" target="_blank">
                <img src="./assetss/img/giang.jpg" alt="Image 3">
            </a>
            <P>21103100190</P>
            <p>Võ Trường Giang</p>
            <p>DHTI15A1HN</p>
        </div>
    </div>
        
        <div class="widget-area">
            <div class="container">
                <div class="widget-row">
                    <div class="widget-row-col-1">
                        <h3 class="widget-title">Về chúng tôi</h3>
                        <div class="widget-row-col-content">
                            <p>World Food luôn đặt trải nghiệm sản phẩm  của khách hàng lên hàng đầu.</p>
                        </div>
                        <div class="widget-social">
                            <div class="widget-social-item">
                                <a href="https://web.facebook.com/profile.php?id=100015396402565">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <div class="widget-social-item">
                                <a href="https://web.facebook.com/profile.php?id=100015428050890">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                            <div class="widget-social-item">
                                <a href="https://web.facebook.com/Beoresder36">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                            <div class="widget-social-item">
                                <a href="https://web.facebook.com/Beoresder36">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="widget-row-col">
                        <h3 class="widget-title">Liên kết</h3>
                        <ul class="widget-contact">
                            <li class="widget-contact-item">
                                <a href="footernguoidung.php">
                                    <i class="fa-regular fa-arrow-right"></i>
                                    <span>Về chúng tôi</span>
                                </a>
                            </li>
                            <li class="widget-contact-item">
                                <a href="index.php">
                                    <i class="fa-regular fa-arrow-right"></i>
                                    <span>Thực đơn</span>
                                </a>
                            </li>
                            <li class="widget-contact-item">
                                <a href="cat.php?nhom_id=2511">
                                    <i class="fa-regular fa-arrow-right"></i>
                                    <span>Khuyến mãi</span>
                                </a>
                            </li>
                            <li class="widget-contact-item">
                                <a href="lienhe.php">
                                    <i class="fa-regular fa-arrow-right"></i>
                                    <span>Liên hệ</span>
                                </a>
                            </li>
                            <li class="widget-contact-item">
                                <a href="tintuc.php">
                                    <i class="fa-regular fa-arrow-right"></i>
                                    <span>Tin tức</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-row-col">
                        <h3 class="widget-title">Thực đơn</h3>
                        <ul class="widget-contact">
                            <li class="widget-contact-item">
                                <a href="cat.php?nhom_id=3242">
                                    <i class="fa-regular fa-arrow-right"></i>
                                    <span>Bánh mì và Sandwich</span>
                                </a>
                            </li>
                            <li class="widget-contact-item">
                                <a href="cat.php?nhom_id=32424">
                                    <i class="fa-regular fa-arrow-right"></i>
                                    <span>Tacos và Wraps</span>
                                </a>
                            </li>
                            <li class="widget-contact-item">
                                <a href="cat.php?nhom_id=235345">
                                    <i class="fa-regular fa-arrow-right"></i>
                                    <span>Pizza và Mỳ Ý</span>
                                </a>
                            </li>
                            <li class="widget-contact-item">
                                <a href="cat.php?nhom_id=2111">
                                    <i class="fa-regular fa-arrow-right"></i>
                                    <span>Gà Chiên</span>
                                </a>
                            </li>
                            <li class="widget-contact-item">
                                <a href="cat.php?nhom_id=2112">
                                    <i class="fa-regular fa-arrow-right"></i>
                                    <span>Đồ Uống và Tráng Miệng</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-row-col-1">
                        <h3 class="widget-title">Liên hệ</h3>
                        <div class="contact">
                            <div class="contact-item">
                                <div class="contact-item-icon">
                                    <i class="fa-regular fa-location-dot"></i>
                                </div>
                                <div class="contact-content">
                                    <span>Lĩnh Nam - Hoàng Mai - Hà Nội</span>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-item-icon">
                                    <i class="fa-regular fa-phone"></i>
                                </div>
                                <div class="contact-content contact-item-phone">
                                    <span>0962663956</span>
                            
                                    
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-item-icon">
                                    <i class="fa-regular fa-envelope"></i>
                                </div>
                                <div class="contact-content conatct-item-email">
                                    <span>worldfood@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
   
    
        </main>
    </div>
    <div id="toast"></div>
    <!-- <script src="./js/initialization.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/checkout.js"></script>
    <script src="./js/toast-message.js"></script> -->
</body>
</html>