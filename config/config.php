<?php
function pdo_get_connection(){
    $host = "mysql-1339e4da-nguyenmanhthang2k5-7b4d.f.aivencloud.com";
    $port = "14410";
    $dbname = "defaultdb"; 
    $username = 'avnadmin'; 
    $password = 'AVNS_-1SrybZyko7wPHyDjfx'; 

    $dburl = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
    
    $options = array(
        // Chặn sập 502: Ép thời gian chờ kết nối tối đa là 4 giây, quá 4s sẽ ngắt chứ không treo server
        PDO::ATTR_TIMEOUT => 4,
        
        // Tùy chọn SSL phù hợp nhất với Aiven Cloud chạy trên môi trường Docker Linux
        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    try {
        return new PDO($dburl, $username, $password, $options);
    } catch (PDOException $e) {
        // Bẫy lỗi: Xuất thẳng lỗi Database ra giao diện để kiểm tra, ngăn chặn hoàn toàn lỗi 502
        echo "<div style='padding:20px; background:#fff5f5; color:#c53030; border:1px solid #feb2b2; margin:20px; border-radius:5px;'>";
        echo "<h3>⚠️ Lỗi Kết Nối Cơ Sở Dữ Liệu Cloud:</h3>";
        echo "<p>" . htmlspecialchars($e->getMessage()) . "</p>";
        echo "<p>Vui lòng kiểm tra lại trạng thái Cluster trên Aiven hoặc thông tin tài khoản.</p>";
        echo "</div>";
        exit; // Dừng chương trình ngay tại đây
    }
}