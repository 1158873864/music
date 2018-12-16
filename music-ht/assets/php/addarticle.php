<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 5/8/18
 * Time: 下午5:10
 */
$name= $_POST['name'];
$type= $_POST['type'];
$content=$_POST['content'];
$temp=explode(".",$_FILES["file"]["name"]);
header("content-type:text/html;charset=utf-8");
move_uploaded_file($_FILES["file"]["tmp_name"],"../../../record/article/".iconv("utf-8", "gbk", $name).".".$temp[1]);
$image="record/article/".$name.".".$temp[1];

insert($name,$image,$type,$content);
function insert($name,$image,$type,$content){
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
    $sql = "INSERT INTO article (number,name,image,type,content,date)
VALUES (0,'$name','$image','$type','$content','$date')";

    if ($conn->query($sql) === TRUE) {

    } else {

    }
}
header("location:../../article.html");

?>