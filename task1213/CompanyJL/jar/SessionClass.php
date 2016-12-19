<?php

class SessionClass
{
    public function Session()
    {
        session_start();
    }

    public function get($name)
    {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        } else {
            return false;
        }
    }
    public function set($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public function del()
    {
        $_SESSION = [];
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 3600, '/');
        }
        session_destroy();
    }
}

