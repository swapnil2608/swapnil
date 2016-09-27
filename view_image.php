<?php
require('bll.php');
if(isset($_GET['i']))
{
    if((int)$_GET['i']>0)
    {
        $select2 ="select * from candidate_reg where C_id=".$_GET['i'];
        $rs=Blogic::execute_query($select2);
       // echo $rs."<br>";
        if($row=mysql_fetch_array($rs,MYSQL_ASSOC))
{$mime=$row['photo_type'];
header("content-type:$mime");
echo $row['photo'];
}}}
?> 