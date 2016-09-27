
<?php
session_start();
if($_SESSION['uname1'])
{
include_once('bll.php');
$r=$_REQUEST['cid'];
$select="Select * from promise where C_id= ".$r;
$rs=Blogic::execute_query($select);
if(mysql_affected_rows())
{
if($row=mysql_fetch_array($rs))
{?>
   <center>
   <h2 align='center'>PROMISES</h2><br /><br />
   <textarea rows="30" cols="40"><?php echo $row[0]; ?></textarea>
   <br /><br />
   <a href="voterviewcandidates.php">GO BACK.....</a>
   </center>
   
   <?php
    
}}
else
{
  echo "<center><font color='red'>No promise yet updated by candidate!!!!</font.</center>";  
}
}
else
{
    header("location:voterlogin.php");
}







?>
