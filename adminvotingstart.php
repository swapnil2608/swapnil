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
		<li ><a href="adminhome.php">Home</a></li>
			
			<li><a href="admincandidateaccount.php">Candidate Account</a></a></li>
            <li><a href="adminregistration.php">Admin Registration</a></a></li>
				
		
            <li class="current_page_item"><a href="#">Voting Start</a></li>
            <li><a href="adminvotingend.php">Voting end</a></li>
            	<li><a href="adminupdateresult.php">Update result</a></li>
			<li class="last"><a href="adminlogout.php">Logout</a></li>
		</ul>
	</div>

	</div>
	
	

<?php
session_start();

if(isset($_SESSION['uname2']))
{ 
    include_once('bll.php');
    $create="create table voting(v_id varchar(20),flag int)";
    $w=Blogic::execute_query($create);
$select="select * from voter_reg";
$e=1;
$rs=Blogic::execute_query($select);
while($row=mysql_fetch_array($rs))
{
    $select1="insert into voting values('$row[0]',$e)";
   $rs1=Blogic::execute_query($select1);
} 
echo "<center><font color='green'>Voting is started</font></center> ";
}
else
{
   header("location:adminlogin.php"); 
}
?>








