<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/14
 * Time: 17:42
 */
session_start();
//include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/jar/SessionClass.php');
//include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/jar/isLogin.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/service/UrlService.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/service/CategoryService.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/service/NewsService.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/service/InfoService.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/service/AboutService.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/service/ProductService.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/service/GuestBookService.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/jar/Message.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/jar/FileUpload.class.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/service/ContactService.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/service/AdminService.php');
$category = new CategoryService();
$url = new UrlService();
$news = new NewsService();
$information = new InfoService();
$about = new AboutService();
$product = new ProductService();
$guestBook = new GuestBookService();
$message = new \leaveMessage\Message();
$contact = new ContactDao();
$admin = new AdminService();
$upload=new FileUpload(array('isRandName'=>false,'allowType'=>array('txt', 'doc', 'php', 'gif','jpg'),'FilePath'=>'../admin/images', 'MAXSIZE'=>200000));
$uploadAdmin=new FileUpload(array('isRandName'=>false,'allowType'=>array('txt', 'doc', 'php', 'gif','jpg'),'FilePath'=>'../images', 'MAXSIZE'=>200000));
//$session = new SessionClass();
?>