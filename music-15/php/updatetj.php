<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 2/8/18
 * Time: 下午2:54
 */
$name= $_POST['name'];
$one= $_POST['one'];
$two= $_POST['two'];
$three= $_POST['three'];
$four= $_POST['four'];
$five= $_POST['five'];
$six= $_POST['six'];
$seven= $_POST['seven'];
$eight= $_POST['eight'];
$nine= $_POST['nine'];
$ten= $_POST['ten'];
$eleven= $_POST['eleven'];
$twelve= $_POST['twelve'];
insert($name,$one,$two,$three,$four,$five,$six,$seven,$eight,$nine,$ten,$eleven,$twelve);
function insert($name,$one,$two,$three,$four,$five,$six,$seven,$eight,$nine,$ten,$eleven,$twelve){
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
    mysqli_query($conn,"UPDATE tj SET one='$one',two='$two',three='$three',four='$four',five='$five',six='$six',seven='$seven',eight='$eight',nine='$nine',ten='$ten',eleven='$eleven',twelve='$twelve'
WHERE name='$name'");


}

echo true;
?>