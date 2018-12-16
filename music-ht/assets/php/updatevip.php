<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 2/8/18
 * Time: 下午2:54
 */

$number= $_POST['number'];
$name= $_POST['name'];
$date= $_POST['date'];
$sex= $_POST['sex'];
$xueli= $_POST['xueli'];
$minzu= $_POST['minzu'];
insert($number,$name,$date,$sex,$xueli,$minzu);
function insert($number,$name,$date,$sex,$xueli,$minzu){
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
    mysqli_query($conn,"UPDATE user SET name='$name',date='$date',sex='$sex',xueli='$xueli',minzu='$minzu'
WHERE number='$number'");


}

echo true;
?>