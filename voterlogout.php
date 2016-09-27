<?php

include_once('bll.php');
session_start();
if(isset($_SESSION['uname1']))
{
    unset($_SESSION['uname1']);
    session_destroy();
    header("location:voterlogin.php");
}

?>