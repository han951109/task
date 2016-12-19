<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/16
 * Time: 10:19
 */
class AdminDao
{
    private $pdo;
    private $admin;
    public function __construct()
    {
        $db = new Dao();
        $this->pdo=$db->conn();
    }

    public function getAdmin($username){

        $sql = 'select * from admin where adminName=?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$username);
        $stmt->execute();
        $admin = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return isset($admin) && $admin ? $admin: [];
    }
    public function getIDAdmin($adminID)
    {
        $sql = 'select * from admin where adminID=?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$adminID);
        $stmt->execute();
        $admin = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return isset($admin) && $admin ?$admin:[];
    }

    public function getAllAdmin(){

        $sql = 'select * from admin';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $admin = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return isset($admin) && $admin ? $admin: [];
    }

    public function setAdmin($adminName,$adminPwd,$adminIP){

        $sql = 'insert into admin(adminName,adminPwd,adminTime,adminIP) values(?,?,?,?)';
        $stmt = $this->pdo->prepare($sql);
        $time =date('Y-m-d H:i:s', time());
        $adminTime = strtotime($time);
        $stmt->bindParam(1,$adminName);
        $stmt->bindParam(2,$adminPwd);
        $stmt->bindParam(3,$adminTime);
        $stmt->bindParam(4,$adminIP);


        if ( $stmt->execute())
        {
            $this->admin = true;
        }
        return $this->admin;
    }

    public function modifyAdmin($adminName,$adminPwd,$adminID)
    {
        $sql = 'update admin set adminName=?,adminPwd=? where adminID=?';

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1,$adminName);
        $stmt->bindParam(2,$adminPwd);
        $stmt->bindParam(3,$adminID);
        $stmt->execute();

    }

    public function deleteAdmin($adminID)
    {
        $sql = 'delete from admin where adminID=?';
        foreach ($adminID as $value){
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(1,$value);
            $stmt->execute();
        }


    }

}