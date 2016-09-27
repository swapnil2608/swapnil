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
			<h1><a href='#'>WELCOME Candidate</a></h1>
			
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#">Home</a></li>
			<li><a href="candidateupdateprofile.php">Update Profile</a></a></li>
			<li><a href="candidateeditprofile.php">Edit Profile</a></li>
			<li><a href="candidateaddpromise.php">Add/Edit Promises</a></li>
			<li><a href="candidatequestionanswer.php">Question/Answer</a></li>
            <li><a href="candidateviewresult.php">View Result</a></li>
           	<li class="last"> <a href="candidatelogout.php" >Logout</a></li>
		</ul>
	</div>

	</div>
	
	
	<!-- end #page --> 
</div>
<h2 align="center">Candidate Profile</h2><br /><br />
<?php
session_start();
if(isset($_SESSION['uname']))
{ include_once('bll.php');
    $n=$_SESSION['uname'];
    $select="select * from candidate_reg where c_username='$n'";
    $rs=Blogic::execute_query($select);
    if($row=mysql_fetch_array($rs))
    {
    ?>
    <table cellspacing=0 border="10" align="center" cellpadding="60px">    
   <?php
   
   
    echo "<tr><td >Photo</td><td><img src='view_image.php?i=$row[0]'width='150px' height='150px'</td></tr>";
    
    echo "<tr><td>Candidate id</td><td>$row[0]</td></tr>";
   echo "<tr><td>First name</td><td>$row[2]</td></tr>";
    echo "<tr><td>Last name</td><td>$row[3]</td></tr>";
     echo "<tr><td>Fathername name</td><td>$row[7]</td></tr>";
      echo "<tr><td>Date of Birth</td><td>$row[4]</td></tr>";
      echo "<tr><td>Party</td><td>$row[10]</td></tr>";
      echo "<tr><td>Party Type</td><td>$row[11]</td></tr>";
       echo "<tr><td>Gender</td><td>$row[5]</td></tr>";
        echo "<tr><td>Address</td><td>$row[15]</td></tr>";
         echo "<tr><td>City</td><td>$row[9]</td></tr>";
          echo "<tr><td>State</td><td>$row[8]</td></tr>";
           echo "<tr><td>Pincode</td><td>$row[6]</td></tr>";
            echo "<tr><td>Contact</td><td>$row[16]</td></tr>";
             echo "<tr><td>Email</td><td>$row[14]</td></tr>";
              
   
   
    }?>
  </table>  
<?php }
else
{
   header("location:candidatelogin.php"); 
}
?>
