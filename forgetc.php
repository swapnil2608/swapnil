<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Voter Login</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>forget Password?</h1>
			</div>

			<div class="login-form">
				<div class="control-group">
                <form method="post">
				<input type="text" class="login-field" value="" placeholder="Voterid" name="v_id"/>
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="Email" name="email"/>
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
                <div class="btn btn-primary btn-large btn-block"> <input type="submit" name="sub1" value="Get password" /></div>

                <input type="submit" name="sub2" value="Go to Login Page" /></form>                </div>
			<!---	<a class="btn btn-primary btn-large btn-block" href="#">login</a>-->
			
			</div>
		</div>
	</div>
</body>
    
    
    
    
    
  </body>
</html>
<?php
if(isset($_REQUEST['sub1']))

{
include_once('bll.php');
$uid=$_REQUEST['v_id'];
$email=$_REQUEST['email'];
$select="select * from candidate_reg where v_id='$uid' and email='$email'";
$r=Blogic::execute_query($select);
if(mysql_affected_rows()>0)
{if($row=mysql_fetch_row($r))
  { 
   echo "<center><font color='green'> Your Login password is ".$row[1]."</font></center>";
    
}}
else
{
    echo"<center><font color='red'>please enter correct Voterid or email</center></font>";
}
}
if(isset($_REQUEST['sub2']))
{ header("location:candidatelogin.php");
}

?>