<?php

namespace getName;

class GetName
{
    private $path = 'E:/phpshare/test/task1205/DelDir/test1.txt';
    public function getNameFirst(){
        $arr =explode('.',$this->path);
        return $arr[count($arr)-1];
    }
    public function getNameSecond(){
        return strstr($this->path,'.');
    }
    public function getNameFinal(){
        return substr($this->path,strrpos($this->path,'.'));
    }
}
