<?php 
session_start();
if(isset($_SESSION['uname'])){
include_once('bll.php');
$select="select * from result";
$rs=Blogic::execute_query($select);
if($row=mysql_fetch_array($rs))
{
    if($row[0]==1)
    {


$select3="select * from candidate_reg";
    $rs3=Blogic::execute_query($select3);
    ?>
    <h3 align="center"><u>List of Candidates</u></h3><br /><br/>
    <table border="1px" align="center" cellspacing="" cellpadding="5px">
    <tr><th>Candidate id</th><th>Candidate name</th><th>Party</th><th>vote</th></tr>
    <?php
    while($row3=mysql_fetch_array($rs3))
    { 
        
                echo "<tr><td >$row3[0]</td><td >$row3[2]</td><td >$row3[10]</td><td >$row3[20]</td></tr>";
              
              
            }
    
    
    echo "</table>";}
    else
    {
        ?>
        <center><font color="red" align="center">Result not published!!!</font></center>
        
        
        <?php
    }
    
    }
    
    }
    else
    {
        
        header("location:candidatelogin.php");
    }
    
    
    ?>
    
    <center><a href="candidatehome.php">Go Back</a></center>