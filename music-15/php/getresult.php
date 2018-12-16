<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 3/8/18
 * Time: 上午10:09
 */

session_start();
$r=$_SESSION['theresult'];
$point=$_SESSION['point'];
echo $point."  ".$r;
?>