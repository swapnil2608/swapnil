<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Online Polling</title>
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
@import "gallery.css";
</style>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href='#'>WELCOME Admin</a></h1>
			
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
				<li ><a href="voterhome.php">Home</a></li>
			<li><a href="voterupdateprofile.php">Update Profile</a></a></li>
			<li><a href="voterviewcandidates.php">View Candidates</a></li>
			<li class="current_page_item"><a href="#">Caste Vote</a></li>
            <li><a href="voterviewresult.php">View Result</a></a></li>
			<li class="last"><a href="voterlogout.php">Logout</a></li>
		</ul>
	</div>

	</div>
	
	

<?php
session_start();
if(isset($_SESSION['uname1']))
   {if(isset($_REQUEST['vid']))
{ include_once('bll.php');
   ?>
   <center><font color='green'>Congratulation Your Vote is casted!!!</font></center>
   <?php
   include_once('bll.php');
    $vid=$_REQUEST['vid'];
    $cid=$_REQUEST['cid'];
    $t=0;
    $select="update voting set flag=$t where v_id=$vid";
    $rs=Blogic::execute_query($select);
    $select1="Select * from candidate_reg where C_id=$cid";
     $rs1=Blogic::execute_query($select1);
     if($row=mysql_fetch_array($rs1))
     {
        $count=$row[20];
     }    
$count+=1;
$select2="update candidate_reg set vote=$count where C_id=$cid";
$rs2=Blogic::execute_query($select2);



}



else
{
   header("location:voterlastyearresult.php"); 
}

}
else
{
   header("location:voterlogin.php"); 
}
?>
