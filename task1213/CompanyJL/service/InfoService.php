<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/14
 * Time: 19:45
 */
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/dao/InfoDao.php');
class InfoService
{
    private $InfoDao;

    public function __construct(){
        $this->InfoDao = new InfoDao();
    }

    public function getInfo(){
        $information = $this->InfoDao->getInfo();
        return $information;
    }

    public function getAllInfo(){
        $information = $this->InfoDao->getAllInfo();
        return $information;
    }

    public function getIDInfo($infoID){
        $information = $this->InfoDao->getIDInfo($infoID);
        return $information;
    }

    public function getCount(){
        $information = $this->InfoDao->getCount();
        return $information;
    }

}