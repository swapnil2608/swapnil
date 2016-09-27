<?php
require('bll.php');
if(isset($_GET['i']))
{
    if((int)$_GET['i']>0)
    {
        $select2 ="select * from voter_reg where voterid=".$_GET['i'];
        $rs=Blogic::execute_query($select2);
       // echo $rs."<br>";
        if($row=mysql_fetch_array($rs,MYSQL_ASSOC))
{$mime=$row['v_phototype'];
header("content-type:$mime");
echo $row['v_photos'];
}}}
?> 