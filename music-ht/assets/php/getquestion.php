<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 3/8/18
 * Time: 上午10:09
 */

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
$sql = "SELECT * FROM question";
$result = $conn->query($sql);
$questionlist="";
$i=0;
while($row = $result->fetch_assoc()) {
    $number=$row[number];
    $name=$row[name];
    $Acontent=$row[Acontent];
    $Bcontent=$row[Bcontent];
    $A=$row[A];
    $B=$row[B];
    $date=$row[date];
    $questionlist=$questionlist.$number." ".$name." ".$Acontent." ".$Bcontent." ".$A." ".$B." ".$date.",";

    //$questionlist[$i]=$question;
    //$i++;
}
echo $questionlist;


?>