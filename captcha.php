<?php

header("content-type:image/png");
session_start();
$str=strtoupper(substr(md5(time()*microtime()),0,8));
$_SESSION['str']=$str;
$handle=imagecreate(100,50)or die("Csnnot create image");
$bg_color=imagecolorallocate($handle,2000,100,0);
$txt_color=imagecolorallocate($handle,100,200,200);
imagestring($handle,10,10,18,$str,$txt_color);
imagepng($handle);


?>
