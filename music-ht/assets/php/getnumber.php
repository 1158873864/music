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
$sql = "SELECT count(*) FROM user";
$result = $conn->query($sql);
$questionlist="";
$i=0;
echo $result;
while($row = $result->fetch_assoc()) {
    echo $row[count()];

    //$questionlist[$i]=$question;
    //$i++;
}


?>