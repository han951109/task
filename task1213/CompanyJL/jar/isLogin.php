<?php
    session_start();
    if (!$_SESSION['isLogin']){
        header('Location:login.php');
    }
?>

