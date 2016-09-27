
    <h2 align="center">Question/Answers</h2><br />
	
	

<?php
session_start();
if(isset($_SESSION['uname1']))
{
    include_once('bll.php');
   $cid=$_REQUEST['cid']; 
   $name=$_SESSION['uname1'];
$r=1;
   $q1=0;
   $select="select * from voter_reg where v_username='$name'  ";
   $rs=Blogic::execute_query($select);
   if($row=mysql_fetch_array($rs))
   {
    $s=$row[0];
   }
   $select2="select * from questionask where v_id='$s' and C_id=$cid";
   
   $rs1=Blogic::execute_query($select2);
   
   if(@$row1=mysql_fetch_array($rs1))
   { 
  ?>
  <center>
    <form method="post">
    

<textarea rows="30" cols="50" name="q">
<?php

echo $row1[3];
?>


</textarea>    <br /><br />
    <input type="submit" name="sub" value="Ask" />
    
    </form>
  <?php
  if(isset($_REQUEST['sub']))
  
  {
    $q=$_REQUEST['q'];
    $select1="update questionask set question='$q' where v_id='$s' and C_id=$cid";
    
    if(Blogic::execute_query($select1))
    {
       echo "<center><font color='green'>Question has been sent to the candidate</center></font>";  
    }
  }}
  
  else
  {?>
  <center>
    <form method="post">
    

<textarea rows="30" cols="50" name="q">
</textarea>    <br /><br />
    <input type="submit" name="sub" value="Ask" />
    
    </form>
  </center>
  
  
  <?php
 
  if(isset($_REQUEST['sub']))
 {  $q=$_REQUEST['q'];
   $select1="insert into questionask values($cid,$s,NULL,'$q','$r','$q1')";
   if(Blogic::execute_query($select1))
   {
    echo "<center><font color='green'>Question has been sent to the candidate</center></font>";
   }}
}}
else
{
   header("location:voterlogin.php"); 
}

?>
<center><a href="voterviewcandidates.php">Go back</a></center>