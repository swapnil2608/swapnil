<?php
session_start();
if(isset($_SESSION['uname1']))
{ include_once('bll.php');
    $n=$_REQUEST['cid'];
    $select="select * from candidate_reg where C_id='$n'";
    $rs=Blogic::execute_query($select);
    if($row=mysql_fetch_array($rs))
    {
    ?>
    <table cellspacing=0 border="10" align="center" cellpadding="60px">    
   <?php
   
   
    echo "<tr><td >Photo</td><td><img src='view_image.php?i=$row[0]'width='150px' height='150px'</td></tr>";
    echo "<tr><td>Voterid</td><td>$row[18]</td></tr>";
    echo "<tr><td>Candidate id</td><td>$row[0]</td></tr>";
   echo "<tr><td>First name</td><td>$row[2]</td></tr>";
    echo "<tr><td>Last name</td><td>$row[3]</td></tr>";
     echo "<tr><td>Fathername name</td><td>$row[7]</td></tr>";
      echo "<tr><td>Date of Birth</td><td>$row[4]</td></tr>";
      echo "<tr><td>Party</td><td>$row[10]</td></tr>";
      echo "<tr><td>Party Type</td><td>$row[11]</td></tr>";
      echo "<tr><td>Election Reason</td><td>$row[19]</td></tr>";
       echo "<tr><td>Gender</td><td>$row[5]</td></tr>";
        echo "<tr><td>Address</td><td>$row[15]</td></tr>";
         echo "<tr><td>City</td><td>$row[9]</td></tr>";
          echo "<tr><td>State</td><td>$row[8]</td></tr>";
           echo "<tr><td>Pincode</td><td>$row[6]</td></tr>";
            echo "<tr><td>Contact</td><td>$row[16]</td></tr>";
             echo "<tr><td>Email</td><td>$row[14]</td></tr>";
              
   
   
    }?>
  </table>  
<?php }
else
{
   header("location:voterlogin.php"); 
}
?>
<a href="voterviewcandidates.php">Go Back</a>
