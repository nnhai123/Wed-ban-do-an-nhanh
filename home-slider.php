<style>
/* Wrapper để giới hạn độ rộng slider và thêm khoảng trắng */
.home-slider-wrapper {
    display: flex;
    justify-content: center;
    padding: 0 60px;
    overflow: hidden;
}


/* Đặt kích thước và định dạng cho slider */
.home-slider {
    position: relative;
    width: 70%; /* Slider chiếm 70% màn hình */
    height: 450px; /* Chiều cao theo yêu cầu */
    overflow: hidden;
}


/* Các ảnh trong slider */
.home-slider .img-slider {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 100%;
     /* Đẩy ảnh xuống 20px từ trên */
    opacity: 0;
    transition: opacity 1s ease-in-out;
    animation: slideHorizontal 15s infinite;
}


/* Keyframes cho hiệu ứng trượt ngang */
@keyframes slideHorizontal {
    0% { left: 100%; opacity: 0; }
    10% { left: 0; opacity: 1; }
    30% { left: 0; opacity: 1; }
    40% { left: -100%; opacity: 0; }
    100% { left: -100%; opacity: 0; }
}
.img-slider{
    top:60px;
}


/* Thêm delay cho từng ảnh */
.home-slider .img-slider:nth-child(1) { animation-delay: 0s; }
.home-slider .img-slider:nth-child(2) { animation-delay: 0s; }
.home-slider .img-slider:nth-child(3) { animation-delay: 3s; }
.home-slider .img-slider:nth-child(4) { animation-delay: 6s; }
.home-slider .img-slider:nth-child(5) { animation-delay: 9s; }
</style>


<div class="home-slider-wrapper">
    <div class="home-slider">
        <div class="img-slider"><img src="./assetss/img/banner-0.jpeg" alt=""></div>
        <div class="img-slider"><img src="./assetss/img/banner-2.png" alt=""></div>
        <div class="img-slider"><img src="./assetss/img/banner-3.png" alt=""></div>
        <div class="img-slider"><img src="./assetss/img/banner-4.png" alt=""></div>
        <div class="img-slider"><img src="./assetss/img/banner-5.png" alt=""></div>
    </div>
</div>



