<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/15
 * Time: 14:22
 */
class GuestBookDao
{
    private $pdo;
    private $guestBook=false;
    public function __construct()
    {
        $db = new Dao();
        $this->pdo=$db->conn();
    }

    public function setGuestBook($guestBookName,$guestBookContext){

        $sql = 'insert into guestBook(guestBookName,guestBookContext) values(?,?)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$guestBookName);
        $stmt->bindParam(2,$guestBookContext);
        if ( $stmt->execute())
        {
            $this->guestBook = true;
        }
        return $this->guestBook;

    }

    public function getCount(){

        $sql = 'select count(*) from guestBook';
        $stmt = $this->pdo->prepare($sql);
        
        $stmt->execute();
        $guestBook= $stmt->fetch(PDO::FETCH_ASSOC);

        return $guestBook;

    }
}