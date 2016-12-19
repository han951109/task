<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/16
 * Time: 10:31
 */
include_once($_SERVER['DOCUMENT_ROOT'] . '/CompanyJL/dao/AdminDao.php');

class AdminService
{
    private $AdminDao;

    public function __construct(){
        $this->AdminDao = new AdminDao();
    }

    public function getAdmin($username){
        $admin = $this->AdminDao->getAdmin($username);

        return $admin;
    }

    public function getIDAdmin($adminID)
    {
        $admin = $this->AdminDao->getIDAdmin($adminID);
        return $admin;
    }

    public function getAllAdmin(){
        $admin = $this->AdminDao->getAllAdmin();

        return $admin;
    }

    public function setAdmin($adminName,$adminPwd,$adminIP){
            $admin = $this->AdminDao->setAdmin($adminName,$adminPwd,$adminIP);

            return $admin;
    }

    public function modifyAdmin($adminName,$adminPwd,$adminID){
        $this->AdminDao->modifyAdmin($adminName,$adminPwd,$adminID);
    }

    public function deleteAdmin($adminID){
        $this->AdminDao->deleteAdmin($adminID);
    }

}