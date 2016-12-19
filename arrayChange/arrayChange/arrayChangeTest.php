<?php
include 'ArrayChangeFirst.php';
include 'ArrayChangeSecond.php';
include 'ArrayChangeThr.php';
include 'ArrayChangeFinal.php';
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/5
 * Time: 17:48
 */
$arr1 = new \arrayChangeFirst\ArrayChangeFirst();
print_r($arr1->arrayChange());

$arr2 = new \arrayChangeSecond\ArrayChangeSecond();
print_r($arr2->arrayChange());

$arr3 = new \arrayChangeThr\ArrayChangeThr();
print_r($arr3->arrayChange());

$arr4 = new \arrayChangeFinal\ArrayChangeFinal();
print_r($arr4->arrayChange());
