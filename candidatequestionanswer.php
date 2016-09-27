<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Candidatequestionanswer</title>
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
			<h1><a href='#'>WELCOME candidate</a></h1>
			
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li ><a href="candidatehome.php">Home</a></li>
			<li ><a href="candidateupdateprofile.php">Update Profile</a></a></li>
			<li ><a href="candidateeditprofile.php">Edit Profile</a></li>
			<li ><a href="candidateaddpromise.php">Add/Edit Promises</a></li>
			<li class="current_page_item"><a href="#">Question/Answer</a></li>
            <li><a href="candidateviewresult.php">View Result</a></li>
           	<li class="last"><a href="candidatelogout.php">Logout</a></li>
		</ul>
	</div>

	</div>
    <h3 align="center">Question</h3><br />
	

<?php
session_start();
if(isset($_SESSION['uname']))
{ require_once('bll.php');
    $name=$_SESSION['uname'];
    $select="select * from candidate_reg where c_username='$name'";
    
  $rs=Blogic::execute_query($select);
  if($row=mysql_fetch_array($rs))
  {
    $r=$row[0];
  } 
    $select="select * from questionask where C_id=$r";
  $rs=Blogic::execute_query($select);
  if(mysql_affected_rows())
  {
  ?>
  <table align="center" cellspacing="0" border="1px" cellpadding="15px">
  <tr><th>Voter-id</th><th>Answer</th></tr>
  <?php
  while($row=mysql_fetch_array($rs))
  {?>
  
  <tr><td><?php   
  echo $row[1]; 
  ?>
  </td><td>
  <a href="candidatequestionanswer1.php?id=<?php   
  echo $row[1]; 
  ?>">Answers</a>
  
  </td></tr>
  
  
  
  
  <?php
    
  } echo "</table>";}
  else 
  {
    echo "<center><font color='red'>No Question is asked</font></center>";
  } 
 }
else
{
   header("location:candidatelogin.php"); 
}
?>

</center>
	<!-- end #page --> 
</div>
<div id="footer">
	<p>&copy; SA. All rights reserved. Design by <a href="https://www.facebook.com/swapnil.agrawal.9">Swapnil Agrawal</a>
</div>
<!-- end #footer -->
</body>
</html>
