<?php

ob_start(); 
session_start();
include('config.php');

#echo "TEST";
// table nam
$emailid=$_POST['myusername']; 
$password=$_POST['mypassword']; 
//echo "$usrid";
//$emailid="durai145@gmail.com";
//$password="@india123"; 
$emailid = stripslashes($emailid);
$emailid = mysql_real_escape_string($emailid);
$sql="select  g.grp_id GroupId, i.usr_id UserId , grp_name GroupName ,i.Food_type FoodType, CONCAT(ucfirst(i.f_name) ,' ',ucfirst(i.l_name))   myusername, g.grp_name GroupName                                     from GID001TB i, GRP001TB g where g.grp_id  = i.grp_id and  i.email_id ='$emailid' and i.password ='$password'";

$result=mysql_query($sql);

$record="0";


$row = mysql_fetch_row($result);

 $record=count($row);


//echo "Recod = {$record}";
if ( $record != 6 )
{
// Register $myusername, $mypassword and redirect to file "login_success.php"
echo "Worng Password";
	header("location:index.php");

	if(isset($_SESSION[$myusername]))
	  unset($_SESSION['views']);
}
else
{
	for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
	{ 
	 echo "_SESSION[ " . mysql_field_name($result, $i) . "] =" .$row[$i] . "\n " ;
	 $_SESSION[ mysql_field_name($result, $i) ] = $row[$i];
	}
	echo "Success";
	header("location:home.php");


}
?>
