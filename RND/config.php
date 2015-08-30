<?php

//$host="mysql221.cp.365techsupport.com"; // Host name 
$host="localhost"; // Host name 
$username="u1021977_admin"; // Mysql username 
$password="india"; // Mysql password 
$db_name="db1021977_dev"; // Database name 

//$host="mysql221.cp.365techsupport.com"; // Host name UAT
//$host="localhost"; // Host name 
//$username="u1021977_ussuat"; // Mysql username 
//$password="india"; // Mysql password 
//$db_name="db1021977_uat"; // Database name 


//Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect to server" . mysql_error()
); 
mysql_select_db("$db_name")or die("cannot select DB");

?>

