<?php

include_once('bll.php');
session_start();
if(isset($_SESSION['uname']))
{
    unset($_SESSION['uname']);
    session_destroy();
    header("location:candidatelogin.php");
}

?>