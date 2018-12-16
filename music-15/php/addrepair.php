<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 3/8/18
 * Time: 下午9:19
 */
$unit=$_POST['unit'];
$name= $_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$detail=$_POST['detail'];
insert($unit,$name,$phone,$address,$detail);
function insert($unit,$name,$phone,$address,$detail){
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
    $sql = "INSERT INTO repair(number,unit,name,phone,address,detail)
VALUES (0,'$unit','$name','$phone','$address','$detail')";

    if ($conn->query($sql) === TRUE) {

    } else {

    }
}

echo true;
?>