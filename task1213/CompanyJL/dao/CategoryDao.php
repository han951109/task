<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/14
 * Time: 15:42
 */
//include "Dao.php";
class CategoryDao
{
    private $pdo;
    public function __construct()
    {
        $db = new Dao();
        $this->pdo=$db->conn();
    }

    public function getCategory(){

        $sql = 'select * from category';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $category = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return isset($category) && $category ? $category : [];
    }
}