<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 3/8/18
 * Time: 下午9:19
 */
$min= $_POST['min'];
$max= $_POST['max'];
$pressure=$_POST['pressure'];
$game=$_POST['game'];
$result=$_POST['result'];
$date=$_POST['date'];

insert($min,$max,$pressure,$game,$result,$date);
function insert($min,$max,$pressure,$game,$result,$date){
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
    $sql = "INSERT INTO qresult (number,min,max,pressure,game,result,date)
VALUES (0,'$min','$max','$pressure','$game','$result','$date')";

    if ($conn->query($sql) === TRUE) {

    } else {

    }
}

echo true;
?>