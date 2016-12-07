<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/11/29
 * Time: 17:04
 */
include 'Task.php';
//第一题
$task1 = new \Task1129\GetValue();
echo $task1->getValue();

/*//第二题
$task2 = new \Task1129\GetMaxValue();
$num1 =15;$num2 = 20;$num3 = 24;
echo $task2->getMaxValue($num1,$num2,$num3);*/

/*//第三题
$task3 = new \Task1129\Compare();
echo $task3->getValue();*/

//第四题

/*//第五题
$task5 = new \Task1129\CompareValue();
$task5->getValue();*/

/*//第六题
$task6 = new \Task1129\EmptyUse();
$task6->getValue();*/

//第七题

/*//第八题
$task8 = new \Task1129\ChangeNum();
$task8->changeNum(5,6);*/

/*//第九题
$task9 = new \Task1129\ChangeStr();
$arr = ['zhangsan','lisi','wangwu'];
echo $task9->change($arr);*/

/*//第十题
$task10 = new \Task1129\ArrChange();
$arrOne = [
    0 => ['fid' => 1,'tid' => 1,'name' => 'xiaoming'],
    1 => ['fid' => 1,'tid' => 2,'name' => 'zhangsan'],
    2 => ['fid' => 1,'tid' => 5,'name' => 'lisi'],
    3 => ['fid' => 1,'tid' => 7,'name' => 'wangwu'],
    4 => ['fid' => 3,'tid' => 9,'name' => 'zhaoliu'],
];
print_r($task10->arrChange($arrOne));*/

/*//第十一题
$task11 = new \Task1129\ArrSort();
$arr =  ['3'=>['key' => 3,'value' => 'c'],
    '2'=>['key' => 2,'value' => 'b'],
    '1'=>['key' => 1,'value' => 'a'],
];
print_r($task11->arrSort($arr,'key',SORT_ASC,SORT_NUMERIC));*/

/*//第十二题
$task12 = new \Task1129\FunctionList();
$name = ['a'=>'zhangsan','lisi','wangsu','zhaoliu'];
$age = ['a'=>'18','19','20','21'];
$task12->arrFun($name,$age);*/
/*//第十三题
$task13 = new \Task1129\MulTable();
$task13->mulTable();*/
