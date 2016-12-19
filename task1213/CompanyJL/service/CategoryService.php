<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/14
 * Time: 15:46
 */
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/dao/CategoryDao.php');

class CategoryService
{
    private $CategoryDao;

    public function __construct(){
        $this->CategoryDao = new CategoryDao();
    }

    public function getCategory(){
        $category = $this->CategoryDao->getCategory();
       
        return $category;
    }

}
