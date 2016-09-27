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
				<h1> Voter Login</h1>
			</div>

			<div class="login-form">
				<div class="control-group">
                <form method="post">
				<input type="text" class="login-field" value="" placeholder="username" name="v_username"/>
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="password" name="v_pass"/>
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
                <div class="btn btn-primary btn-large btn-block"> <input type="submit" name="sub" value="Login" />
                </form></div>
                	<a class="login-link" href="forgetv.php">Lost your password?</a>
                </div>
			<!---	<a class="btn btn-primary btn-large btn-block" href="#">login</a>-->
			
			</div>
		</div>
	</div>
</body>
    
    
    
    
    
  </body>
</html>
  <?php
if(isset($_REQUEST['sub']))
{
include_once('bll.php');
$uname=$_REQUEST['v_username'];
$pass=$_REQUEST['v_pass'];
$select="select * from voter_reg where v_username='$uname' and v_pass='$pass'";
$r=Blogic::execute_query($select);
if(mysql_affected_rows()>0)
{if($row=mysql_fetch_row($r))
  { session_start();
  $_SESSION['uname1']=$row[12]; 
    header("location:voterhome.php");
    
}} 
else
{
    echo"<center><font color='red'>please enter correct username or password</center></font>";
}
}
?>