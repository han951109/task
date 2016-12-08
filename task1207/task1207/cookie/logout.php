<?php
include 'isLogin.php';
 $username =  $_COOKIE['username'];
 setcookie('username');
setcookie('password');
setcookie('isLogin');
echo $username.'goodbye';
?>
<a href="login.php">重新登录</a>