<?php
function pdo_get_connection(){
    $host = "mysql-1339e4da-nguyenmanhthang2k5-7b4d.f.aivencloud.com";
    $port = "14410";
    $dbname = "defaultdb"; 
    $username = 'avnadmin'; 
    $password = 'AVNS_-1SrybZyko7wPHyDjfx'; 

    $dburl = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
    
    // THAY ĐỔI ĐOẠN NÀY: Bỏ qua việc đọc file ca.pem vật lý để tránh lỗi đường dẫn trên Linux
    $options = array(
        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    try {
        return new PDO($dburl, $username, $password, $options);
    } catch (PDOException $e) {
        // Bẫy lỗi thông minh để không làm sập server gây lỗi 502 nữa
        die("<h3>Lỗi kết nối CSDL Cloud:</h3> <p>" . $e->getMessage() . "</p>");
    }
}