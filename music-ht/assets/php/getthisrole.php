<?php
/**
 * Created by PhpStorm.
 * User: xulei
 * Date: 4/8/18
 * Time: 下午2:33
 */
session_start();
$thisrole= $_SESSION['thisrole'];
echo $thisrole;
?>