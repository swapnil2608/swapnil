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
				
		<li class="current_page_item"><a href="#">Admin Registration</a></a></li>
            <li><a href="adminvotingstart.php">Voting Start</a></li>
            <li><a href="adminvotingend.php">Voting end</a></li>
            	<li><a href="adminupdateresult.php">Update result</a></li>
			<li class="last"><a href="adminlogout.php">Logout</a></li>
		</ul>
	</div>

	
</div>
    <div class="welcome">
    <div class="entry">
    
<fieldset style="border-width: thick ;">
<legend align='center'><font size="6px">Admin Registration</font></legend>
<table align='center' celspacing="10px" cellpadding="15px">
<form method="post" enctype="multipart/form-data" onsubmit="return(funct());">
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<br />
<tr><td>First Name</td><td>
<input type="text" name="firstname" id="firstname1" /><br /></td>
<td>Last Name</td><td>
<input type="text" name="lastname" id="lastname1"/><br /></td>
<td>Father Name</td><td>
<input type="text" name="fathername" id="fathername1"/><br /></td></tr>
<tr><td>Date of Birth</td><td>
<input type="date" name="dob" id="dob1"/><br /></td>
<td>Address</td>
<td><textarea rows="3" cols="10" name="address" id="address1"></textarea><br /></td>
<td>Pin Code</td><td>
<input type="text" name="pincode" maxlength="6" id="pincode1"/><br /></td></tr>
<tr><td>State</td><td>
<select name="state">
<option value="-1">===Select State===</option>
<option value="up">UP</option>
<option value="ap">AP</option>
<option value="cg">CG</option>
<option value="mp">MP</option>
<option value="bihar">BIHAR</option></option>
<option value="jharkhand">JHARKHAND</option>
<option value="orissa">ORISSA</option>
<option value="delhi">DELHI</option>
<option value="punjab">PUNJAB</option>
<option value="haryana">HARYANA</option>
</select>




<br /></td>
<td>City</td><td>
<select name="city">
<option value="-1">===Select City===</option>
<option value="kolkata">Kolkata</option>
<option value="new delhi">Newdelhi</option>
<option value="chandigarh">Chandigarh</option>
<option value="raipur">Raipur</option>
<option value="durg">Durg</option></option>
<option value="bilaspur">Bilaspur</option>
<option value="bhubneshwar">Bhubneshwar</option>
<option value="ranchi">Ranchi</option>
<option value="noida">Noida</option>
<option value="kanpur">Kanpur</option>
<option value="lucknow">Lucknow</option>
<option value="bhopal">Bhopal</option>
<option value="hyderabad">Hyderabad</option>
<option value="bhagalpur">Bhagalpur</option>
<option value="raigarh">Raigarh</option>
<option value="korba">Korba</option>
</select>
<br /></td>
<td>Contact Number</td><td>
<input type="text" name="contact"  id="contact1" maxlength="10"/><br /></td></tr>
<tr><td>Email</td><td>
<input type="email" name="email" id="email1"/><br /></td></tr>

<tr><td></td><td></td><td></td><td><input type="submit" name="sub" value="REGISTER"/></td></tr>

</form>
</table>



<?php
include_once('bll.php');
if(isset($_REQUEST['sub']) )
{
  
   
   
   
    $firstname=$_REQUEST['firstname'];
     $lastname=$_REQUEST['lastname'];
      $fathername=$_REQUEST['fathername'];
       $dob=$_REQUEST['dob'];
        $address=$_REQUEST['address'];
            $pincode=$_REQUEST['pincode'];
             $state=$_REQUEST['state'];
              $city=$_REQUEST['city'];
               $contact=$_REQUEST['contact'];
                $email=$_REQUEST['email'];
                $username=str_shuffle($firstname);
                 $password=substr(md5(str_shuffle(date('d-m-y h:i:s'))),0,7);
                 
    $select="insert into admin_reg values('$firstname','$lastname','$fathername','$address',$pincode,'$city','$state','$dob','$contact','$email','$username','$password')";
   
    
    
     if(Blogic::execute_query($select)>0)
        {
            echo "<center><font color='green'>Admin is registered <br>Username=".$username."<br>Password=".$password."</font></center>";
        }
        else
        {echo "vbhm,km."."<br>".mysql_error();}
        
   }
   
   
   
   

?>    

</fieldset>
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