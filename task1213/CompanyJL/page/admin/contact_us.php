<?php

include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/new/new.php');
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if (!empty($_POST['conAddress'])&&!empty($_POST['conPerson'])&&!empty($_POST['conMPhone'])&&!empty($_POST['conPhone'])&&!empty($_POST['conEmail'])) {
        $contact->setContact($_POST['conAddress'], $_POST['conPerson'], $_POST['conMPhone'], $_POST['conPhone'], $_POST['conEmail']);
        echo "<script language=\"JavaScript\">alert(\"添加成功\");</script>";
    }else{
        echo "<script language=\"JavaScript\">alert(\"添加失败，请输入联系信息\");</script>";
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>联系我们</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<body>
<div id="append"></div>
<div class="container">
	<h3>联系我们</h3>
    <div class="mainbox">
        <form action="contact_us.php" method="post">
            <table style="width:700px;">
                <tbody>

                    <tr>
                    	<td>地址：<textarea rows="1" cols="30" name="conAddress"></textarea></td>
                    </tr>
                    <tr>
                        <td>联系人：<textarea rows="1" cols="30" name="conPerson"></textarea></td>
                    </tr>
                    <tr>
                        <td>移动电话：<textarea rows="1" cols="30" name="conMPhone"></textarea></td>
                    </tr>
                    <tr>
                        <td>固定电话：<textarea rows="1" cols="30" name="conPhone"></textarea></td>
                    </tr>
                    <tr>
                        <td>传真：<textarea rows="1" cols="30" name="conEmail"></textarea></td>
                    </tr>
                    <tr>
                    	<td>添加人：<?php echo $_SESSION['username'] ?> &nbsp;&nbsp;&nbsp;添加时间：<?php echo date('Y-m-d H:i:s', time())?></td>
                    </tr>
                    <tr>
                        <td><input value="提 交" class="btn" type="submit"></td>
                    </tr>

                </tbody>
            </table>
        </form>
    </div>
</div>
</body>
</html>

