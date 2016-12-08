<?php
	session_start();
if ($_SERVER['REQUEST_METHOD'] == POST) {
  	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];
	$_SESSION['isLogin'] = 1;
    header('Location:index.php');
}
?>

<html>
	<head>
		<title>用户登录</title>
	</head>
	<body>
		<form action="login.php" method="post">
		<table align="center" border="1" width="300">
			<caption><h1>用户登录</h1></caption>
			<tr>
				<th>用户名</th>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<th>密 码</th>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>

				<td colspan="2" align="center">
					<input type="submit" name="sub" value="登 录">
				</td>
			</tr>
		</table>
		</form>
	</body>
</html>