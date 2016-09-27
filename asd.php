<?php
include_once('bll.php');
$select="select * from candidate_reg";
$rs=Blogic::execute_query($select);
if($row=mysql_fetch_array($rs))
{
    echo "<br>".$row[0]."<br>".$row[15];
}


?>