<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 3/8/18
 * Time: 上午10:09
 */

$user = "root";
$pass = "123456";
$dbname = "ap";

// 创建连接
$conn = new mysqli($servername, $user, $pass,$dbname );

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$sql = "SELECT * FROM user";
$result = $conn->query($sql);
$number="";
$name="";
$date="";
$sex="";
$xueli="";
$minzu="";
$password="";
$redate="";
$list="";
while($row = $result->fetch_assoc()) {
    $number=$row[number];
    $username=$row[username];
    $name=$row[name];
    $date=$row[date];
    $sex=$row[sex];
    $xueli=$row[xueli];
    $minzu=$row[minzu];
    $password=$row[pass];
    $redate=$row[redate];
    $list=$list.$number." ".$username." ".$name." ".$date." ".$sex." ".$xueli." ".$minzu." ".$password." ".$redate.",";
}
echo $list;
?>