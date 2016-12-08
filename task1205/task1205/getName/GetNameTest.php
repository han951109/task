<?php
include "GetName.php";
$getname = new \getName\GetName();
echo $getname->getNameFirst();
echo '<br/>';
echo $getname->getNameSecond();
echo '<br/>';
echo $getname->getNameFinal();