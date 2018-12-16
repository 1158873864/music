<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 2/8/18
 * Time: 下午2:54
 */

$username= $_POST['username'];
$name= $_POST['name'];
$date= $_POST['date'];
$sex= $_POST['sex'];
$xueli= $_POST['xueli'];
$minzu= $_POST['minzu'];
$pass= $_POST['pass'];
$redate=$_POST['redate'];
insert($username,$name,$date,$sex,$xueli,$minzu,$pass,$redate);
function insert($user,$name,$date,$sex,$xueli,$minzu,$pass,$redate){
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
    $sql = "INSERT INTO user (number, username, name, date, sex, xueli, minzu, pass,redate)
VALUES (0,'$user','$name','$date','$sex','$xueli','$minzu','$pass','$redate')";

    if ($conn->query($sql) === TRUE) {

    } else {

    }

    $sql = "INSERT INTO background(number,username)
VALUES (0,'$user')";

    if ($conn->query($sql) === TRUE) {

    } else {

    }
}

echo true;
?>