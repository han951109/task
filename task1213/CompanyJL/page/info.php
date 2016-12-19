<?php
include '../new/new.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>金陵贸易有限公司</title>
<link type="text/css" rel="stylesheet" href="style/style.css" />
</head>

<body>
<div class="header">
    <h1 class="logo" title="金陵贸易有限公司"><a href="index.php"><img src="images/logo.gif" alt="金陵贸易有限公司" /></a></h1>
    <p class="top_r"><a href="#" class="btn_i">设为主页</a><a href="#" class="btn_f">收藏本站</a></p>
</div>
<div class="nav">
	<div class="nav_left"></div>
    <ul>
     	<li><a href="index.php">首  页</a></li>
        <li><a href="about_us.php">公司简介</a></li>
        <li><a href="product_list.php">产品展示</a></li>
        <li class="sel"><a href="info.php">行业资讯</a></li>
        <li><a href="guestbook.php">客户留言</a></li>
        <li><a href="contact_us.php" class="nobg">联系我们</a></li>
     </ul>
     <div class="time">2009-07-10 8:00</div>
    <div class="nav_right"></div>
</div>
<div class="banner">
	<a href="#"><img src="images/banner.jpg" align="banner" /></a>
</div>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">行业资讯<b class="cGrey fn">Information</b></h2>
        </div>
        <ul class="list_r" style="padding-right:40px">
            <?php foreach ($information->getAllInfo() as $v):?>
                <li><a href='article.php?infoID=<?=$v['infoID']?>'><?=$v['infoTitle']?> </a>
                    <span class="time1"><?=$v['infoTime']?></span></li>
            <?php endforeach;?>
        </ul>
        <div class="blank10"></div>
        <div class="pages"><a href="#" class="pre">上一页</a><a class="current">1</a><a href="#?page=2">2</a><a href="#?page=3">3</a><a href="#?page=2" class="next">下一页</a></div>
    </div>
	<div class="righter">
    	<div class="rightBox">
        	<a href="guestbook.php" class="btn_s">我要留言</a>
        </div>
        <div class="blank10"></div>
    	<div class="rightBox">
        	<h3>最新公告<b class="cGrey fn">News</b></h3>
            <ul class="list_r">
                <?php foreach ($news->getNews() as $v):?>
                    <li><a href='article.php?newsID=<?=$v['newsID']?>'><?=$v['newsTitle']?> </a></li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="blank10"></div>
        <div class="rightBox">
        	<h3>友情链接<b class="cGrey fn">Links</b></h3>
            <ul class="list_r">
                <?php foreach ($url->getUrl() as $v):?>
                    <li><a href='<?=$v['urlInfo']?>'><?=$v['urlName']?> </a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <div class="hackbox"></div>
    
    
</div>
<iframe name="content_frame" marginwidth=0 marginheight=0 width=100% src="./public/footer.html" frameborder=0></iframe>
</body>
</html>
