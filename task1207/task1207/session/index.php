<?php
include 'isLogin.php';
echo '当前用户：'.$_SESSION['username'];
echo '<br/>';
?>
<hr>
<a href="logout.php">退出</a><br>
