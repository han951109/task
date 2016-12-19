<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/CompanyJL/new/new.php';
/*echo $_POST['newsID'];
echo $_POST['newsTitle'];
echo $_POST['newsContent'];*/
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

     $news->modifyNews($_POST['newsTitle'],$_POST['newsContent'],$_POST['newsID']);
        echo "<script language=\"JavaScript\">alert(\"添加成功\");</script>";
        header('Location:news_list.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加新文章</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<body>
<div class="container">
    <h3 class="marginbot">修改文章<a href="news_list.php" class="sgbtn">返回文章列表</a></h3>
    <div class="mainbox">
          <form action="news_modify.php" method="post">
            <table class="opt" style="width:600px;">
                <tbody>
                <?php foreach ($news->getIDNews($_GET['newsID']) as $v):?>
                    <tr>
                        <th>文章名称：</th>
                    </tr>
                    <tr>
                        <td>
                        <input name="newsTitle" class="txt" style="width:400px;" type="text" value=<?=$v['newsTitle']?>>
                            <input name="newsID" type="hidden" value=<?php echo $_GET['newsID']?>>
                        </td>
                    </tr>
                    <tr>
                        <th>文章内容：</th>
                    </tr>
                    <tr>
                        <td><textarea style="width:400px; height:150px" name="newsContent"><?=$v['newsContext']?></textarea></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
          </form>
    </div>
</div>
</body>
</html>