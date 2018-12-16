<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 5/8/18
 * Time: 下午5:10
 */
$name= $_POST['name'];
$temp1=explode(".",$_FILES["music"]["name"]);
header("content-type:text/html;charset=utf-8");
move_uploaded_file($_FILES["music"]["tmp_name"],"../../../record/anim/".iconv("utf-8", "gbk", $name).".".$temp1[1]);
$music="record/anim/".$name.".".$temp1[1];
$size=($_FILES["music"]["size"]/1024)."kb";
$temp2=explode(".",$_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"],"../../../record/anim/".iconv("utf-8", "gbk", $name).".".$temp2[1]);
$image="record/anim/".$name.".".$temp2[1];

insert($name,$music,$size,$image);
function insert($name,$music,$size,$image){
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
    $sql = "INSERT INTO anim (number,name,music,size,image)
VALUES (0,'$name','$music','$size','$image')";

    if ($conn->query($sql) === TRUE) {

    } else {

    }
}
header("location:../../anim_list.html");

?>