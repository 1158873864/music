<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 2/8/18
 * Time: 下午4:35
 */$servername = "localhost:3306";
$user = "root";
$pass = "123456";
$dbname = "ap";
$username="fdg";
$password="12";
// 创建连接
$conn = new mysqli($servername, $user, $pass,$dbname );

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$sql = "SELECT pass FROM user where username='$username'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    $temp=$row[pass];
    if($temp==$password){
        echo 1;
    }
    else{
        echo 2;
    }
}

?>