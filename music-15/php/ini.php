<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 2/8/18
 * Time: 下午3:13
 */
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
echo "连接成功";
/*$sql = "CREATE TABLE user (
number int UNSIGNED AUTO_INCREMENT primary key,
username VARCHAR(30) NOT NULL UNIQUE ,
name VARCHAR(30) NOT NULL,
date VARCHAR(30),
sex VARCHAR(10),
xueli VARCHAR(30),
minzu VARCHAR(10),
pass VARCHAR(30),
redate VARCHAR(30),
head VARCHAR(70)
)";*/
/*$sql = "CREATE TABLE question (
number int NOT NULL primary  key unique ,
name VARCHAR(200) NOT NULL,
Acontent VARCHAR(200) NOT NULL ,
Bcontent VARCHAR(200) NOT NULL,
A int,
B int,
date VARCHAR(30)
)";*/
/*$sql = "CREATE TABLE qResult(
number int UNSIGNED AUTO_INCREMENT primary key,
min int,
max int,
pressure int,
game VARCHAR(50),
result VARCHAR(5000),
date VARCHAR(50)
)";*/
/*$sql = "CREATE TABLE articletype(
number int UNSIGNED AUTO_INCREMENT primary key,
name VARCHAR(50),
image VARCHAR(50)
)";*/
/*$sql = "CREATE TABLE article(
number int UNSIGNED AUTO_INCREMENT primary key,
name VARCHAR(50),
image VARCHAR(50),
type VARCHAR(50),
content VARCHAR(5000),
date VARCHAR(50)
)";*/
/*$sql = "CREATE TABLE music(
number int UNSIGNED AUTO_INCREMENT primary key,
name VARCHAR(50),
music VARCHAR(50),
type VARCHAR(50)
)";*/
/*$sql = "CREATE TABLE anim(
number int UNSIGNED AUTO_INCREMENT primary key,
name VARCHAR(50),
music VARCHAR(50),
size VARCHAR(50),
image VARCHAR(50)
)";*/
/*$sql = "CREATE TABLE admin(
number int UNSIGNED AUTO_INCREMENT primary key,
name VARCHAR(50),
password VARCHAR(50),
limits VARCHAR(300),
date VARCHAR(50),
role VARCHAR(50)
)";*/
/*$sql = "CREATE TABLE tj(
name varchar(50) unique,
one int,
two int,
three int,
four int,
five int,
six int,
seven int,
eight int,
nine int,
ten int,
eleven int,
twelve int
)";*/
/*$sql = "CREATE TABLE video(
number int UNSIGNED AUTO_INCREMENT primary key,
name VARCHAR(50),
music VARCHAR(50),
daoyan VARCHAR(50),
bianju VARCHAR(50),
area VARCHAR(50),
word VARCHAR(50),
len VARCHAR(50),
image VARCHAR(50),
brief VARCHAR(5000)
)";*/
/*$sql = "CREATE TABLE game(
number int UNSIGNED AUTO_INCREMENT primary key,
name VARCHAR(50),
music VARCHAR(50),
size VARCHAR(50),
pressure VARCHAR(50),
date VARCHAR(50),
image VARCHAR(50)
)";*/
/*$sql = "CREATE TABLE zaixian(
n int
)";*/

/*$sql = "CREATE TABLE yd(
number int UNSIGNED AUTO_INCREMENT primary key,
name VARCHAR(50),
music VARCHAR(50),
simpleimage VARCHAR(50),
mainimage VARCHAR(50),
content VARCHAR(2000),
date VARCHAR(50)
)";*/

/*$sql = "CREATE TABLE word(
number int UNSIGNED AUTO_INCREMENT primary key,
name VARCHAR(50),
music VARCHAR(50)
)";*/

/*$sql = "CREATE TABLE musictype(
number int UNSIGNED AUTO_INCREMENT primary key,
name VARCHAR(50),
image VARCHAR(50)
)";*/

/*$sql = "CREATE TABLE questiontype(
number int UNSIGNED AUTO_INCREMENT primary key,
name VARCHAR(50),
image VARCHAR(50)
)";*/

/*$sql = "CREATE TABLE xuanxie(
xuhao int UNSIGNED AUTO_INCREMENT primary key,
number VARCHAR(50),
name VARCHAR(50),
sex VARCHAR(50),
date VARCHAR(50),
xueli VARCHAR(50),
minzu VARCHAR(50),
youxiu int,
lianghao int,
hege int,
buhege int,
jidayouxiu int,
jidahege int,
jidabuhege int,
nahanyouxiu int,
nahanhege int,
nahanbuhege int,
jidanahanyouxiu int,
jidanahanhege int,
jidanahanbuhege int,
yongbaoyouxiu int,
yongbaohege int,
yongbaobuhege int,
qResult VARCHAR(2000),
jidacishu int,
xuexiecishu int,
result VARCHAR(2000),
suggest VARCHAR(2000),
xuanxiedate VARCHAR(50)
)";*/

/*$sql = "CREATE TABLE background(
number int,
username VARCHAR(50)
)";*/

/*$sql = "CREATE TABLE role(
name VARCHAR(50) primary key,
limits VARCHAR(200)
)";*/


/*$sql = "CREATE TABLE message (
name  VARCHAR(50),
logo VARCHAR(50),
version VARCHAR(50),
background VARCHAR(50)
)";*/

/*$sql = "CREATE TABLE repair (
number int UNSIGNED AUTO_INCREMENT primary key,
unit  VARCHAR(50),
name VARCHAR(50),
phone VARCHAR(50),
address VARCHAR(100),
detail VARCHAR(1000)
)";*/


if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}

$conn->close();
?>