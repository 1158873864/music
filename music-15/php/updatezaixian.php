<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/18
 * Time: 19:29
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
mysqli_query($conn,"UPDATE zaixian SET n='$number'");

if ($conn->query($sql) === TRUE) {

} else {

}
?>