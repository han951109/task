<?php
namespace Task1129;
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/11/29
 * Time: 16:47
 */
/**
 * 11.29作业   13道题
 */

/*
 * 1.运行以下程序，$b的值是多少    答：$b的值为1,$a在++之前已经将值传递给了b
 */
class GetValue
{
    public function getValue()
    {
        $empty  = '';
        $null   = null;
        $bool   = false;
        $notSet = '';
        $array  = [];
        $a      = 1;
        $x      = &$a;
        $b      = $a++;
        return $b;          //b = 1
    }
}
/*
 *  2.用最少的代码写一个求三值中最大值的函数。
 */
class GetMaxValue
{
    public function getMaxValue($num1, $num2, $num3)
    {
        return $max = ($num1 > $num2 ? $num1 : $num2) > $num3 ? ($num1 > $num2 ? $num1 : $num2) : $num3;
    }
}

/*
 * 3.写出以下程序的输出结果并写出原因   输出结果为4,b>c,$b > $c ? 4 : 5的返回值为4，并复制给a；
 */
class Compare
{
    public function getValue()
    {
        $b = 201;
        $c = 40;
        $a = $b > $c ? 4 : 5;
        return $a;
    }
}

/*
 *4 写出以下程序的输出结果并写出原因   结果为2，因为timesTwo方法中没有返回值
 */
function timesTwo($int)
{
    $int = $int * 2;
}
    $int    = 2;
    $result = timesTwo($int);

/*
 * 5写出以下程序的输出结果并写出原因   输出  相等，相等，不相等
 */

class CompareValue
{
    public function getValue()
    {
        $str1 = null;
        $str2 = false;
        echo $str1 == $str2 ? '相等' : '不相等';//输出相等，因为==比较的是值而不是类型，null和false都是以0存储的，===才比较类型
        $str3 = '';
        $str4 = 0;
        echo $str3 == $str4 ? '相等' : '不相等';//输出相等，空字符串也是0
        $str5 = 0;
        $str6 = '0';
        echo $str5 === $str6 ? '相等' : '不相等';//输出不相等。两者类型不同，一个是字符，一个是整数
    }
}

/*
 * 6 练习下面例子并附上解释,描述isset() 和empty() 函数的区别和使用场景
 *
 * isset :若变量不存在则返回 FALSE  ,若变量存在且其值为NULL，也返回 FALSE ,若变量存在且值不为NULL，则返回 TURE
 * empty:若变量不存在则返回 TRUE ,若变量存在且其值为""、0、"0"、NULL、、FALSE、array()、var $var; 以及没有任何属性的对象，则返回 TURE
 */
class EmptyUse
{
    public function getValue()
    {
        $a1 = null;
        $a2 = false;
        $a3 = 0;
        $a4 = '';
        $a5 = '0';
        $a6 = 'null';
        $a7 = [];
        $a8 = [[]];
        echo empty($a1) ? 'true' : 'false';
        echo '<br/>';//ture  null为空
        echo empty($a2) ? 'true' : 'false';
        echo '<br/>';//true  false为空
        echo empty($a3) ? 'true' : 'false';
        echo '<br/>';//true  0为空
        echo empty($a4) ? 'true' : 'false';
        echo '<br/>';//true  ''为空
        echo empty($a5) ? 'true' : 'false';
        echo '<br/>';//true  '0'为空
        echo empty($a6) ? 'true' : 'false';
        echo '<br/>';//false  不为空，相当于字符串
        echo empty($a7) ? 'true' : 'false';
        echo '<br/>';//true  空数组
        echo empty($a8) ? 'true' : 'false';
        echo '<br/>';//false  不为空，二维数组
    }
}

/*
 * 7 写出以下程序的输出结果并写出原因
 *
 * 输出结果为5 0 1 get_count方法中的count变量为静态变量，值会随着上一次的调用而改变，并且在++之前就将值return了
 */
/*
    $count = 5;
    function get_count()
    {
        static $count = 0;
        return $count++;
    }
        echo $count . '<br/>';  //5
        ++$count . '<br/>'; // 6
        echo get_count() . '<br/>';// 0
        echo get_count() . '<br/>';//1*/

/*
 * 8 不使用第三个变量交换两个变量的值。
 */
class ChangeNum
{
    public function changeNum($num1, $num2)
    {
        echo '交换之前：' . $num1,',' . $num2;
        $num1  = $num1 + $num2;
        $num2  = $num1 - $num2;
        $num1  = $num1 - $num2;
        echo '交换之后:' . $num1,',' . $num2;
    }
}

/*
 * 9 $arr=[‘zhangsan’,’lisi’,’wangwu’]; 将数组的值用‘,’分隔并合成字符串 zhangsan,lisi,wangwu
 */
class ChangeStr
{
    public function change($arr)
    {
        $str = implode(',', $arr);
        return $str;
    }
}

/*
 * 10 要求写一段程序，实现以下$arrOne转换为$arrTwo（数组的重新组合）
 */

class ArrChange
{
    public function arrChange($arrOne)
    {
        foreach ($arrOne as $key => $value) {
            $arrTemp[$value['fid']][] = ['tid' => $value['tid'],'name' => $value['name']];
        }
        $arrTwo = array_values($arrTemp);
        return $arrTwo;
    }
}

/*
 * 11封住一个类对二维数组进行排序（数组的排序）
 */
class ArrSort
{
    public function arrSort($arr, $sortKey, $sortOrder, $sortType)
    {
        if (is_array($arr)) {
            foreach ($arr as $value) {
                if (is_array($value)) {
                    $arrKey[] = $value[$sortKey];
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
        array_multisort($arrKey, $sortOrder, $sortType, $arr);
        return $arr;
    }
}

/*
 * 12熟练掌握php数组函数并解释下面列出的函数（根据php手册做练习）
 *
 */
class FunctionList
{
    public function arrFun($name, $age)
    {
        print_r(array_chunk($name, 2, true)); //把数组分割成新的数组块，每个数组中元素的个数由第二个参数决定，最后一个参数决定是否保留原来的键值
        echo '<br/>';

        print_r(array_combine($name, $age)); //合并两个数组，一个数组是键名，一个数组是键值，两个数组的元素个数必须相同
        echo '<br/>';

        echo array_key_exists('xiaoming', $name) ? '存在' : '不存在'; //判断指定的键名是否存在于指定的数组中，
        echo '<br/>';

        print_r(array_keys($name, 'zhangsan'));//返回包含数组中键名的一个新数组，如果不输入参数，则默认返回所有键名的数组
        echo '<br/>';

        print_r(array_merge($name, $age));  //合并一个或多个数组，键名相同将被覆盖
        echo '<br/>';

        print_r(array_merge_recursive($name, $age));//与array_merge相同，但是相同键名不会被覆盖，而是被合并成一个数组
        echo '<br/>';

        array_multisort($name, SORT_ASC);//对数组进行排序，在参数中可以选择排序的方式等。
        print_r($name);
        echo '<br/>';

        echo array_pop($name);  //删除数组中的最后一个元素，
        print_r($name);
        echo '<br/>';

        array_push($name, 'zhaoliu', 'zhaoliu'); //向数组的尾部添加一个或多个元素
        print_r($name);
        echo '<br/>';

        print_r(array_rand($name, 1));//随机返回数组中的键名，参数可选返回键名的个数
        echo '<br/>';

        print_r(array_replace($name, $age));//用后面的数组替换前面的数组，若不存在的键将被创建
        echo '<br/>';

        print_r(array_shift($name)); //删除数组中第一个元素
        print_r($name);
        echo '<br/>';

        print_r(array_slice($name, 0, 1, true)); //在数组中取出值，参数可选开始的位置，取值的长度，以及是否保留键名
        echo '<br/>';

        print_r(array_unique($name));  //删除数组中重复的值
        echo '<br/>';

        array_unshift($name, 'lisi');//在数组的开头插入一个或多个值
        print_r($name);
        echo '<br/>';

        print_r(array_values($name));//返回数组中的所有元素，不保留键名
        echo '<br/>';

        echo count($name); //返回数组中元素的个数
        echo '<br/>';

        echo in_array('xiaoming', $name) ? '找到该元素' : '未找到该元素';
        echo '<br/>';

        echo key($name);  //返回当前指针指向的键名，current返回当前指针指向的值
        echo '<br/>';

        sort($name);
        print_r($name);  //对数组进行排序，不保留键名
    }
}
/*
 * 利用for 循环输出99乘法表
 */
class MulTable
{
    public function mulTable()
    {
        for ($i = 1; $i <= 9; ++$i) {
            for ($j = 1; $j <= $i; ++$j) {
                echo "$j * $i =  " . ($i * $j);
                echo '&nbsp&nbsp&nbsp&nbsp';
            }
            echo  '<br/>';
        }
    }
}
