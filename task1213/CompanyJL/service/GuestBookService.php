<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/15
 * Time: 14:28
 */
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/dao/GuestBookDao.php');
class GuestBookService
{
    private $GuestBookDao;

    public function __construct(){
        $this->GuestBookDao = new GuestBookDao();
    }

    public function setGuestBook($guestBookName,$guestBookContext){
        $guestBook = $this->GuestBookDao->setGuestBook($guestBookName,$guestBookContext);
        return $guestBook;
    }

    public function getCount(){
        $guestBook = $this->GuestBookDao->getCount();
        return $guestBook;
    }

}