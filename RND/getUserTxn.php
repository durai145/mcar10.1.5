<?php

ob_start(); 

include('config.php');

#echo "TEST";
// table nam
$usrid=$_POST['USRID']; 
$stmtid=$_POST['STMTID']; 
//echo "$usrid";
//$usrid="1";
$myusername = stripslashes($usrid);
$myusername = mysql_real_escape_string($myusername);
#$sql="select f_name, l_name , g.grp_id , i.usr_id , i.cur_bal,i.Food_type from gid001tb i, grp001tb g where g.grp_id  = i.grp_id and  i.grp_id in (  select si.grp_id from gid001tb si  where si.usr_id = " . $usrid ." )";

if ($stmtid != "" )
{
$sql="select t.TBKT_TXN_ID  Txn_Ref_Num, gt.BILL_DT Bill_Date, gt.card_num Card_Number, gt.descr Description, gt.BILL_REF Vendor ,  case DR_CR_FLG  When  'C' then   tran_amt  else   ''  end  Credit ,  case DR_CR_FLG  When  'D' then   tran_amt  else   ''  end Debit ,  round((  case DR_CR_FLG  When  'C' then   tran_amt  else   tran_amt* -1 end  ),2) Trans_Amount , round( (SELECT mon_bal FROM STMT002MB WHERE STMT_ID =st.stmt_id and USR_ID = t.usr_id) ,2) Cur_Bal from TRN003MB  t, GID001TB g , GTRN002MB  gt ,STMT001MB st where  st.stmt_id = gt.stmt_id and t.usr_id= g.usr_id  and gt.GTXN_TXN_ID = t.TBKT_TXN_ID  and t.usr_id=" . $usrid ."  and st.stmt_id= " . $stmtid  . " order by  t.TBKT_TXN_ID desc  ";
}
else
{
$sql="select t.TBKT_TXN_ID  Txn_Ref_Num, gt.BILL_DT Bill_Date, gt.card_num Card_Number, gt.descr Description, gt.BILL_REF Vendor ,  case DR_CR_FLG  When  'C' then   tran_amt  else   ''  end  Credit ,  case DR_CR_FLG  When  'D' then   tran_amt  else   ''  end Debit ,  round((  case DR_CR_FLG  When  'C' then   tran_amt  else   tran_amt* -1 end  ),2) Trans_Amount , round( cur_bal ,2) Cur_Bal from TRN003MB  t, GID001TB g , GTRN002MB  gt  where t.usr_id= g.usr_id  and gt.GTXN_TXN_ID = t.TBKT_TXN_ID  and t.usr_id=" . $usrid ." order by  t.TBKT_TXN_ID desc  ";
}

//echo $sql;
$result=mysql_query($sql);

// Mysql_num_row is counting table row

// If result matched $myusername and $mypassword, table row must be 1 row

//echo  mysql_num_fields($result);
$sum=0;
$cur=0;
$runBal=0;
$sno=0;
echo "<div bgcolor='#E0E0E0'>";
echo "<table>\n<tr>";
echo "<th  class='ui-widget-header'> S.No </td>";
for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
{ 
	if( $i != 8 &&  $i != 7 )
print "<th class='ui-widget-header'  >" .  str_replace('_', ' ',mysql_field_name($result, $i) ) . "</th>";

 }
//if( $stmtid == "" )
print "<th class='ui-widget-header'  > Balance</th>"; 
echo "</tr>\n";
while ($row = mysql_fetch_row($result)) 
{ //Table body

$sno=$sno +1;


	if( $sno % 2 == 1 )
	echo "<tr>";
	else
	echo "<tr bgcolor='#E0E0E0'>";
	
	echo "<td>"  . $sno  . "</td>";
	for ($f=0; $f < count($row); $f++) 
	{

		if( $f == 8 )
		$cur =   $row[$f];

		if( $f == 7 )
		$sum = $sum + $row[$f]  ;
	
		if( $f == 0 )
		 echo "<td> <a href='#' onclick='showTran($row[$f]);'> $row[$f] </a> </td>";

		   // echo "<td>$row[$f]</td>"; 
		if( $f != 8 &&  $f != 7  && $f !=0)
		    echo "<td>$row[$f]</td>"; 
	}
//	if( $stmtid == "" )
	{

	if( $sno == 1 )
	    echo "<td>$cur </td>"; 
	else
	{

	    echo "<td>" .  round( $runBal , 2) . "</td>"; 
	}
		$runBal=  $cur-$sum;

	}
	
echo "</tr>\n";}
echo "</table> </div><p>";




// Register $myusername, $mypassword and redirect to file "login_success.php"



?>
