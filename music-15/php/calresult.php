<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 3/8/18
 * Time: 上午10:09
 */

session_start();
$point= $_POST['point'];
$_SESSION['point']=$point;
$servername = "localhost:3306";
$user = "root";
$pass = "123456";
$dbname = "ap";

// 创建连接
$conn = new mysqli($servername, $user, $pass,$dbname );

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$sql = "SELECT * FROM qresult where min<='$point' and max>='$point'";
$re = $conn->query($sql);
while($row = $re->fetch_assoc()) {
    $_SESSION['theresult']=$row[result];
}
?>