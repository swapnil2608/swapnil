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
			<li class="current_page_item"><a href="#">Candidate Account</a></a></li>
            <li><a href="adminregistration.php">Admin Registration</a></a></li>

	
            <li><a href="adminvotingstart.php">Voting Start</a></li>
            <li><a href="adminvotingend.php">Voting end</a></li>
            	<li><a href="adminupdateresult.php">Update result</a></li>
			<li class="last"><a href="adminlogout.php">Logout</a></li>
		</ul>
	</div>

	</div>
	
	</div>

<?php

session_start();
if(isset($_SESSION['uname2']))
{
    include_once('bll.php');
    $select="select * from candidate_reg";
    $rs=Blogic::execute_query($select);
    ?>
    <h2 align="center"><u>List of Candidates</u></h2>
    <table border="1px" align="center" cellspacing="" cellpadding="5px">
    <?php
    while($row=mysql_fetch_array($rs))
    { 
        
                echo "<tr><td ><img src='view_image.php?i=$row[0]'width='200px' height='200px'</td>";
                echo "<td width='200px' height='200px' align='center'><a href='adminapprovecandidate.php?cid=$row[0]'>Delete</a><br><br><br><a href='adminapprovevoter.php?cid=$row[0]'>Update</a><br><br></td></tr>";
            }
    }
    
    

else
{
   header("location:adminlogin.php"); 
}
?>
	

