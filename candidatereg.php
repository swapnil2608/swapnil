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
<script type="text/javascript">
function funct()
{  if(document.getElementById("firstname1").value==""||document.getElementById("firstname1").value==null)
   {    alert("First name cannot be empty");
         document.getElementById("firstname1").focus();
           return false;
    }

else if(document.getElementById("lastname1").value==""||document.getElementById("lastname1").value==null)
   { 
    alert("Last name cannot be empty");
         document.getElementById("lastname1").focus();
           return false;
}

 else if(document.getElementById("fathername1").value==""||document.getElementById("fathername1").value==null)
   {    alert("Father name cannot be empty");
         document.getElementById("fathername1").focus();
           return false;
}

else if(document.getElementById("dob1").value==""||document.getElementById("dob1").value==NULL)
   {    alert("Date of Birth cannot be empty");
         document.getElementById("dob1").focus();
           return false;
}

//else if(document.getElementById("gen1").value==""||document.getElementById("gen1").value==null)
  // {    alert("Gender cannot be empty");
    //     document.getElementById("gen1").focus();
      //     return false;
//}

else if(document.getElementById("party1").value==""||document.getElementById("party1").value==NULL)
   {    alert("Date of Birth cannot be empty");
         document.getElementById("party1").focus();
           return false;
}
/*
else if((document.getElementById("type1").value)==""||(document.getElementById("type1").value)==NULL)
   {    alert("party type cannot be empty");
         document.getElementById("type1").focus();
           return (false);
}

else if((document.getElementById("address1").value)==""||(document.getElementById("address1").value)==NULL)
   {    alert("Address cannot be empty");
         document.getElementById("address1").focus();
           return (false);
}

else if((document.getElementById("pincode1").value)==""||(document.getElementById("Pincode1").value)==NULL)
   {    alert("Pincode cannot be empty");
         document.getElementById("Pinecode1").focus();
           return (false); 
}

else if((document.getElementById("state1").value)==""||(document.getElementById("firstname1").value)==NULL)
   {    alert("state cannot be empty");
         document.getElementById("state1").focus();
           return (false);
}

else if((document.getElementById("city1").value)==""||(document.getElementById("city1").value)==NULL)
   {    alert("City cannot be empty");
         document.getElementById("city1").focus();
           return (false);
}

else if((document.getElementById("contact1").value)==""||(document.getElementById("contact1").value)==NULL)
   {    alert("Contact cannot be empty");
         document.getElementById("Contact1").focus();
           return (false);
}


else if((document.getElementById("email1").value)==""||(document.getElementById("email1").value)==NULL)
   {    alert("Email cannot be empty");
         document.getElementById("email1").focus();
           return (false);
}
else if((document.getElementById("vid1").value)==""||(document.getElementById("vid1").value)==NULL)
   {    alert("Photo cannot be empty");
         document.getElementById("vid1").focus();
           return (false);
}

else if((document.getElementById("er1").value)==""||(document.getElementById("er1").value)==NULL)
   {    alert("Election reason cannot be empty");
         document.getElementById("er1").focus();
           return (false);
}
else if((document.getElementById("photo1").value)==""||(document.getElementById("photo1").value)==NULL)
   {    alert("Photo cannot be empty");
         document.getElementById("photo1").focus();
           return (false);
}
*/
else
{
    return true;
}
   
 }








</script>

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
			<li ><a href="olps.php">Home</a></li>
			<li><a href="adminlogin.php">Admin login</a></li>
			<li><a href="candidatelogin.php">Candidate login</a></li>
			<li><a href="voterlogin.php">Voter login</a></li>
			<li class="current_page_item"><a href="#">Candidate Registration</a></li>
			<li class="last"><a href="voterreg.php">Voter Registration</a></li>
		</ul>
	</div>
    <div class="welcome">
    <div class="entry">
    
<fieldset style="border-width: thick ;">
<legend align='center'><font size="6px">Candidate Registration</font></legend>
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
<td>Gender</td><td>
<input type="radio" name="gen" id="gen1" value="male"/>Male&nbsp;<input type="radio" name="gen" id="gen1" value="female"/>Female<br /></td>
<td>Party</td><td>
<input type="text" name="party" id="party1"/><br /></td></tr>
<tr><td>Type</td><td>
<input type="text" name="type" id="type1"/><br /></td>
<td>Address</td><td>
<textarea rows="3" cols="10" name="address" id="address1"></textarea><br /></td>
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
<input type="email" name="email" id="email1"/><br /></td>
<td>Voter Id</td><td>
<input type="text" name="vid"  id="vid1" maxlength="10"/><br /></td>
<td>Election Reason</td><td>
<textarea rows="3" cols="10" name="er" id="er1"></textarea><br /></td></tr>
<tr><td>Image</td><td>
<input type="file" name="photo" id="photo1"/><br /></td>
<td>Enter Captcha</td><td><img src="captcha.php" width="150px" height="50px"/></td>
<tr><td></td><td></td><td></td><td><input type="text" name="txt"/></td></tr>
</tr>
<tr><td></td><td></td><td></td><td><input type="submit" name="sub" value="REGISTER"/></td></tr>
1
</form>
</table>



<?php
include_once('bll.php');
if(isset($_REQUEST['sub']) )
{session_start();
  if($_SESSION['str']==$_REQUEST['txt'])
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
                 $username=str_shuffle($firstname);
                 $password=substr(md5(str_shuffle(date('d-m-y h:i:s'))),0,7);
                  $imgdata=""; 
   $z1=0;
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
    
    $select="insert into candidate_reg values(NULL,'$password','$firstname','$lastname','$dob','$gen',$pincode,'$fathername','$state','$city','$party','$type','$imgp','$imgdata','$email','$address',$contact,'$username','$er',$vid,$z1)";
   
    
    
     if(Blogic::execute_query($select)>0)
        {
            echo "<center><font color='green'>You have been registered <br>Username=".$username."<br>Password=".$password."</font></center>";
        }
        else
        {echo "vbhm,km."."<br>".mysql_error();}
        
  } else
   {
    echo "<br><center><font color='red'>Captcha entered is wrong!!!!!</font></center>";
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


	









