<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/19
 * Time: 11:07.
 */
require 'RegExp.php';
$reg = new RegExp();
$array = array('Linux RedHat9.0', 'Apache2.2.9', 'MySQL5.0.51', 'PHP5.2.6', 'LAMP', '100');
echo '<pre>';
echo 'task1'.'<hr>';

print_r($reg->regularArray('/^[a-zA-Z]+\S*[0-9]$/', $array));
echo '<hr>';
echo 'task2'.'<hr>';
$str = 'http://www.yaochufa.com/index.php';
$search = '-^([^/?#]+)://([^/?#]*)/(.*)-';
print_r($reg->regularStr($search, $str));
echo '<hr>';
echo 'task3'.'<hr>';

$str = "<tr>
          <td><a href='http://qzone.qq.com'>QQ空间</a></td>
          <td><a href='http://www.ganji.com'>赶 集 网</a></td>
          <td><a href='http://www.baixing.com'>百 姓 网</a></td>
          <td><a href='http://www.taobao.com'>淘 宝 网</a></td>
          <td><a href='http://tuan.baidu.com'>百度团购</a></td>
          <td><a href='http://www.dianping.com'>大众点评网</a></td>
      </tr>"
;

$search = "#http://.*\.[\w\d]*#";
print_r($reg->regularAllStr($search, $str));
echo '<hr>';
echo 'task4'.'<hr>';
$str = '这个文本中有<b>粗体</b>和<u>带有下划线</u>以及<i>斜体</i>还有<font color=\'red\' size=\'7\'>带有颜色和字体大小</font>的标记';
$search = '/<\/?[^>]+>/i';
print_r($reg->regReplaceStr($search,'',$str));