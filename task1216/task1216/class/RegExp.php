<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/19
 * Time: 10:38.
 */
class RegExp
{
    public function regularArray($regular,$array)
    {
        $reg = preg_grep($regular,$array);
        return $reg;
    }

    public function regularStr($regular,$str)
    {
        preg_match($regular,$str,$arr);
        return $arr;
    }

    public function regularAllStr($regular,$str)
    {
        preg_match_all($regular,$str,$arr);
        return $arr;
    }

    public function regReplaceStr($regular,$replaceStr,$str)
    {
        return preg_replace($regular,$replaceStr,$str);
    }
}
