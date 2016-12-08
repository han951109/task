<?php

namespace getDir;

class getDir
{
    public function getDir($dir)
    {
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ((is_dir($dir.'/'.$file)) && $file != '.' && $file != '..') {

                        echo '文件夹:'.$file.'<br><hr>';
                        (new getDir)->getDir($dir.'/'.$file.'/');
                    } else {
                        if ($file != '.' && $file != '..') {
                            echo '文件名'.$file.'<br>';
                        }
                    }
                }
                closedir($dh);
            }
        }
    }
}
