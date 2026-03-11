
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qlydoannhanh";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
 
    
    if (!$conn) {
        die("connection failer" . mysqli_connect_error());
    }

        $sql = "SELECT * 
        FROM sanpham1 
        Order by rand()
        limit 4";

    $result = mysqli_query($conn, $sql);
    ?>
    <style>
        .news__detail-heading-border {
    margin-top: 5px;
}
.news__detail-heading {
    margin-bottom:0 ;
}
    </style>
<div class="col l-9">
                        <h2 class="news__detail-heading">
                           Tin Tức Gần Đây
                        </h2>
                        <div class="container-product__heading-border news__detail-heading-border"></div>
                        <?php while ($row= mysqli_fetch_assoc($result)) { ?>
                        <div class="news__detail-post">
                        <a href="chitiet.php?masp=<?php echo $row["masp"] ?>">
                            <img src="upload/<?php echo $row["img1"] ?>" alt="" class="news__detail-img">
                            <div class="news__detail-info">
                                <a href="chitiet.php?masp=<?php echo $row["masp"] ?>" class="news__detail-title"><?php echo $row["tensp"] ?></h2>
                                <span class="news__detail-per"><p>
                                    <i class="fa-solid fa-user"></i> <?php echo $row["nguoidang"] ?>
                                    <span class="news__detail-datesub">
                                        <i class="fa-solid fa-calendar-days"></i> <?php echo $row["ngaydang"] ?>
                                    </span>
                                </span>
                                <p class="news__details-msg"><?php echo $row["mota"] ?></p>
                            </div>
                        </a>
                        </div>

                        <?php } ?>  
        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                    

   