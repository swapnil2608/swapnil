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
				<li ><a href="adminhome1.php">Home</a></li>
			<li><a href="admincandidateaccount1.php">Candidate Account</a></a></li>
            
				
		
            <li><a href="adminvotingstart1.php">Voting Start</a></li>
            <li><a href="adminvotingend1.php">Voting end</a></li>
            	<li class="current_page_item"><a href="#">Update result</a></li>
			<li class="last"><a href="adminlogout.php">Logout</a></li>
		</ul>
	</div>

	</div>
	
	

<?php
session_start();

if(isset($_SESSION['uname2']))
{ include_once('bll.php');
    $r=1;
    $select="update result set res=$r ";
    if(Blogic::execute_query($select))
    {
       echo "<center><font color='green'>Result Published!!</center></font>"; 
    }
    
    
}
else
{
   header("location:adminlogin.php"); 
}
?>
