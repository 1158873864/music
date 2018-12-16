<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 2/8/18
 * Time: 下午4:28
 */
session_start();
$username= $_POST['username'];
$password= $_POST['password'];
$_SESSION['admin'] = $username;

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
$sql = "SELECT password FROM admin where name='$username'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    if($row[password]==$password){
        echo 1;
    }
    else{
        echo 2;
    }
}



?>