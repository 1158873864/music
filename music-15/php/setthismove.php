<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 4/8/18
 * Time: 下午2:30
 */
session_start();
$thisquestion= $_POST['thisquestion'];
$_SESSION['move'] = $thisquestion;
?>