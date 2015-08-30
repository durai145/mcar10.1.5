<?php

ob_start(); 

include('config.php');

//echo "TEST";
// table nam
$usrid=$_SESSION['UserId']; 
$pagekey=$_SESSION['PAGEGRPKEY']; 
//echo "$usrid";
//$usrid="41";
//$sql="select f_name First_Name, l_name  Last_Name,  i.email_id Email , round(i.cur_bal,2) Current_Balance,i.Food_type Account_Type from GID001TB i, GRP001TB g where g.grp_id  = i.grp_id and  i.grp_id in (  select si.grp_id from GID001TB si  where si.usr_id = " . $usrid ." )";

$sql="select distinct pggr.page_grp_key,
        pgdt.page_key,
        pgdt.page_name,
        pgra.PRIVELEGE,
	pgdt.disp_order
from
MEMA001MB mema,
PGDT006MB pgdt,
PGRA004MB pgra,
ROLA002MB rola,
PGGR005MB pggr
where mema.ROLE_ID    = pgra.ROLE_ID
and pgra.PAGE_ID      = pgdt.PAGE_ID
and rola.role_id      = mema.role_id
and pggr.PAGE_GRP_ID  = pgdt.PAGE_GRP_ID
and mema.MEMBER_ACCESS!= 'B'
and rola.ROLE_ACCESS!= 'B'
and disp_order=1
and mema.usr_id= " . $usrid ." ";

//echo $sql;

$result=mysql_query($sql);

// Mysql_num_row is counting table row

// If result matched $myusername and $mypassword, table row must be 1 row

//echo  mysql_num_fields($result);
//echo "<table  class='ui-widget ui-widget-content'>\n<tr>";
echo " <div class=\"apex_grid_container clearfix\">";
echo " <div class=\"apex_cols apex_span_12\">";
echo " <ul class=\"uMainNav\">";

$page_grp_key="";
$page_key="";
$page_name="";
$PRIVELEGE="";

//for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
//{ 

$sno=1;
while ($row = mysql_fetch_row($result)) 
{ //Table body

	$sno = $sno + 1;
for ($f=0; $f < count($row); $f++) {

	if ( $f == 0 )
	$page_grp_key= $row[$f];
	else if ( $f == 1 )
	$page_key= $row[$f];
	else if ( $f == 2 )
	$page_name= $row[$f];

}
if ( $pagekey  ==   $page_grp_key )
{
echo "<li><a href=\"" . $page_name . "\" class=\"active\" > " . $page_grp_key . "</a> </li>"  ;
}
else
{
echo "<li><a href=\"" . $page_name . "\" > " . $page_grp_key . "</a> </li>"  ;
}
}


echo "</ul>";
echo "</div>";
echo "</div>";


// Register $myusername, $mypassword and redirect to file "login_success.php"



?>
