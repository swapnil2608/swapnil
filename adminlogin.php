<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Admin Login</h1>
			</div>

			<div class="login-form">
				<div class="control-group">
				<form method="post" ><input type="text" class="login-field" value="" placeholder="username"  name="name"/>
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="password"  name="pass"/>
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
              
               <div class="btn btn-primary btn-large btn-block"> <input type="submit" name="sub" value="Login" />
              </div><a class="login-link" href="forget.php">Lost your password?</a>
</body>

	<!---	<a class="btn" href="589.php">login</a>-->
			
			</div>
		</div>
	</div>	
    <?php


if(isset($_REQUEST['sub']))
{
include_once('bll.php');
$uname=$_REQUEST['name'];
$pass=$_REQUEST['pass'];
$select="select * from admin_reg1 where u_name='$uname' and u_pass='$pass'";
$r=Blogic::execute_query($select);

if(mysql_affected_rows()>0)
{
    if($row=mysql_fetch_row($r))
  { session_start();
  $_SESSION['uname2']=$row[0]; 

   header("location:adminhome.php");
    
}}
else
{
    
$select1="select * from admin_reg where username='$uname' and password=$pass";

$r1=Blogic::execute_query($select1);
if(mysql_affected_rows()>0)
{if($row1=mysql_fetch_row($r1))
  { session_start();
  $_SESSION['uname2']=$row1[10]; 

   header("location:adminhome1.php");
    
}}
else
{
    echo"<center><font color='red'>please enter correct username or password</center></font>";
}
}
}
?>


    
    
    
    
  </body>
</html>


