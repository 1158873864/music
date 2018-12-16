<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 3/8/18
 * Time: 下午9:19
 */
$name= $_POST['name'];
$number= $_POST['number'];
$Acontent=$_POST['Acontent'];
$Bcontent=$_POST['Bcontent'];
$A=$_POST['A'];
$B=$_POST['B'];
$date=$_POST['date'];
insert($name,$number,$Acontent,$Bcontent,$A,$B,$date);
function insert($name,$number,$Acontent,$Bcontent,$A,$B,$date){
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
    $sql = "INSERT INTO question (number,name,Acontent,Bcontent,A,B,date)
VALUES ('$number','$name','$Acontent','$Bcontent','$A','$B','$date')";

    if ($conn->query($sql) === TRUE) {

    } else {

    }
}

echo true;
?>