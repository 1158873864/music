<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 5/8/18
 * Time: 下午5:10
 */
$name= $_POST['name'];
$pressure= $_POST['pressure'];
$size=($_FILES["file"]["size"]/1024)."kb";
$temp=explode(".",$_FILES["file"]["name"]);
header("content-type:text/html;charset=utf-8");
move_uploaded_file($_FILES["file"]["tmp_name"],"../../../record/game/".iconv("utf-8", "gbk", $name).".".$temp[1]);
$music="record/game/".$name.".".$temp[1];

$temp2=explode(".",$_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"],"../../../record/game/".iconv("utf-8", "gbk", $name).".".$temp2[1]);
$image="record/game/".$name.".".$temp2[1];

insert($name,$music,$size,$pressure,$image);
function insert($name,$music,$size,$pressure,$image){
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
    $sql = "INSERT INTO game (number,name,music,size,pressure,date,image)
VALUES (0,'$name','$music','$size','$pressure','$date','$image')";

    if ($conn->query($sql) === TRUE) {

    } else {

    }

    $sql = "INSERT INTO tj (name,one,two,three,four,five,six,seven,eight,nine,ten,eleven,twelve)
VALUES ('$name',0,0,0,0,0,0,0,0,0,0,0,0)";

    if ($conn->query($sql) === TRUE) {

    } else {

    }
}
header("location:../../game.html");

?>