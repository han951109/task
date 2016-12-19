<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/new/new.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin->modifyAdmin($_POST['username'],$_POST['password'],$_POST['adminID']);
   echo "<script language=\"JavaScript\">alert(\"修改成功\");</script>";
    header('Location:user_list.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑用户资料</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<body>
<div class="container">
    <h3 class="marginbot">编辑用户资料<a href="user_list.php" class="sgbtn">返回用户列表</a></h3>
    <div class="mainbox">
        <form action="user_edit.php" method="post">
        <table class="opt">
                <tbody>
                <?php foreach ($admin->getIDAdmin($_GET['adminID']) as $v):?>
                    <tr>
                        <th>用户名:</th>
                    </tr>
                    <tr>
                        <td>
                        <input name="username" class="txt" type="text" value="<?= $v['adminName']?>">
                            <input name="adminID" type="hidden" value=<?php echo $_GET['adminID']?>>
                        </td>
                    </tr>
                    <tr>
                        <th>密　码:<span style="font-weight:normal"> [密码留空，保持不变]</span></th>
                    </tr>
                    <tr>
                        <td>
                        <input name="password" value="<?= $v['adminPwd']?>" class="txt" type="password">
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            <div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
        </form>
    </div>
</div>
</body>
</html>