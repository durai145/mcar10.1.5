<?php
//username :u1021977_admin
//pwd: india
//database :db1021977_dev
//$con = mysql_connect("localhost","peter","abc123");
//$con = mysql_connect("10.97.0.86","u1021977_admin","india");
//$con = mysql_connect("10.97.0.105","u1021977_admin","india");
$con = mysql_connect("mysql221.cp.365techsupport.com","u1021977_admin","india");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("db1021977_dev", $con);


$result = mysql_query("SELECT * FROM home_transaction);

while($row = mysql_fetch_array($result))
  {
  echo $row['name'] . " " . $row['email'];
  echo "<br />";
  }


mysql_close($con);

// some code
?>

