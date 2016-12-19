<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/new/new.php');
$username = $_SESSION['username'];
$_SESSION = [];
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}
session_destroy();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" >
<HTML xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>金陵贸易 后台管理系统</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link media="all" href="styles/style.css" type=text/css rel="stylesheet">
</head>
<body>
<div class="mainhd">
<div class="logo">金陵贸易 后台管理系统</div>
<div class="uinfo">
    <p>
        您好, <EM><?php echo $username.'再见'?></EM>
    </p>
</div>
</div>
<h1><?php echo $username.'再见'?></h1>
<h2><?php echo '您已经退出登录'?></h2>
<a href="login.php">重新登录</a>
</body>
</html>
