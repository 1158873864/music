<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 3/8/18
 * Time: 下午9:19
 */

$name= $_POST['name'];
$limits=$_POST['limits'];
insert($name,$limits);
function insert($name,$limits){
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
    $sql = "INSERT INTO role(name,limits)
VALUES ('$name','$limits')";

    if ($conn->query($sql) === TRUE) {

    } else {

    }
}

echo true;
?>