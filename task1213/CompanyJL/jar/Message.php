<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/5
 * Time: 15:09.
 */

namespace leaveMessage;

class Message
{
    private $msgcontent;
    private $username;
    private $dateMsg ;
    public function getLeaveMsg()
    {
        $this->msgcontent = $_POST['msgcontent'];

        return $this->msgcontent;
    }
    public function getUsername()
    {
        $this->username = $_POST['username'];

        return $this->username;
    }
    public function getDate(){
        $this->dateMsg=date('Y-m-d H:i:s', time());
        return $this->dateMsg;
    }
}
?>
