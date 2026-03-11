<?php
class ketnoi { 
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "qlydoannhanh";
    protected $conn;

    // B1: Tạo kết nối trong hàm khởi tạo
    function __construct() {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        
        // Kiểm tra kết nối
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    // Phương thức để trả về đối tượng kết nối
    public function getConn() {
        return $this->conn;
    }
}
?>
