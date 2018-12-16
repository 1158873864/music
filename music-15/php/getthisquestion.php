<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 4/8/18
 * Time: 下午2:33
 */
session_start();
$thisquestion= $_SESSION['thisq'];
echo $thisquestion;
?>