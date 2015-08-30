<?php

ob_start(); 

include('config.php');

#echo "TEST";
// table nam
$usrid=$_POST['USRID']; 
//echo "$usrid";
//$usrid="1";
$myusername = stripslashes($usrid);
$myusername = mysql_real_escape_string($myusername);
$sql="select f_name First_Name, l_name  Last_Name,  i.email_id Email , round(i.cur_bal,2) Current_Balance,i.Food_type Account_Type from GID001TB i, GRP001TB g where g.grp_id  = i.grp_id and  i.grp_id in (  select si.grp_id from GID001TB si  where si.usr_id = " . $usrid ." )";
$result=mysql_query($sql);

// Mysql_num_row is counting table row

// If result matched $myusername and $mypassword, table row must be 1 row

//echo  mysql_num_fields($result);
//echo "<table  class='ui-widget ui-widget-content'>\n<tr>";
echo "<table>\n<tr>";
for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
{ 

print "<th class='ui-widget-header'>". str_replace('_', ' ',mysql_field_name($result, $i) ) . "</th>"; }
echo "</tr>\n";
$sno=1;
while ($row = mysql_fetch_row($result)) 
{ //Table body
	if( $sno % 2 == 1 )
	echo "<tr>";
	else
	echo "<tr bgcolor='#E0E0E0'>";    

	$sno = $sno + 1;
for ($f=0; $f < count($row); $f++) {
    echo "<td>$row[$f]</td>"; }
echo "</tr>\n";}
echo "</table><p>";




// Register $myusername, $mypassword and redirect to file "login_success.php"



?>
