<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/15
 * Time: 10:45
 */
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/dao/ProductDao.php');
class ProductService
{
    private $ProductDao;

    public function __construct(){
        $this->ProductDao = new ProductDao();
    }

    public function getProduct(){
        $product = $this->ProductDao->getProduct();

        return $product;
    }

    public function getAllProduct(){
        $product = $this->ProductDao->getAllProduct();

        return $product;
    }

    public function getIDProduct($proID){
        $product = $this->ProductDao->getIDProduct($proID);

        return $product;
    }

    public function getCateProduct($categoryID){
        $product = $this->ProductDao->getCateProduct($categoryID);

        return $product;
    }

    public function setProduct($proName,$proCategoryID,$proImage,$proDesn,$proAdd){
        $this->ProductDao->setProduct($proName,$proCategoryID,$proImage,$proDesn,$proAdd);

        //return $product;
    }

    public function modifyPro($proName,$proCategoryID,$proImage,$proDesn,$proID){
        $this->ProductDao->modifyPro($proName,$proCategoryID,$proImage,$proDesn,$proID);
    }

    public function deletePro($proID){
        $this->ProductDao->deletePro($proID);
    }

}