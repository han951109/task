<?php
    include 'fileUpload.php';
    $up = new fileUpload\FileUpload();
    $up->uploadFile($_FILES['file']);
    $up->moveFile();
    print_r($up->getFileName());
