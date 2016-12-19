<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/new/new.php');
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $newsTitle = $_POST['newsTitle'];
    $newsContent = $_POST['newsContent'];
    $newsAdd = $_SESSION['username'];
    if (!empty($newsTitle) && !empty($newsContent)) {
        $news->setNews($newsTitle, $newsContent,$newsAdd);
        echo "<script language=\"JavaScript\">alert(\"添加成功\");</script>";
        //header('Location:news_list.php');

    }
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
    <h3 class="marginbot">添加新文章<a href="news_list.php" class="sgbtn">返回文章列表</a></h3>
    <div class="mainbox">
          <form action="news_edit.php" method="post">
            <table class="opt" style="width:600px;">
                <tbody>

                    <tr>
                        <th>文章名称：</th>
                    </tr>
                    <tr>
                        <td>
                        <input name="newsTitle" class="txt" style="width:400px;" type="text" >
                        </td>
                    </tr>
                    <tr>
                        <th>文章内容：</th>
                    </tr>
                    <tr>
                        <td><textarea style="width:400px; height:150px" name="newsContent"></textarea></td>
                    </tr>
                <?php /*endforeach;*/?>
                </tbody>
            </table>
            <div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
          </form>
    </div>
</div>
</body>
</html>