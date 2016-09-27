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
			<h1><a href='#'>WELCOME  TO  ONLINE  POLLING</a></h1>
			
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li ><a href="#">Home</a></li>
			<li><a href="adminlogin.php">Admin login</a></li>
			<li><a href="candidatelogin.php">Candidate login</a></li>
			<li><a href="voterlogin.php">Voter login</a></li>
			<li><a href="candidatereg.php">Candidate Registration</a></li>
			<li class="last current_page_item"><a href="#">Voter Registration</a></li>
		</ul>
	</div>
	
	<div id="welcome">
		
		<div class="entry">
        
	<fieldset style="border-width: thick ;">
<legend align='center'><font size="6px">Voter Registration</font></legend>
<table align='center' celspacing="10px" cellpadding="15px">
<form method="post" enctype="multipart/form-data" onsubmit="return(funct())">
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
<td>Gender</td><td>
<input type="radio" name="gen" id="gen1" value="male"/>Male&nbsp;<input type="radio" name="gen" value="female"/>Female<br /></td>

<td>Address</td><td>
<textarea rows="3" cols="10" name="address" id="address1"></textarea><br /></td></tr>
<tr><td>Pin Code</td><td>
<input type="text" name="pincode" maxlength="6" id="pincode1"/><br /></td>
<td>State</td><td>
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
<br /></td></tr>
<tr><td>Contact Number</td><td>
<input type="text" name="contact"  id="contact1" maxlength="10"/><br /></td>
<td>Email</td><td>
<input type="email" name="email" id="email1"/><br /></td>
<td>Upload Voter Id</td><td>
<input type="file" name="vid"  id="vid1" maxlength="10"/><br /></td></tr>

<tr>
<td>Voter Id</td><td>
<input type="text" name="v_id" id="v_id1"/><br /></td>

<td>Image</td><td>
<input type="file" name="photo" id="photo1"/><br /></td>
<td>Enter Captcha</td><td><img src="captcha.php" width="150px" height="50px"/></td></tr>
<tr><td></td><td></td><td></td><td><td></td></td><td><input type="text" name="txt"/></td></tr>

<tr><td></td><td></td><td></td><td><input type="submit" name="sub" value="REGISTER"/></td></tr>

</form>
</table>



<?php
include_once('bll.php');
if(isset($_REQUEST['sub']) )
{$vid=$_REQUEST['v_id'];
    $select4="select * from voter_reg where voterid ='$vid'";
    $rs=Blogic::execute_query($select4);
    if($row=mysql_fetch_array($rs))
    {
    echo "<br><center><font color='red'>voter with the voterid is already registered!!!!!</font></center>";
    }
    
    else{
    
    
    session_start();

  if($_SESSION['str']==$_REQUEST['txt'])
   
   {
    
    
    
   $v_id=$_REQUEST['v_id'];
    $firstname=$_REQUEST['firstname'];
     $lastname=$_REQUEST['lastname'];
      $fathername=$_REQUEST['fathername'];
       $dob=$_REQUEST['dob'];
        $gen=$_REQUEST['gen'];
           $address=$_REQUEST['address'];
            $pincode=$_REQUEST['pincode'];
             $state=$_REQUEST['state'];
              $city=$_REQUEST['city'];
               $contact=$_REQUEST['contact'];
                $email=$_REQUEST['email'];
                 $v_username=str_shuffle($firstname);
                 $v_pass=substr(md5(str_shuffle(date('d-m-y h:i:s'))),0,7);
                  $imgdata="";
   
    if($_FILES['photo']['error']==0)
    {
        $temp_name=$_FILES['photo']['tmp_name'];
        }
    
        $handler=@fopen($temp_name,'r');
       // echo "$handler";
        $fread=@fread($handler,filesize($temp_name));
      //  echo "<hr>$fread<br>$handler";
        $imgp=$_FILES['photo']['type'];
        //echo $imgp;
        if(!$imgdata=addslashes($fread))
        {
            echo "<font color='red'>File couldnot read</font>";
        }
         $imgdata1="";
   
    if($_FILES['vid']['error']==0)
    {
        $temp_name=$_FILES['vid']['tmp_name'];
        }
    
        $handler1=@fopen($temp_name,'r');
       // echo "$handler";
        $fread1=@fread($handler1,filesize($temp_name));
      //  echo "<hr>$fread<br>$handler";
        $imgp1=$_FILES['vid']['type'];
        //echo $imgp;
        if(!$imgdata1=addslashes($fread1))
        {
            echo "<font color='red'>File couldnot read</font>";
        }
    
    $select="insert into voter_reg  values('$v_id','$firstname','$lastname','$fathername','$dob','$gen','$state','$city','$address','$email',$contact,$pincode,'$v_username','$v_pass','$imgdata','$imgdata1','$imgp','$imgp1')";
   
 
    
     if(Blogic::execute_query($select)>0)
        {
            echo "<center><font color='green'>You have been registered <br>Username=".$v_username."<br>Password=".$v_pass."</font></center>";
        }
        else
        {echo "vbhm,km."."<br>".mysql_error();}
        echo Blogic::execute_query($select);
   }
    else
   {
    echo "<br><center><font color='red'>Captcha entered is wrong!!!!!</font></center>";
   }
   
   
  
    
  }
   
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


	










