<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/new/new.php');
if($uploadAdmin->uploadFile('proImage')){
    foreach ($uploadAdmin->getNewFileName() as $value){
            $filename = $value;
    }
    $upload->uploadFile('proImage');
}else{
    print_r($upload->getErrorMsg());
}

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $proName = $_POST['proTitle'];
    $proDesn = $_POST['proContent'];
    $proCategoryID=$_POST['proCategory'];
    $proImage= 'images/'.$filename;
    if (!empty($proName) && !empty($proDesn)){

        $product->modifyPro($proName,$proCategoryID,$proImage,$proDesn,$_POST['proID']);
        echo "<script language=\"JavaScript\">alert(\"修改成功\");</script>";
        header('Location:product_list.php');

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
    <h3 class="marginbot">添加新产品<a href="product_list.php" class="sgbtn">返回产品列表</a></h3>
    <div class="mainbox">
           <form action="product_modify.php" method="post" enctype="multipart/form-data">
            <table class="opt" style="width:600px;">
                <tbody>
                    <?php foreach ($product->getIDProduct($_GET['proID']) as $value):?>
                    <tr>
                        <th>产品名称：</th>
                    </tr>
                    <tr>
                        <td>
                        <input name="proTitle" class="txt" style="width:400px;" type="text" value=<?=$value['proName']?>>
                            <input name="proID" type="hidden" value=<?php echo $_GET['proID']?>>
                        </td>
                    </tr>
                    <tr>
                        <th>产品图片：</th>
                    </tr>
                    <tr>
                        <td>
                            <input name="proImage[]" class="txt" style="width:400px;" type="file" value=<?=$value['proImage']?>>
                        </td>
                    </tr>

                    <tr>
                        <th>产品类型</th>
                    </tr>
                    <tr>
                        <td>
                        <select name="proCategory">
                            <?php foreach ($category->getCategory() as $v):?>
                            <option value =<?=$v['categoryID']?>><?=$v['categoryName']?></option>
                            <?php endforeach;?>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th>产品描述</th>
                    </tr>
                    <tr>
                        <td><textarea style="width:400px; height:150px" name="proContent"><?=$value['proDesn']?></textarea></td>
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