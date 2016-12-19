<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/15
 * Time: 18:28
 */
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/dao/ContactDao.php');

class ContactService
{
    private $ContactDao;

    public function __construct(){
        $this->ContactDao = new ContactDao();
    }

    public function getContact(){
        $contact = $this->ContactDao->getContact();

        return $contact;
    }

    public function setContact($conAddress,$conPerson,$conMPhone,$conPhone,$conEmail){
        $contact = $this->ContactDao->setContact($conAddress,$conPerson,$conMPhone,$conPhone,$conEmail);

        //return $contact;
    }

}