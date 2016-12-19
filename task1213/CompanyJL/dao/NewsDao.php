<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/14
 * Time: 18:07.
 */
class NewsDao
{
    private $pdo;
    public function __construct()
    {
        $db = new Dao();
        $this->pdo = $db->conn();
    }

    public function getNews()
    {
        $sql = ' select * from news order by newsID desc limit 5;';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return isset($news) && $news ? $news : [];
    }
    public function getAllNews()
    {
        $sql = 'select * from news';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return isset($news) && $news ?$news:[];
    }

    public function getIDNews($newsID)
    {
        $sql = 'select * from news where newsID=?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$newsID);
        $stmt->execute();
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return isset($news) && $news ?$news:[];
    }
    public function getCount()
    {
        $sql = 'select count(*) from news';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $news = $stmt->fetch(PDO::FETCH_ASSOC);

        return isset($news) && $news ?$news:[];
    }

    public function setNews($newsTitle,$newsContext,$newsAdd)
    {
        $sql = 'insert into news(newsTitle,newsTime,newsContext,newsAdd) values(?,?,?,?)';
        $stmt = $this->pdo->prepare($sql);
        $time =date('Y-m-d H:i:s', time());
        $newsTime = strtotime($time);
        $stmt->bindParam(1,$newsTitle);
        $stmt->bindParam(2,$newsTime);
        $stmt->bindParam(3,$newsContext);
        $stmt->bindParam(4,$newsAdd);
        $stmt->execute();

    }

    public function modifyNews($newsTitle,$newsContext,$newsID)
    {
        $sql = 'update news set newsTitle=?,newsTime=?,newsContext=? where newsID=?';

        $stmt = $this->pdo->prepare($sql);
        $time=123123;
        $stmt->bindParam(1,$newsTitle);
        $stmt->bindParam(2,$time);
        $stmt->bindParam(3,$newsContext);
        $stmt->bindParam(4,$newsID);
        $stmt->execute();

    }

    public function deleteNews($newsID)
    {
        $sql = 'delete from news where newsID=?';
        foreach ($newsID as $value){
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(1,$value);
            $stmt->execute();
        }


    }
}
