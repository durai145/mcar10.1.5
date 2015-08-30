<?php

ob_start(); 

include('config.php');

#echo "TEST";
// table nam
$tbkttxnid=$_POST['TBKTTXNID']; 
//echo "$usrid";
//$usrid="1";
$myusername = stripslashes($usrid);
$myusername = mysql_real_escape_string($myusername);
$sql="select   F_name, t.TBKT_TXN_ID Txn_Ref_Num, gt.BILL_DT Bill_Date, gt.card_num Card_Number, descr Description, BILL_AMT Bill_Amount , case DR_CR_FLG When 'C' then tran_amt else '' end Credit , case DR_CR_FLG When 'D' then tran_amt else '' end Debit , round(( case DR_CR_FLG When 'C' then tran_amt else tran_amt* -1 end ),2) Trans_Amount      from TRN003MB t, GID001TB g , GTRN002MB gt where t.usr_id= g.usr_id and gt.GTXN_TXN_ID = t.TBKT_TXN_ID and TBKT_TXN_ID = " . $tbkttxnid;

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
while ($row = mysql_fetch_row($result)) 
{ //Table body
echo "<tr>";
    for ($f=0; $f < count($row); $f++) {
    echo "<td>$row[$f]</td>"; }
echo "</tr>\n";}
echo "</table><p>";




// Register $myusername, $mypassword and redirect to file "login_success.php"



?>
