<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/14
 * Time: 19:43
 */
class InfoDao
{
    private $pdo;
    public function __construct()
    {
        $db = new Dao();
        $this->pdo=$db->conn();
    }

    public function getInfo(){

        $sql = 'select * from information limit 3';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $information = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return isset($information) && $information ? $information : [];
    }

    public function getAllInfo(){

        $sql = 'select * from information';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $information = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return isset($information) && $information ? $information : [];
    }

    public function getIDInfo($infoID){

        $sql = 'select * from information where infoID=?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$infoID);
        $stmt->execute();
        $information = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return isset($information) && $information ? $information : [];
    }

    public function getCount(){

        $sql = 'select count(*) from information';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $information = $stmt->fetch(\PDO::FETCH_ASSOC);
        return isset($information) && $information ? $information : [];
    }
}