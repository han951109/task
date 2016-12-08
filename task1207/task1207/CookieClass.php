<?php

class CookieClass
{
    private $name;
    public function setCookie($name,$value,$time){
       if (!$time)
       {
           $time = 60*60*24*7;
       }
        setcookie($name,$value,time()+$time);
    }
    public function getCookie($name){
        if (array_key_exists($name,$_COOKIE)){
            return $_COOKIE[$name];
        }
    }
    public function closeCookie($name){
        setcookie($name,'',time()-3600);
    }
}
