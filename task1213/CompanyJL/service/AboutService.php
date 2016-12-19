<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/14
 * Time: 20:08
 */
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/dao/AboutDao.php');

class AboutService
{
    private $AboutDao;

    public function __construct(){
        $this->AboutDao = new AboutDao();
    }

    public function getAbout(){
        $about = $this->AboutDao->getAbout();

        return $about;
    }

    public function setAbout($content){
        $about = $this->AboutDao->setAbout($content);

        return $about;
    }

}