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
			<h1><a href='#'>WELCOME Voter</a></h1>
			
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li ><a href="voterhome.php">Home</a></li>
			<li class="current_page_item"><a href="#">Update Profile</a></a></li>
			<li ><a href="voterviewcandidates.php">View Candidates</a></li>
			
			<li><a href="voterlastyearresult.php">Caste Vote</a></li>
            <li><a href="voterviewresult.php">View Result</a></a></li>
			<li class="last"><a href="voterlogout.php">Logout</a></li>
		</ul>
	</div>

	</div>
    
		<div class="entry">
        
	
<h2 align='center'>Update Account</h2>
<table align='center' celspacing="10px" cellpadding="15px">
<form method="post" enctype="multipart/form-data" onsubmit="return(funct())">
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<br /> 
<tr><td>Old Password</td><td>
<input type="password" name="op" id="firstname1" /><br /></td></tr>
<tr><td>New Password</td><td>
<input type="password" name="np" id="lastname1"/><br /></td></tr>
<tr><td>Confirm Password</td><td>
<input type="password" name="cp" id="fathername1"/><br /></td></tr>
<tr><td></td><td><input type="submit" name="sub" value="Update"/></td></tr>
	
</form>
</table>
<center>	

<?php
session_start();
if(isset($_SESSION['uname1']))
{
    $name=$_SESSION['uname1'];
if(isset($_REQUEST['sub']))
{
    include_once('bll.php');
$pass=$_REQUEST['op'];

$select="select * from voter_reg where v_pass='$pass'";
$r=Blogic::execute_query($select);

if(mysql_affected_rows()>0)

   
   {$r=$_REQUEST['np'];
   
    if(($_REQUEST['np'])==($_REQUEST['cp']))
    {    $select1="update voter_reg set v_pass='$r' where v_username='$name'";
    
  
    if(Blogic::execute_query($select1))
    {
        echo "<br><center><font color='green'>Account updated succesfully!!!</font></center>";
    }
    else
    {
        echo "<br>".mysql_error();
    }
    
    }
    else
    {
         echo "<br><center><font color='red'>New and confirm password should be same!!!</font></center>";
    }
   }
   else
   {
    echo "<br><center><font color='red'>Enter Correct old password!!!</font></center>";
   }
   
   
    

}}
else
{
   header("location:voterlogin.php"); 
}
?>
</center>
</table>	
	<!-- end #page --> 
</div>
<div id="footer">
	<p>&copy; SA. All rights reserved. Design by <a href="https://www.facebook.com/swapnil.agrawal.9">Swapnil Agrawal</a>
</div>
<!-- end #footer -->
</body>
</html>

