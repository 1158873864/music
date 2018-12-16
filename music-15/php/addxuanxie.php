<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 2/8/18
 * Time: 下午2:54
 */

$number= $_POST['number'];
$name= $_POST['name'];
$sex= $_POST['sex'];
$date= $_POST['date'];
$xueli= $_POST['xueli'];
$minzu= $_POST['minzu'];
$youxiu= $_POST['youxiu'];
$lianghao= $_POST['lianghao'];
$hege= $_POST['hege'];
$buhege= $_POST['buhege'];
$jidayouxiu= $_POST['jidayouxiu'];
$jidahege= $_POST['jidahege'];
$jidabuhege= $_POST['jidabuhege'];
$nahanyouxiu= $_POST['nahanyouxiu'];
$nahanhege= $_POST['nahanhege'];
$nahanbuhege= $_POST['nahanbuhege'];
$jidanahanyouxiu= $_POST['jidanahanyouxiu'];
$jidanahanhege= $_POST['jidanahanhege'];
$jidanahanbuhege= $_POST['jidanahanbuhege'];
$yongbaoyouxiu= $_POST['yongbaoyouxiu'];
$yongbaohege= $_POST['yongbaohege'];
$yongbaobuhege= $_POST['yongbaobuhege'];
$qResult= $_POST['qResult'];
$jidacishu= $_POST['jidacishu'];
$xuanxiecishu= $_POST['xuanxiecishu'];
$result= $_POST['result'];
$suggest= $_POST['suggest'];
$xuanxiedate= $_POST['xuanxiedate'];


insert($number,$name,$sex,$date,$xueli,$minzu,$youxiu,$lianghao,$hege,$buhege,$jidayouxiu,$jidahege,$jidabuhege,$nahanyouxiu,$nahanhege,$nahanbuhege,$jidanahanyouxiu,$jidanahanhege,$jidanahanbuhege,$yongbaoyouxiu,$yongbaohege,$yongbaobuhege,$qResult,$jidacishu,$xuanxiecishu,$result,$suggest,$xuanxiedate);
function insert( $number,$name,$sex,$date,$xueli,$minzu,$youxiu,$lianghao,$hege,$buhege,$jidayouxiu,$jidahege,$jidabuhege,$nahanyouxiu,$nahanhege,$nahanbuhege,$jidanahanyouxiu,$jidanahanhege,$jidanahanbuhege,$yongbaoyouxiu,$yongbaohege,$yongbaobuhege,$qResult,$jidacishu,$xuanxiecishu,$result,$suggest,$xuanxiedate){
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
    $sql = "INSERT INTO xuanxie (xuhao,number,name,sex,date,xueli,minzu,youxiu,lianghao,hege,buhege,jidayouxiu,jidahege,jidabuhege,nahanyouxiu,nahanhege,nahanbuhege,jidanahanyouxiu,jidanahanhege,jidanahanbuhege,yongbaoyouxiu,yongbaohege,yongbaobuhege,qResult,jidacishu,xuexiecishu,result,suggest,xuanxiedate)
VALUES (0,'$number','$name','$sex','$date','$xueli','$minzu','$youxiu','$lianghao','$hege','$buhege','$jidayouxiu','$jidahege','$jidabuhege','$nahanyouxiu','$nahanhege','$nahanbuhege','$jidanahanyouxiu','$jidanahanhege','$jidanahanbuhege','$yongbaoyouxiu','$yongbaohege','$yongbaobuhege','$qResult','$jidacishu','$xuanxiecishu','$result','$suggest','$xuanxiedate')";

    if ($conn->query($sql) === TRUE) {

    } else {

    }
}

echo true;
?>