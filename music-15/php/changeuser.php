<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 3/8/18
 * Time: 下午5:10
 */
$number= $_POST['number'];
$username= $_POST['username'];
$name= $_POST['name'];
$date= $_POST['date'];
$sex= $_POST['sex'];
$xueli= $_POST['xueli'];
$minzu= $_POST['minzu'];
$pass= $_POST['pass'];
change($number,$username,$name,$date,$sex,$xueli,$minzu,$pass);
function change($number,$user,$name,$date,$sex,$xueli,$minzu,$pass){
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


    mysqli_query($conn,"UPDATE user SET number='$number',name='$name',date='$date',sex='$sex',xueli='$xueli',minzu='$minzu',pass='$pass'
WHERE username='$user'");
}

echo true;
mysqli_close($conn);
?>