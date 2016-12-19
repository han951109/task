<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/15
 * Time: 18:26
 */
class ContactDao
{
    private $pdo;
    public function __construct()
    {
        $db = new Dao();
        $this->pdo=$db->conn();
    }

    public function getContact(){

        $sql = 'select * from contact order by conID desc limit 1';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $contact = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return isset($contact) && $contact ? $contact : [];
    }

    public function setContact($conAddress,$conPerson,$conMPhone,$conPhone,$conEmail){

        $sql = 'insert into contact(conAddress,conPerson,conMPhone,conPhone,conEmail) values(?,?,?,?,?)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$conAddress);
        $stmt->bindParam(2,$conPerson);
        $stmt->bindParam(3,$conMPhone);
        $stmt->bindParam(4,$conPhone);
        $stmt->bindParam(5,$conEmail);
        $stmt->execute();
       
    }
}