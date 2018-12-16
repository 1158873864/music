<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 3/8/18
 * Time: 上午10:09
 */
$name= $_POST['name'];
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
$sql = "SELECT * FROM tj where name='$name'";
$result = $conn->query($sql);
$questionlist="";
$i=0;
while($row = $result->fetch_assoc()) {
    $number=$row[one];
    $name=$row[two];
    $Acontent=$row[three];
    $Bcontent=$row[four];
    $A=$row[five];
    $B=$row[six];
    $date=$row[seven];
    $eight=$row[eight];
    $nine=$row[nine];
    $ten=$row[ten];
    $eleven=$row[eleven];
    $twelve=$row[twelve];
    $questionlist=$questionlist.$number." ".$name." ".$Acontent." ".$Bcontent." ".$A." ".$B." ".$date." ".$eight." ".$nine." ".$ten." ".$eleven." ".$twelve;
    echo $questionlist;
    //$questionlist[$i]=$question;
    //$i++;
}



?>