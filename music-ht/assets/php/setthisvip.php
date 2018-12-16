<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 4/8/18
 * Time: 下午2:30
 */
session_start();
$thisvip= $_POST['thisvip'];
$_SESSION['thisvip'] = $thisvip;
?>