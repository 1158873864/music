<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/18
 * Time: 19:29
 */
session_start();
$number= $_POST['number'];
$user=$_SESSION['user'];
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
mysqli_query($conn,"UPDATE background SET number='$number'
WHERE username='$user'");

if ($conn->query($sql) === TRUE) {

} else {

}
?>