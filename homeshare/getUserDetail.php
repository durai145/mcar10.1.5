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
$sql="select f_name FirstName, l_name LastName, i.email_id email, i.status,i.Food_type from GID001TB i, GRP001TB g where g.grp_id  = i.grp_id and  i.usr_id = " . $usrid ." ";
#$sql="select t.TBKT_TXN_ID, gt.BILL_REF , (  case DR_CR_FLG  When  'C' then   tran_amt  else   tran_amt* -1 end  ) tran_amt from TRN003MB  t, gid001tb g , gtrn002mb  gt where t.usr_id= g.usr_id  and gt.GTXN_TXN_ID = t.TBKT_TXN_ID";
$result=mysql_query($sql);

// Mysql_num_row is counting table row

// If result matched $myusername and $mypassword, table row must be 1 row

//echo  mysql_num_fields($result);
echo "<table>\n<tr>";
for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
{ 

print "<th>".mysql_field_name($result, $i)."</th>"; }
echo "</tr>\n";
while ($row = mysql_fetch_row($result)) 
{ //Table body
echo "<tr>";
    for ($f=0; $f < count($row); $f++) {
    echo "<td>$row[$f]</td>"; }
echo "</tr>\n";}
echo "</table><p>";




// Register $myusername, $mypassword and redirect to file "login_success.php"
if(isset($_SESSION[$myusername]))
  unset($_SESSION['views']);



?>
