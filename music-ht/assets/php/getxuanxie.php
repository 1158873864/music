<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 3/8/18
 * Time: 上午10:09
 */
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

$sql = "SELECT * FROM xuanxie";
$re = $conn->query($sql);
$xuanxielist="";
while($row = $re->fetch_assoc()) {
    $xuhao=$row[xuhao];
    $number=$row[number];
    $name=$row[name];
    $sex=$row[sex];
    $date=$row[date];
    $xueli=$row[xueli];
    $minzu=$row[minzu];
    $youxiu=$row[youxiu];
    $lianghao=$row[lianghao];
    $hege=$row[hege];
    $buhege=$row[buhege];
    $jidayouxiu=$row[jidayouxiu];
    $jidahege=$row[jidahege];
    $jidabuhege=$row[jidabuhege];
    $nahanyouxiu=$row[nahanyouxiu];
    $nahanhege=$row[nahanhege];
    $nahanbuhege=$row[nahanbuhege];
    $jidanahanyouxiu=$row[jidanahanyouxiu];
    $jidanahanhege=$row[jidanahanhege];
    $jidanahanbuhege=$row[jidanahanbuhege];
    $yongbaoyouxiu=$row[yongbaoyouxiu];
    $yongbaohege=$row[yongbaohege];
    $yongbaobuhege=$row[yongbaobuhege];
    $qResult=$row[qResult];
    $jidacishu=$row[jidacishu];
    $xuanxiecishu=$row[xuexiecishu];
    $result=$row[result];
    $suggest=$row[suggest];
    $xuanxiedate=$row[xuanxiedate];
    $xuanxielist=$xuanxielist.$xuhao.",,,".$number.",,,".$name.",,,".$sex.",,,".$date.",,,".$xueli.",,,".$minzu.",,,".$youxiu.",,,".$lianghao.",,,".$hege.",,,".$buhege.",,,".$jidayouxiu.",,,".$jidahege.",,,".$jidabuhege.",,,".$nahanyouxiu.",,,".$nahanhege.",,,".$nahanbuhege.",,,".$jidanahanyouxiu.",,,".$jidanahanhege.",,,".$jidanahanbuhege.",,,".$yongbaoyouxiu.",,,".$yongbaohege.",,,".$yongbaobuhege.",,,".$qResult.",,,".$jidacishu.",,,".$xuanxiecishu.",,,".$result.",,,".$suggest.",,,".$xuanxiedate."....";
}
echo  $xuanxielist;

?>