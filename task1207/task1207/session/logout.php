<?php
include 'isLogin.php';
 $username =  $_SESSION['username'];
 session_start();
$_SESSION = [];
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}
session_destroy();

echo $username . '已退出';
echo '<br/>';
?>
<hr>
<a href="login.php">重新登录</a>