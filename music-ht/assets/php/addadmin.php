<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 3/8/18
 * Time: 下午9:19
 */

$name= $_POST['name'];
$pass=$_POST['pass'];
$limits=$_POST['limits'];
$date=$_POST['date'];
$role=$_POST['role'];
insert($name,$pass,$limits,$date,$role);
function insert($name,$pass,$limits,$date,$role){
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
    $sql = "INSERT INTO admin(number,name,password,limits,date,role)
VALUES (0,'$name','$pass','$limits','$date','$role')";

    if ($conn->query($sql) === TRUE) {

    } else {

    }
}

echo true;
?>