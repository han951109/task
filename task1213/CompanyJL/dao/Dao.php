<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/13
 * Time: 16:26.
 */
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/jar/pdo_class.php');
class Dao
{
    private $dbname = 'jinling';
    private $username='root';
    private $password='root';
    public function conn()
    {
        $db=new pdo_class('localhost',$this->username,$this->password,$this->dbname,false);
        return $db;
    }
}

