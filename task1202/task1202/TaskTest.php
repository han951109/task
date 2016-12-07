<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/11/30
 * Time: 15:55.
 */
include 'Task.php';

//第一题
$task1 = new \Task1202\ChangeStr();
$str = '1112223334445';
echo $task1->changeStr($str);

//第二题
$task2 = new \Task1202\RevStr();
$str = 'www.yaochufa.com';
echo $task2->changeStr($str);

/*//第三题
$task3 = new \Task1202\ReplaceStr();
$str1 = 'my_leader';
$str2 ='make_by_name';
$task3->changeStr($str1,$str2);*/

/*//第四题
$task4 = new \Task1202\GetStr();
$mail='liming@yaochufa.com';
echo $task4->changeStr($mail);*/

/*//第五题
$task5 = new \Task1202\ReverseStr();
$str = 'There is hannan';
echo $task5->changeStr($str);*/

/*//第六题
$task6 = new \Task1202\SubStr();
$str = '一二三四五六七八九十';
$task6->subStr($str);*/

/*//第七题
$task = new \Task1202\StrFun();
$str = 'hello "world"';
$arr = [1,2,3,4];
$task->strFun($str,$arr);*/
