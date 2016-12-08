<?php
include 'isLogin.php';
echo '这里是主页，欢迎'.$_COOKIE['username'];
?>
<a href="logout.php">退出</a>
<a href="login.php">重新登录</a>
