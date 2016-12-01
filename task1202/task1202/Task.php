<?php
namespace Task1202;
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/11/30
 * Time: 15:38.
 */

/*
 * 1 将1112223334445转换成5,444,333,222,111每3位用逗号隔开
 */



class Task1
{
    public function changeStr($str)
    {
        $arr       = str_split($str, 3);
        $changeStr = implode(',', $arr);
        echo strrev($changeStr);
    }
}

/*
 * 2假设现在有一个字符串www.yaochufa.com 如何用php对它进行操作使字符串以moc.afuhcoay.输出
 */

class Task2
{
    public function changeStr($str)
    {
        echo strrev(strstr($str, '.'));
    }
}

/*
 * 3 请写一个函数，实现以下功能 字符串“my_leader”转换成“MyLeader”、字符串“make_by_name”转换成“MakeByName”
 */

class Task3
{
    public function changeStr($str1, $str2)
    {
        $strTemp1 = ucwords(str_replace('_', ' ', $str1));
        echo str_replace(' ', '', $strTemp1);
        $strTemp2 = ucwords(str_replace('_', ' ', $str2));
        echo str_replace(' ', '', $strTemp2);
    }
}
/*
 * 4 $mail=liming@yaochufa.com;请将此邮箱的域（yaochufa.com）取出来，看最多能有几种方法
 */
class Task4
{
    public function changeStr($mail)
    {
        echo str_replace('@', '', strstr($mail, '@'));
    }
}

/*
 * 翻转字符串中的单词，字符串仅包含大小写字母和空格，单词间使用空格分割。如输入“There is hainan”,输出“hainan is There”
 */

class Task5
{
    public function changeStr($str)
    {
        $arr       = explode(' ', $str);
        $changeStr = implode(' ', array_reverse($arr));
        echo  $changeStr;
    }
}

/*
 * 6 封装一个截取字符串类，例如新闻标题过长只需截取20个汉字，多余的用...省略
 */
class Task6
{
    public function subStr($str)
    {
        $arr = str_split($str, 3);
        if (count($arr) > 5) {
            echo implode(array_slice($arr, 0, 5)) . '···';
        } else {
            echo $str;
        }
    }
}
/*
 * 一些常用的函数的实现
 */
class Task7
{
    public function strFun($str, $arr)
    {
        echo addslashes($str);//在预定义字符前添加反斜杠
        echo '<br/>';

        echo chunk_split($str, 1, '-');//分割字符串。
        echo '<br/>';

        print_r(explode(' ', $str));//将字符串转换成数组
        echo '<br/>';

        echo html_entity_decode($str);//将html实体转换为字符
        echo '<br/>';

        echo htmlentities($str); //将字符转换为html实体
        echo '<br/>';

        echo htmlspecialchars($str); //将预定义字符转换为html实体
        echo '<br/>';

        echo implode(',', $arr);//把数组转换成字符串
        echo '<br/>';

        echo join(',', $arr);//与implode相同，把数组转换成字符串
        echo '<br/>';

        echo ltrim($str, 'hello');//去除字符串左侧的预定义字符
        echo '<br/>';

        echo md5($str);
        echo '<br/>';

        setlocale(LC_MONETARY, 'en_US');
        echo money_format('%i', 123456.78);//格式化货币字符串，该函数无法在windows平台上工作
        echo '<br/>';

        echo number_format(123456789);//以千分位格式化字符串
        echo '<br/>';

        echo rtrim($str, '"world"');//去除字符串右侧预定义的字符串
        echo '<br/>';

        echo sprintf('在这里输出一句话：%s', $str);//把格式化的字符串写入变量中
        echo '<br/>';

        echo str_ireplace('hello', '你好', $str);//替换字符串中的字符，不区分大小写
        echo '<br/>';

        echo str_pad($str, 30, '-'); ///把字符串填充到新的长度
        echo '<br/>';

        echo str_repeat($str, 5);//重复字符串，并可以指定重复的次数
        echo '<br/>';

        echo str_replace('hello', 'Hello', $str);//替换字符串中的字符，区分大小写
        echo '<br/>';

        echo str_shuffle($str);//随机打乱字符串中所有字符
        echo '<br/>';

        print_r(str_split($str, 3));//将字符串分割到数组中
        echo '<br/>';

        echo strchr($str, 'w'); //查找一个字符串在另一个字符串中第一次出现的位置，并返回剩下的字符串
        echo '<br/>';

        echo strip_tags($str);//删除字符串中的标签
        echo '<br/>';

        echo stripos($str, 'w');//返回一个字符串在另一个字符串中第一次出现的位置，不区分大小写
        echo '<br/>';

        echo stristr($str, 'wor');//返回一个字符串在另一个字符串中第一次出现的位置，并返回其余的字符，不区分大小写
        echo '<br/>';

        echo strlen($str);//返回字符串的长度
        echo '<br/>';

        echo strpos($str, 'l');//返回一个字符串在另一个字符串中第一次出现的位置，区分大小写
        echo '<br/>';

        echo strrchr($str, 'l');//返回一个字符串在另一个字符串中最后一次出现的位置，区分大小写
        echo '<br/>';

        echo strrev($str);//翻转字符串
        echo '<br/>';

        echo strripos($str, 'L');//返回一个字符串在另一个字符串中最后一次出现的位置，不区分大小写
        echo '<br/>';

        echo strrpos($str, 'l');//返回一个字符串在另一个字符串中最后一次出现的位置，区分大小写
        echo '<br/>';

        echo strstr($str, 'l');//返回一个字符串在另一个字符串中第一次出现的位置，并返回其余的字符，不区分大小写
        echo '<br/>';

        echo strtolower($str);//将字符串转换成小写
        echo '<br/>';

        echo strtoupper($str);//将字符串转换成大写
        echo '<br/>';

        echo strtr($str, 'he', 'eh');//转换字符串中特定的字符
        echo '<br/>';

        echo substr($str, 1, 5);//返回字符串的一部分
        echo '<br/>';

        echo substr_compare($str, 'hello', 0);//比较两个字符串
        echo '<br/>';

        echo substr_count($str, 'l');//搜索一个字符串在另一个字符串中出现的次数
        echo '<br/>';

        echo substr_replace($str, 'hello ', 5, 1);//把字符串的一部分替换成另一个字符串
        echo '<br/>';

        echo trim($str, '"');//删除字符串两侧的预定义字符
        echo '<br/>';

        echo ucfirst($str);//把字符串中的首字母转换成大写
        echo '<br/>';

        echo ucwords('hello world');//把字符串中的每个单词的首字母转换成大写
        echo '<br/>';
    }
}
