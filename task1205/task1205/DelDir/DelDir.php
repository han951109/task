<?php

namespace DelDir;

class DelDir
{
    public function delDir($dir)
    {
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ((is_dir($dir.'/'.$file)) && $file != '.' && $file != '..') {
                        rmdir($dir.'/'.$file);
                        (new self())->delDir($dir.'/'.$file.'/');
                    } else {
                        if ($file != '.' && $file != '..') {
                            unlink($dir.'/'.$file);
                            (new self())->delDir($dir.'/'.$file.'/');
                        }
                    }
                }
                closedir($dh);
                rmdir($dir.'/'.$file);
            }
        }
    }
}
