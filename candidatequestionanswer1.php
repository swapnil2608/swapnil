<h2 align="center">Question/Answers</h2><br /><br />
<?php
session_start();
if(isset($_SESSION['uname']))
{ require_once('bll.php');
    $name=$_SESSION['uname'];
    $vid=$_REQUEST['id'];
    
    $select="select * from candidate_reg where c_username='$name'";
    
  $rs=Blogic::execute_query($select);
  if($row=mysql_fetch_array($rs))
  {
    $r=$row[0];
  }  
  $select1="select * from questionask where C_id=$r and v_id='$vid'";
  
  $rs1=Blogic::execute_query($select1);
  if(mysql_affected_rows()>0){
  ?>
 <center>  <form method="post">
 
  <?php
if($row1=mysql_fetch_array($rs1))
  
   {?>
    
  <textarea rows="30" cols="50" name="q" ><?php  echo $row1[3]; ?></textarea><br />
    <input  type="submit" name="sub" value="Answer"/>
    
    <?php
 } if(isset($_REQUEST['sub']))
  
  {$e=1;
    $r1=$_REQUEST['q'];
    $select="update questionask set question='$r1' , flaga=1 where C_id=$r and v_id='$vid'";
   
    if(Blogic::execute_query($select))
    {
        echo "<center><font color='green'>Answered is sent</center></font>";
    }
  }
  
  
  
  
  echo"</form>";
 
}
else
echo "<center><font color='green'>No question is asked</font></center>";
}
else
{
   header("location:candidatelogin.php"); 
}
?>
<center><a href="candidatequestionanswer.php">Go Back</a></center>