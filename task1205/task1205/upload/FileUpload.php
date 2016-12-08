<?php

namespace fileupload;

class FileUpload
{
    private $filepath = './upload'; //指定文件上传保存的路径
    private $allowtype = ['txt', 'jpg']; //允许文件上传的类型
    private $maxsize; //允许上传的文件的大小
    private $fileName;
    private $tmpName;
    private $newName;
    private $errorNum;
    private $fileSize;

    public function uploadFile($fileFiled)
    {
        $this->fileName = $fileFiled['name'];
        $this->tmpName = $fileFiled['tmp_name'];
        $this->errorNum = $fileFiled['error'];
        $this->fileSize = $fileFiled['size'];
        $this->newName = $this->fileName;
    }
    public function getFileName()
    {
        return $this->fileName;
    }
    public function getFileSize()
    {
        return $this->fileSize;
    }
    public function checkUnique()
    {
        return file_exists($this->filepath.'/'.$_FILES['file']['name']);
    }
    public function moveFile()
    {
        for ($i = 0; $i < count($this->fileName); ++$i) {
            move_uploaded_file($this->tmpName[$i], $this->filepath.'/'.$this->newName[$i]);
        }
    }
}
