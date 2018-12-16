<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 3/8/18
 * Time: 上午10:09
 */
session_start();
$username=$_SESSION['user'];
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
$sql = "SELECT * FROM background where username='$username'";
$re = $conn->query($sql);
$questionlist="";
while($row = $re->fetch_assoc()) {
    $number=$row[number];
    echo $number;
    //$questionlist[$i]=$question;
    //$i++;
}



?>