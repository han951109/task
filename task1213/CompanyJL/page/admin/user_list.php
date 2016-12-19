<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/new/new.php');
if ($_SERVER['REQUEST_METHOD']=='POST'){

    if (isset($_POST['adminID'])){
        $admin->deleteAdmin($_POST['adminID']);
    }

}
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if (!empty($_POST['adminName'])  &&  !empty($_POST['adminPwd'])){
        $admin->setAdmin($_POST['adminName'],$_POST['adminPwd'],$_POST['adminIP']);
        echo "<script language=\"JavaScript\">alert(\"添加成功\");</script>";
    }else{
        $errMsg = '用户名和密码不能为空';
    }

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员列表</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
</head>
<body>

<div class="container">
    <div class="hastabmenu">
        <ul class="tabmenu">
            <li id="adduserbtn" class="tabcurrent"><a href="#" >添加管理员</a></li>
        </ul>
        <div id="adduserdiv" class="tabcontentcur">
            <form action="user_list.php" method="post">
            <table width="100%">
                <tbody>
                    <?php

                    ?>

                    <tr>
                        <td>用户名:</td>
                        <td><input name="adminName" class="txt" type="text"></td>
                        <td>密码:</td>
                        <td><input name="adminPwd" class="txt" type="password"></td>
                        <input name="adminIP" class="txt" type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR']?>">
                        <td><?=$errMsg?></td>
                        <td><input value="提 交" class="btn" type="submit"></td>
                    </tr>
            	</tbody>
            </table>
            </form>
        </div>
	</div>

    <br>
    <h3>管理员列表</h3>
    <div class="mainbox">
            <form action="user_list.php" method="post">
            <table class="datalist fixwidth">
                <tbody>

                    <tr>
                        <th>
                        	<input name="chkall" id="chkall" class="checkbox" type="checkbox"><label for="chkall">删除</label>
                        </th>
                        <th>用户名</th>
                        <th>注册日期</th>
                        <th>注册IP</th>
                        <th>用户状态</th>
                        <th>编辑</th>
                    </tr>
                    <?php foreach ($admin->getAllAdmin() as $v):?>
                    <tr>
                        <td class="option">
                        	<input name="adminID[]" class="checkbox" type="checkbox" value="<?= $v['adminID']?>">
                        </td>
                        <td><strong><?= $v['adminName']?></strong></td>
                        <td><?= date('Y-m-d H:i:s',$v['adminTime'])?></td>
                        <td><?= $v['adminIP']?></td>
                        <td><?= $v['adminStatus']?></td>
                        <td><a href="user_edit.php?adminID=<?= $v['adminID']?>">编辑</a></td>
                    </tr>
                <?php endforeach;?>
                    <tr class="nobg">
                        <td><input value="提 交" class="btn" type="submit"></td>
                        <td class="tdpage" colspan="6">
                            <div class="pages">
                            <em>100</em>
                            <strong>1</strong>
                            <a href="">2</a>
                            <a href="">3</a>
                            <a href="">4</a>
                            <a href="" class="next">&rsaquo;&rsaquo;</a>
                            <a href="" class="last">... </a>
                            <kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='?page='+this.value; return false;}" /></kbd>
                            </div>
                      	</td>
                    </tr>
                </tbody>
            </table>
            </form>
    </div>
</div>
</body>
</html>