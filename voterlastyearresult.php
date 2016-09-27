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

	</div><br /><br /><br />
    <center><form method="post">
    Enter Voterid &nbsp;&nbsp;<input type="text" name="v_id"/>
    <input type="submit" name="sub" value="vote"/>
    
    </form>
	
	</center>
	
<?php
session_start();
if(isset($_SESSION['uname1']))
{if(isset($_REQUEST['sub']))
{  include_once('bll.php');
   
    $n=$_SESSION['uname1'];
    $vid=$_REQUEST['v_id'];
    $select1="select * from voter_reg where voterid='$vid' and v_username='$n'";
    $rs1=Blogic::execute_query($select1);
    if(@$row1=mysql_fetch_array($rs1))
    {
        
   
    
    
    $select="select * from voting where v_id='$vid'";
    $rs=Blogic::execute_query($select);
    if(@$row=mysql_fetch_array($rs))
    { if($row[1]==1)
          {include_once('bll.php');
    $select3="select * from candidate_reg";
    $rs3=Blogic::execute_query($select3);
    ?>
    <h3 align="center"><u>List of Candidates</u></h3><br /><br/>
    <table border="1px" align="center" cellspacing="" cellpadding="5px">
    <tr><th>Candidate id</th><th>Candidate name</th><th>Party</th><th>vote</th></tr>
    <?php
    while($row3=mysql_fetch_array($rs3))
    { 
        
                echo "<tr><td >$row3[0]</td><td >$row3[2]</td><td >$row3[10]</td>";
                echo "<td  align='center'><a href='voter2.php?cid=$row3[0]&vid=$vid'>Vote</a>";
            }
    
    
    echo "</table>";
        
        
        
        
     }else
   {
     echo "<center><font color='red'>You have already casted vote!!</center></font>";
   }}
    else
    {
        echo "<center><font color='red'>Voting not started!!</center></font>";
    }
   
   
   
   
    }
else
    {
        echo "<center><font color='red'>Voterid is wrong!!!!!!</center></font>";
    }}
}
    

else
{
   header("location:voterlogin.php"); 
}
?>
	<!-- end #page --> 
</div>
<div id="footer">
	<p>&copy; SA. All rights reserved. Design by <a href="https://www.facebook.com/swapnil.agrawal.9">Swapnil Agrawal</a>
</div>
<!-- end #footer -->
</body>
</html>