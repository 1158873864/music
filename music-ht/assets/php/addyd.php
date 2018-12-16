<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 5/8/18
 * Time: 下午5:10
 */
$name= $_POST['name'];
$content=$_POST['content'];
$temp1=explode(".",$_FILES["music"]["name"]);
header("content-type:text/html;charset=utf-8");
move_uploaded_file($_FILES["music"]["tmp_name"],"../../../record/yd/".iconv("utf-8", "gbk", $name).".".$temp1[1]);
$music="record/yd/".$name.".".$temp1[1];

$temp2=explode(".",$_FILES["mainimage"]["name"]);
move_uploaded_file($_FILES["mainimage"]["tmp_name"],"../../../record/ydmainimage/".iconv("utf-8", "gbk", $name).".".$temp2[1]);
$mainimage="record/ydmainimage/".$name.".".$temp2[1];

$temp3=explode(".",$_FILES["simpleimage"]["name"]);
move_uploaded_file($_FILES["simpleimage"]["tmp_name"],"../../../record/ydsimpleimage/".iconv("utf-8", "gbk", $name).".".$temp3[1]);
$simpleimage="record/ydsimpleimage/".$name.".".$temp3[1];

insert($name,$music,$simpleimage,$mainimage,$content);
function insert($name,$music,$simpleimage,$mainimage,$content){
    $date=date('y-m-d',time());
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
    $sql = "INSERT INTO yd(number,name,music,simpleimage,mainimage,content,date)
VALUES (0,'$name','$music','$simpleimage','$mainimage','$content','$date')";

    if ($conn->query($sql) === TRUE) {

    } else {

    }
}
header("location:../../yd-list.html");

?>