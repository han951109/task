<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/14
 * Time: 9:16
 */

include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/dao/UrlDao.php');
class UrlService
{
    private $urlDao;
    
    public function __construct(){
        $this->urlDao = new UrlDao();
    }

    public function getUrl(){
        $url = $this->urlDao->getUrl();
        return $url;
    }

}