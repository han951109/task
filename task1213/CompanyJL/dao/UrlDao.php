<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/13
 * Time: 17:19
 */
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/dao/Dao.php');
class UrlDao
{
    private $pdo;
    public function __construct()
    {
        $db = new Dao();
        $this->pdo=$db->conn();
    }

    public function getUrl(){


        $sql = 'select * from url';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $urlInfo = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return isset($urlInfo) && $urlInfo ? $urlInfo : [];
    }
}

