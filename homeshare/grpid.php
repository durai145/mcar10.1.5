<?php

ob_start(); 

include('config.php');

#echo "TEST";
// table nam
$seqname=$_POST['seqname']; 
$seqname="GROUPID";
$myusername = stripslashes($seqname);
$myusername = mysql_real_escape_string($myusername);
$sql="select getNextSeq('". $seqname . "') " . $seqname  . " from dual";
$result=mysql_query($sql);

// Mysql_num_row is counting table row

// If result matched $myusername and $mypassword, table row must be 1 row

//echo  mysql_num_fields($result);

$colmn = mysql_fetch_row($result);
echo $colmn[0];	

// Register $myusername, $mypassword and redirect to file "login_success.php"
if(isset($_SESSION[$myusername]))
  unset($_SESSION['views']);

?>
