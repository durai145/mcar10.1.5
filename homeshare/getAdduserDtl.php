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
$sql="select g.grp_id, grp_name Group_Name,   f_name First_Name , l_name Last_Name ,  i.email_id Email_Id, i.password Password, i.status, '' Action  from GID001TB i, GRP001TB g where g.grp_id  = i.grp_id and  i.grp_id in (  select si.grp_id from GID001TB si  where si.usr_id = " . $usrid ." )";
$result=mysql_query($sql);

// Mysql_num_row is counting table row

// If result matched $myusername and $mypassword, table row must be 1 row

//echo  mysql_num_fields($result);
//echo "<table  class='ui-widget ui-widget-content'>\n<tr>";

echo "<div id='users-contain' class='ui-widget'> <h1>Group Member</h1> ";
echo "<table id='users' class='ui-widget ui-widget-content'>";
/*[
echo "<thead>";
echo "<tr class='ui-widget-header '>";
echo "<th>Group Id</th>";
echo "<th>Group Name</th>";
echo "<th>Last Name</th>";
echo "<th>First Name</th>";
echo "<th>Email</th>";
echo "<th>Password</th>";
echo "<th>Remove</th>";
echo "<th>Activate</th>";
echo "</tr>";
echo "</thead>";
]*/
echo "<tbody>";


//echo "<table>\n<tr>";
for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
{ 

print "<th class='ui-widget-header' > ".  str_replace('_', ' ',mysql_field_name($result, $i) ) .    "</th>"; }
echo "</tr>\n";
while ($row = mysql_fetch_row($result)) 
{ //Table body
echo "<tr>";
    for ($f=0; $f < count($row); $f++) {
    echo "<td>$row[$f]</td>"; }
echo "</tr>\n";}
echo "</table><p>";
echo "</div>";




// Register $myusername, $mypassword and redirect to file "login_success.php"
if(isset($_SESSION[$myusername]))
  unset($_SESSION['views']);



?>
