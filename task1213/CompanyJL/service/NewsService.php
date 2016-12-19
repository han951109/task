<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/14
 * Time: 18:09
 */
include_once ($_SERVER['DOCUMENT_ROOT'].'/CompanyJL/dao/NewsDao.php');
class NewsService
{
    private $NewsDao;

    public function __construct(){
        $this->NewsDao = new NewsDao();
    }

    public function getNews(){
        $news = $this->NewsDao->getNews();
        return $news;
    }

    public function getAllNews()
    {
        $news = $this->NewsDao->getAllNews();
        return $news;
    }

    public function getIDNews($newsID)
    {
        $news = $this->NewsDao->getIDNews($newsID);
        return $news;
    }

    public function getCount()
    {
        $news = $this->NewsDao->getCount();
        return $news;
    }

    public function setNews($newsTitle,$newsContext,$newsAdd)
    {
        $news = $this->NewsDao->setNews($newsTitle,$newsContext,$newsAdd);
       /* return $news;*/
    }

    public function modifyNews($newsTitle,$newsContext,$newsID){
        $this->NewsDao->modifyNews($newsTitle,$newsContext,$newsID);
    }

    public function deleteNews($newsID){
        $this->NewsDao->deleteNews($newsID);
    }

}