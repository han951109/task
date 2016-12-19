<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/15
 * Time: 10:43
 */
class ProductDao
{
    private $pdo;
    public function __construct()
    {
        $db = new Dao();
        $this->pdo=$db->conn();
    }

    public function getProduct(){

        $sql = 'select * from product limit 3';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $product = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return isset($product) && $product ? $product : [];
    }
    public function getAllProduct(){

        $sql = 'select * from product';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $product = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return isset($product) && $product ? $product : [];
    }

    public function getIDProduct($proID)
    {
        $sql = "select * from product where proID=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$proID);
        $stmt->execute();
        $product = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return isset($product) && $product ? $product : [];
    }

    public function getCateProduct($categoryID)
    {

        $sql = "select * from product where proCategoryID=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$categoryID);
        $stmt->execute();
        $product = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return isset($product) && $product ? $product : [];

    }


    public function setProduct($proName,$proCategoryID,$proImage,$proDesn,$proAdd){

        $sql = 'insert into product(proName,proCategoryID,proImage,proDesn,proAdd,proTime) values(?,?,?,?,?,?)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$proName);
        $stmt->bindParam(2,$proCategoryID);
        $stmt->bindParam(3,$proImage);
        $stmt->bindParam(4,$proDesn);
        $stmt->bindParam(5,$proAdd);
        $time =date('Y-m-d H:i:s', time());
        $proTime = strtotime($time);
        $stmt->bindParam(5,$proTime);
        $stmt->execute();
        /*$product = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return isset($product) && $product ? $product : [];*/
    }

    public function modifyPro($proName,$proCategoryID,$proImage,$proDesn,$proID)
    {
        $sql = 'update product set proName=?,proCategoryID=?,proImage=?,proDesn=? where proID=?';

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(1,$proName);
        $stmt->bindParam(3,$proImage);
        $stmt->bindParam(2,$proCategoryID);
        $stmt->bindParam(4,$proDesn);
        $stmt->bindParam(5,$proID);
        $stmt->execute();

    }


    public function deletePro($proID)
    {
        $sql = 'delete from product where proID=?';
        foreach ($proID as $value){
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(1,$value);
            $stmt->execute();
        }


    }
}