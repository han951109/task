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
     	<li class="sel"><a href="index.php">首  页</a></li>
        <li><a href="about_us.php">公司简介</a></li>
        <li><a href="product_list.php">产品展示</a></li>
        <li><a href="info.php">行业资讯</a></li>
        <li><a href="guestbook.php">客户留言</a></li>
        <li><a href="contact_us.php" class="nobg">联系我们</a></li>
     </ul>
     <div class="time"><?= date('Y-m-d H:i:s',time())?></div>
    <div class="nav_right"></div>
</div>
<div class="banner">
	<a href="#"><img src="images/banner.jpg" align="banner" /></a>
</div>
<div class="content">
	<div class="w475_l">
    	<div class="title">
        	<h2 class="cBlue fB">公司简介<b class="cGrey fn">About us</b></h2>
        </div>
        <div class="intro">

                    <?php
                        foreach ($about->getAbout() as $v)
                        $about = $v['aboutContext'];
                    ?>
                    <?=substr($about,0,300)?>

                <a href="about_us.php" class="cBlue"> 查看更多...</a>
                <div class="hackbox"></div>
        </div>
        <div class="blank10"></div>
        <div class="title">
        	<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2><span class="more"><a href="product_list.php" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_l">
            <?php foreach ($product->getProduct() as $v):?>
        	<li>
                <span class="listimg">
                   <img src="images/tran.gif" class="blank" /><a href="product_info.php?proID=<?=$v['proID']?>"><img src="<?=$v['proImage']?>" alt="222222" /></a>
                </span>
                <span class="listtxt"><a href="product_info.php"><?=$v['proName']?></a></span>
            </li>
            <?php endforeach;?>

           
        </ul>
    </div>
    <div class="w370_r">
    	<div class="title">
        	<h2 class="cBlue fB">最新公告<b class="cGrey fn">News</b></h2>
        </div>
        <ul class="list_r">
           
            <?php foreach ($news->getNews() as $v):?>
                <li><a href='article.php?newsID=<?=$v['newsID']?>'><?=substr($v['newsTitle'],0,12)?> </a>
                    <span class="time1"><?=$v['newsTime']?></span></li>
            <?php endforeach;?>
        </ul>
        <div class="blank29"></div>
        <div class="title">
        	<h2 class="cBlue fB">行业资讯<b class="cGrey fn">Information</b></h2><span class="more"><a href="info.php" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_r">

            <?php foreach ($information->getInfo() as $v):?>
                <li><a href='article.php?infoID=<?=$v['infoID']?>'><?=$v['infoTitle']?> </a>
                    <span class="time1"><?=$v['infoTime']?></span></li>
            <?php endforeach;?>
        	
        </ul>
    </div>
    <div class="hackbox"></div>
    
	<div class="title">
        	<h2 class="cBlue fB">友情链接<b class="cGrey fn">Links</b></h2>
    </div>
    <p class="links">
        <?php foreach ($url->getUrl() as $v):?>
            &nbsp&nbsp&nbsp&nbsp&nbsp<a href='<?=$v['urlInfo']?>'><?=$v['urlName']?> </a>&nbsp&nbsp&nbsp&nbsp&nbsp|
        <?php endforeach;?>
    </p>
</div>
<iframe name="content_frame" marginwidth=0 marginheight=0 width=100% src="./public/footer.html" frameborder=0></iframe>

</body>
</html>
