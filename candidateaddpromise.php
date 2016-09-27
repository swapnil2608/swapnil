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
			<li ><a href="candidatehome.php">Home</a></li>
			<li ><a href="candidateupdateprofile.php">Update Profile</a></a></li>
			<li ><a href="candidateeditprofile.php">Edit Profile</a></li>
			<li class="current_page_item"><a href="#">Add/Edit Promises</a></li>
			<li><a href="candidatequestionanswer.php">Question/Answer</a></li>
            <li><a href="candidateviewresult.php">View Result</a></li>
           	<li class="last"><a href="candidatelogout.php">Logout</a></li>
		</ul>
	</div>
    <h2 align="center">ADD/EDIT Promises</h2>
   

	
<?php
session_start();
if(isset($_SESSION['uname']))
{     $uname=$_SESSION['uname'];
    
include_once('bll.php');
   
    $select="select * from candidate_reg where c_username='$uname'";
     
    $rs=Blogic::execute_query($select);
    if($row=mysql_fetch_array($rs))
    {
        $cid=$row[0];
    }
    
    $select1="select * from promise where C_id=".$cid;
    $rs1=Blogic::execute_query($select1);
    if(mysql_affected_rows())
    {if($row1=mysql_fetch_array($rs1))
    {
     ?>
      <center>
    <form method="post">
   &nbsp;&nbsp;&nbsp; <textarea rows="30" cols="40" name="p"><?php  echo $row1[0];  ?></textarea><br /><br />
    <input type="submit" name="sub" value="ADD/EDIT"/>
    
    </center>
    </form>
     
     <?php   
   
              }
              if(isset($_REQUEST['sub']))
  {
    $p=$_REQUEST['p'];
    $select="update promise set promise='$p'";
    if(BLogic::execute_query($select))
    {
        echo "<center><font color='green' >Promise has been updated!!!!!</font></center>";
    }
    else
    {
        echo mysql_error();
    }
        
    }}
    else
    {?>
       <center>
    <form method="post">
   &nbsp;&nbsp;&nbsp; <textarea rows="30" cols="40" name="p"></textarea><br /><br />
    <input type="submit" name="sub" value="ADD/EDIT"/>
   
    
    </center>
    </form>
    <?php  
   
   if(isset($_REQUEST['sub']))
  {
    $p=$_REQUEST['p'];
    $select="insert into promise values('$p',$cid)";
    if(BLogic::execute_query($select))
    {
        echo "<center><font color='green' >Promise has been updated!!!!!</font></center>";
    }
    else
    {
        echo mysql_error();
    }
   
     }
    
  
    
  }  
    
    
    
}
   

else
{
   header("location:candidatelogin.php"); 
}
?>


</div>
	
	
	<!-- end #page --> 
</div>
<div id="footer">
	<p>&copy; SA. All rights reserved. Design by <a href="https://www.facebook.com/swapnil.agrawal.9">Swapnil Agrawal</a>
</div>
<!-- end #footer -->
</body>
</html>