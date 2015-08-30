<?php

ob_start(); 

include('config.php');

#echo "TEST";
// table nam
$usrid=$_POST['seqname']; 
$usrid="1";
$myusername = stripslashes($usrid);
$myusername = mysql_real_escape_string($myusername);
$sql="select f_name First_Name, l_name Last_Name, g.grp_id GroupNam, i.usr_id UserId , i.cur_bal Current_Balance,i.Food_type Acct_Type from gid001tb i, grp001tb g where g.grp_id  = i.grp_id and  i.grp_id in (  select si.grp_id from gid001tb si  where si.usr_id = " . $usrid ." )";
$result=mysql_query($sql);

// Mysql_num_row is counting table row

// If result matched $myusername and $mypassword, table row must be 1 row

//echo  mysql_num_fields($result);
echo "<table>\n<tr>";
for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
{ print "<th>" str_replace('_', ' ',mysql_field_name($result, $i) ) . "</th>"; }
echo "</tr>\n";
while ($row = mysql_fetch_row($result)) { //Table body
echo "<tr>";
    for ($f=0; $f < $fields; $f++) {
    echo "<td>$row[$f]</td>"; }
echo "</tr>\n";}
echo "</table><p>";




// Register $myusername, $mypassword and redirect to file "login_success.php"
if(isset($_SESSION[$myusername]))
  unset($_SESSION['views']);

?>
