<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 4/8/18
 * Time: 下午2:53
 */
$number= $_POST['number'];
$servername = "localhost:3306";
$username = "root";
$password = "123456";
$dbname = "ap";

// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname );

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
mysqli_query($conn,"DELETE FROM questiontype WHERE number='$number'");
mysqli_query($conn,"ALTER TABLE questiontype AUTO_INCREMENT = 1;");
?>