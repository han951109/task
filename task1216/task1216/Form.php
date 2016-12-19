<?php
require './class/FileUpload.class.php';
require './class/userDao.php';
$upload = new FileUpload(array('isRandName'=>false,'allowType'=>array('txt', 'doc', 'php', 'gif','jpg'),'FilePath'=>'./', 'MAXSIZE'=>200000));
if($upload->uploadFile('Image')){
    foreach ($upload->getNewFileName() as $value){
        $filename = $value;
    }
    $upload->uploadFile('Image');
}else{
    print_r($upload->getErrorMsg());
}

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sex=$_POST['sex'];
    $habits = $_POST['habits'];
    $Image= './'.$filename;
    $city =$_POST['city'];
    $self = $_POST['self'];
    if (!empty($username) && !empty($password)){
        $user = new userDao();
        $user->setUser($username,$password,$sex,$habits,$city,$Image,$self);
        /*echo $username,$password,$sex,$city,$Image,$self;
        echo '<pre>';*/
        //var_dump($habits);
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
    <h3 class="marginbot">用户注册界面</h3>

        <form action="Form.php" method="post" enctype="multipart/form-data">
            <table border="0">
                <tbody>
                <tr>
                    <td>
                        用户名：<input name="username"   type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        密码：<input name="password" s type="password">
                    </td>
                </tr>
                <tr>
                    <td>
                        确认密码：<input name="password"  type="password">
                    </td>
                </tr>

                <tr>
                    <td>
                        性别：<input name="sex"  type="radio" value="男" checked="checked">男
                        <input name="sex" type="radio" value="女" >女
                    </td>
                </tr>
                <tr>

                    <td>
                        爱好:
                        <input type="checkbox" name="habits[]" value="音乐">音乐
                        <input type="checkbox" name="habits[]" value="电影">电影
                        <input type="checkbox" name="habits[]" value="游戏">游戏
                    </td>
                </tr>
                <tr>
                    <td>
                        照片：<input name="Image[]" class="txt" style="width:400px;" type="file">
                    </td>
                </tr>

                <tr>
                    <td>
                        所在城市:
                        <select name="city">

                            <option value='广州'>广州</option>
                            <option value='上海'>上海</option>
                            <option value='深圳'>深圳</option>
                            <option value='北京'>北京</option>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td>个人简介:<br/><textarea  name="self" cols="100" rows="10"></textarea></td>
                </tr>
                </tbody>
            </table>
            <input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit">
        </form>

</body>
</html>