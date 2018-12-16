<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 5/8/18
 * Time: 下午5:10
 */
$name= $_POST['name'];
$daoyan= $_POST['daoyan'];
$bianju= $_POST['bianju'];
$area= $_POST['area'];
$word= $_POST['word'];
$len= $_POST['len'];
$brief=$_POST['brief'];

$temp=explode(".",$_FILES["file"]["name"]);
header("content-type:text/html;charset=utf-8");
move_uploaded_file($_FILES["file"]["tmp_name"],"../../../record/video/".iconv("utf-8", "gbk", $name).".".$temp[1]);
$music="record/video/".$name.".".$temp[1];

$temp1=explode(".",$_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"],"../../../record/video/".iconv("utf-8", "gbk", $name).".".$temp1[1]);
$image="record/video/".$name.".".$temp1[1];

insert($name,$music,$daoyan,$bianju,$area,$word,$len,$image,$brief);
function insert($name,$music,$daoyan,$bianju,$area,$word,$len,$image,$brief){
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
    $sql = "INSERT INTO video (number,name,music,daoyan,bianju,area,word,len,image,brief)
VALUES (0,'$name','$music','$daoyan','$bianju','$area','$word','$len','$image','$brief')";

    if ($conn->query($sql) === TRUE) {

    } else {

    }
}
header("location:../../video.html");

?>