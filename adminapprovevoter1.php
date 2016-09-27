<em></em><html xmlns="http://www.w3.org/1999/xhtml">
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
			<li class="current_page_item"><a href="#">Candidate Account</a></a></li>
				
		
            <li><a href="adminvotingstart1.php">Voting Start</a></li>
            <li><a href="adminvotingend1.php">Voting end</a></li>
            	<li><a href="adminupdateresult1.php">Update result</a></li>
			<li class="last"><a href="adminlogout.php">Logout</a></li>
		</ul>
	</div>


<?php
session_start();
if(isset($_SESSION['uname2']))
{ include_once('bll.php');
  $n=$_REQUEST['cid'];
  $select="select * from candidate_reg where C_id='$n'";
  $rs=Blogic::execute_query($select);
  if($row=mysql_fetch_array($rs))
  {
    ?>
    
     <div class="welcome">
    <div class="entry">
    
<fieldset style="border-width: thick ;">
<legend align='center'><font size="6px">Candidate Edit Profile</font></legend>
<table align='center' celspacing="10px" cellpadding="15px">
<form method="post" enctype="multipart/form-data" onsubmit="return(funct())">
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<br />
<tr><td>First Name</td><td>
<input type="text" name="firstname" value="<?php echo $row[2];?>" id ="firstname1" /><br /></td>
<td>Last Name</td><td>
<input type="text" name="lastname" value="<?php echo $row[3];?>" id="lastname1"/><br /></td>
<td>Father Name</td><td>
<input type="text" name="fathername"value="<?php echo $row[7];?>" id="fathername1"/><br /></td></tr>
<tr><td>Date of Birth</td><td>
<input type="date" name="dob" id="dob1" value="<?php echo $row[4];?>"/><br /></td>
<td>Gender</td><td>
<?php
if($row[5]=="male")
{
?>
<input type="radio" name="gen" id="gen1" value="male" checked=""/>Male&nbsp;<input type="radio" name="gen" value="female"/>Female<br /></td>
<?php
}
else{
?>
<input type="radio" name="gen" id="gen1" value="male" />Male&nbsp;<input type="radio" name="gen" value="female" checked=""/>Female<br /></td>
<?php
}

?>
<td>Party</td><td>
<input type="text" name="party" id="party1" value="<?php echo $row[10];?>"/><br /></td></tr>
<tr><td>Type</td><td>
<input type="text" name="type" id="type1" value="<?php echo $row[11];?>"/><br /></td>
<td>Address</td><td>
<textarea rows="3" cols="10" name="address" id="address1"><?php echo $row[15];?></textarea><br /></td>
<td>Pin Code</td><td>
<input type="text" name="pincode" maxlength="6" id="pincode1" value="<?php echo $row[6];?>"/><br /></td></tr>
<tr><td>State</td>
<?php
echo "<td>";
$bname1 = array("up","ap","cg","mp","bihar","jharkhand","orissa","delhi","punjab","haryana");
$sel1 ="";
    foreach($bname1 as $val)
    {
        if($row[4]==$val)
        {
        $sel1 .="<option value='$val' selected>".strtoupper($val)."</option>";
        }
        else
        {
        $sel1 .="<option value='$val'>".strtoupper($val)."</option>";
        }
    }   

echo "<select name='state'>$sel1</select></td>";?>

<td>City</td>
<?php
echo "<td>";
$bname2 = array("kolkata","new delhi","chandigarh","raipur","durg","bilaspur","bhubneshwar","ranchi","noida","kanpur","lucknow","bhopal","hyderabad","bhagalpur","raigarh","korba");
$sel11 ="";
    foreach($bname2 as $val)
    {
        if($row[4]==$val)
        {
        $sel11 .="<option value='$val' selected>".ucwords($val)."</option>";
        }
        else
        {
        $sel11.="<option value='$val'>".ucwords($val)."</option>";
        }
    }   

echo "<select name='city'>$sel11</select></td>";?>


<td>Contact Number</td><td>
<input type="text" name="contact"  id="contact1" maxlength="10" value="<?php echo $row[16];?>"/><br /></td></tr>
<tr><td>Email</td><td>
<input type="email" name="email" id="email1"value="<?php echo $row[14];?>"/><br /></td>
<td>Voter Id</td><td>
<input type="text" name="vid"  id="vid1" maxlength="10"value="<?php echo $row[19];?>"/><br /></td>
<td>Election Reason</td><td>
<textarea rows="3" cols="10" name="er" id="er1"><?php echo $row[15];?></textarea><br /></td></tr>
<tr><td>Image</td><td><font color='red'>Photo Editing not allowed</font><br /></td></tr>

<tr><td></td><td></td><td></td><td><input type="submit" name="sub" value="Edit"/></td></tr>

</form>
</table>
    
    
    <?php
  }
  if(isset($_REQUEST['sub']) )
{
  
   
   
   
    $firstname=$_REQUEST['firstname'];
     $lastname=$_REQUEST['lastname'];
      $fathername=$_REQUEST['fathername'];
       $dob=$_REQUEST['dob'];
        $gen=$_REQUEST['gen'];
         $party=$_REQUEST['party'];
          $type=$_REQUEST['type'];
           $address=$_REQUEST['address'];
            $pincode=$_REQUEST['pincode'];
             $state=$_REQUEST['state'];
              $city=$_REQUEST['city'];
               $contact=$_REQUEST['contact'];
                $email=$_REQUEST['email'];
                 $vid=$_REQUEST['vid'];
                 $er=$_REQUEST['er']; 
  
   $select="update candidate_reg set firstname='$firstname',lastname='$lastname',Dob='$dob',gen='$gen',pincode=$pincode,fathername='$fathername',state='$state',city='$city',party='$party',type='$type',email='$email',address='$address',contact='$contact',er='$er',v_id='$vid' where C_id='$n'";
   
    
    
     if(Blogic::execute_query($select)>0)
        {
            echo "<center><font color='green'>Information Edited</font></center>";
        }
  
  else
  {
    echo "gfhgjh".mysql_error();
  }
  
  }}
  
else
{
   header("location:adminlogin.php"); 
}
?>
<center><a href="">Go Back....</a></center>
	</div>
	</div>
	</div>
	<!-- end #page --> 
</div>
<div id="footer">
	<p>&copy; SA. All rights reserved. Design by <a href="https://www.facebook.com/swapnil.agrawal.9">Swapnil Agrawal</a>
</div>
<!-- end #footer -->
</body>
</html>
