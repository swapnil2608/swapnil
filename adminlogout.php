<?php

include_once('bll.php');
session_start();
if(isset($_SESSION['uname2']))
{
    unset($_SESSION['uname2']);
    session_destroy();
    header("location:adminlogin.php");
}

?>