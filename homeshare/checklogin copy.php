<?php

ob_start(); 

include('config.php');

function getGrpID($dataArr1) 
{
echo "$dataArr1[1];\n";
}
function getUsrID($dataArr1) 
{
echo "$dataArr1[0];\n";
}
function mysql_fetch_all($res) {
/*[
   while($row=mysql_fetch_array($res)) {
       $return[] = $row;
   }
   return $return;
]*/
}

// table nam
$tbl_name="GID001TB";
//$sql = 'SELECT * FROM members WHERE username=\'durai145@gmail.com\' and password=\'india\'';
// if suceesfully inserted data into database, send confirmation link to email 
// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

$myusername='durai145@gmail.com';
$mypassword='@india123';
// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE email_id='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{

$sql="SELECT usr_id, grp_id , grp_name FROM $tbl_name i , grp001tb g WHERE g.grp_id= i.grp_id and email_id='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$all = mysql_fetch_all($result);


for($i = 0; $i < count($all); $i++)
{
echo	getUsrID($all[$i]);
echo	getGrpID($all[$i]);
}


// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
header("location:hometran.php");
$_SESSION['emailid']=$myusername;







}
else {
echo "Wrong Username or Password";
if(isset($_SESSION[$myusername]))
  unset($_SESSION['views']);
}

?>
