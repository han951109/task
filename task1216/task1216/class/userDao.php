<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/16
 * Time: 10:19
 */
require 'pdo_class.php';
class userDao
{
    private $dbname = 'userForm';
    private $username='root';
    private $password='root';
    private $db;
    public function __construct()
    {
        $this->db=new pdo_class('localhost',$this->username,$this->password,$this->dbname,false);
    }



    public function setUser($username,$password,$sex,$habits,$city,$image,$self){

        $sql = 'insert into form(username,password,sex,habits,city,image,self) values(?,?,?,?,?,?,?)';
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(1,$username);
        $stmt->bindParam(2,$password);
        $stmt->bindParam(3,$sex);
        $habitsStr = implode(',',$habits);
        $stmt->bindParam(4,$habitsStr);
        $stmt->bindParam(5,$city);
        $stmt->bindParam(6,$image);
        $stmt->bindParam(7,$self);
        $stmt->execute();

    }




}