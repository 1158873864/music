<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 5/8/18
 * Time: 下午5:10
 */
$name= $_POST['name'];
$temp1=explode(".",$_FILES["logo"]["name"]);
header("content-type:text/html;charset=utf-8");
$logo="record/logo/logo.jpg";
$background="record//background//background.jpg";
if($_FILES["logo"]["name"]!=""){
    unlink("../../../record/logo/logo".$temp1[1]);
    move_uploaded_file($_FILES["logo"]["tmp_name"],"../../../record/logo/logo.".$temp1[1]);
    $logo="record/logo/logo.".$temp1[1];
}


$temp2=explode(".",$_FILES["background"]["name"]);
if($_FILES["background"]["name"]!="") {
    unlink("../../../record/background/background." . $temp2[1]);
    move_uploaded_file($_FILES["background"]["tmp_name"], "../../../record/background/background." . $temp2[1]);
    $background = "record/background/background.".$temp2[1];
}
$version= $_POST['version'];
insert($name,$logo,$version,$background);
function insert($name,$logo,$version,$background)
{
    $servername = "localhost:3306";
    $username = "root";
    $password = "123456";
    $dbname = "ap";

// 创建连接
    $conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }
        mysqli_query($conn, "UPDATE message SET name='$name',logo='$logo',version='$version',background='$background'");

}
header("location:../../message.html");

?>