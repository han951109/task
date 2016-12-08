<?php
    include 'Message.php';
?>
<html>
<title>留言板</title>
<body>
<h1>我的留言板</h1>
<hr/>

<?php
$message = new \leaveMessage\Message();
$username = $message->getUsername();
$leaveMsg = $message->getleaveMsg();
$date = $message->getDate();
$strWrite = '时间：'.$date.'用户：'.$username.'留言内容：'.$leaveMsg."\r\n";
$myFile = fopen('message.txt', 'r+');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    file_put_contents('message.txt', $strWrite, FILE_APPEND);
    while (!feof($myFile)) {
        echo fgets($myFile).'<br/>';
    }
}
fclose($myFile);
?>

<hr/>
<form action="messageClient.php" enctype="multipart/form-data" method="POST">
    <b>昵称：</b><input type="text" name="username" id="username"><br/><br/>
    <b>内容：</b><textarea name="msgcontent" id="msgcontent" rows="5" cols="33">请输入留言内容</textarea><br/><br/>
    <input type="submit" name="submit" value="提交">
</form>
</body>
</html>

