<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/14
 * Time: 20:07
 */
class AboutDao
{
    private $pdo;
    private $about;
    public function __construct()
    {
        $db = new Dao();
        $this->pdo=$db->conn();
    }

    public function getAbout(){

        $sql = 'select * from about order by aboutID desc limit 1';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $about = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return isset($about) && $about ? $about : [];
    }

    public function setAbout($content){

        $sql = 'insert into about(aboutTime,aboutContext) values(?,?)';
        $stmt = $this->pdo->prepare($sql);
        $time =date('Y-m-d H:i:s', time());
        $aboutTime = strtotime($time);
        $stmt->bindParam(1,$aboutTime);
        $stmt->bindParam(2,$content);

        if ( $stmt->execute())
        {
            $this->about = true;
        }
        return $this->about;
    }
}