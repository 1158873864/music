<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 5/8/18
 * Time: 下午5:10
 */
session_start();
$user=$_SESSION['user'];
$temp1=explode(".",$_FILES["file"]["name"]);
$id=uuid("");
move_uploaded_file($_FILES["file"]["tmp_name"],"../../record/head/".id.".".$temp1[1]);
$head="record/head/".id.".".$temp1[1];
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
mysqli_query($conn,"UPDATE user SET head='$head'
WHERE username='$user'");

header("location:../dangan.html");
function uuid($prefix = '')
{
    $chars = md5(uniqid(mt_rand(), true));
    $uuid  = substr($chars,0,8) . '-';
    $uuid .= substr($chars,8,4) . '-';
    $uuid .= substr($chars,12,4) . '-';
    $uuid .= substr($chars,16,4) . '-';
    $uuid .= substr($chars,20,12);
    return $prefix . $uuid;
}
?>