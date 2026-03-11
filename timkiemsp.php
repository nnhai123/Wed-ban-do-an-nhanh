<?php include "headernguoidung.php";?>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qlydoannhanh";

    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

  
    $limit = 8;
    $sql = "SELECT * FROM `sanpham1`";

    if (isset($_GET['timkiem'])) {
        $key = mysqli_real_escape_string($conn, $_GET['timkiem']);
        
     
        $keywords = explode(" ", $key);
        $searchConditions = [];

        foreach ($keywords as $word) {
            $searchConditions[] = "dongiamoi LIKE '%$word%'";
        }
        
     
        $sql .= " WHERE " . implode(" AND ", $searchConditions);
    }

   
    $result = mysqli_query($conn, $sql);
?>

<style>
.current-ten {
    text-transform: uppercase;
    color: green;
    font-weight: bold;
}
</style>

<main class="main-wrapper">
    <div class="container" id="trangchu">
        <div class="home-title-block" id="home-title">
            <h2 class="home-title">Sản Phẩm Bạn Tìm Kiếm</h2>
        </div>
        <div class="home-products" id="home-products"> 
            <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
            ?>  
            <div class="col-product">
                <article class="card-product">
                    <div class="card-header">
                        <a href="chitiet.php?masp=<?php echo $row["masp"]; ?>" class="card-image-link">
                            <img src="upload/<?php echo $row["img1"]; ?>" alt="" class="card-image">
                        </a> 
                    </div>
                    <form action="cart.php" method="post" class="product__items-cart">
                        <div class="card-footer">
                            <div class="product-buy">
                                <input type="submit" value="Đặt món" name="addcart" class="card-button order-itemt">
                            </div>
                        </div>
                        <input type="hidden" name="soluong" value="1">
                        <input type="hidden" name="tensp" value="<?php echo $row["tensp"]; ?>">
                        <input type="hidden" name="dongiamoi" value="<?php echo $row["dongiamoi"]; ?> 000 VNĐ">
                        <input type="hidden" name="img1" value="<?php echo $row["img1"]; ?>">   
                    </form>
                    <div class="food-info">
                        <div class="card-content">
                            <div class="card-title">
                                <a href="#" class="card-title-link"></a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="product-price">
                                <span class="current-ten"><?php echo $row["tensp"]; ?></span>
                            </div>
                            <div class="product-price">
                                <span class="current-price"><?php echo $row["dongiamoi"]; ?> .000 VNĐ</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <?php 
                    } // Kết thúc vòng lặp while
                } else {
                    echo "<p>Không tìm thấy sản phẩm nào.</p>";
                }
            ?>  
        </div>
    </div>
</main>

<?php include "footernguoidung.php"; ?>

