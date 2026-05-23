<?php
function pdo_get_connection(){
    $host = "mysql-1339e4da-nguyenmanhthang2k5-7b4d.f.aivencloud.com";
    $port = "14410";
    $dbname = "defaultdb"; 
    $username = 'avnadmin'; 
    $password = 'AVNS_-1SrybZyko7wPHyDjfx'; 

    $dburl = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
    $options = array(
        PDO::MYSQL_ATTR_SSL_CA => __DIR__ . '/ca.pem', 
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    return new PDO($dburl, $username, $password, $options);
}