<?php

ob_start(); 

include('config.php');

#echo "TEST";
// table nam
$usrid=$_POST['seqname']; 
$usrid=1;
$myusername = stripslashes($usrid);
$myusername = mysql_real_escape_string($myusername);
$sql="select f_name, l_name , g.grp_id , i.usr_id , i.cur_bal,i.Food_type from gid001tb i, grp001tb g where g.grp_id  = i.grp_id and  i.grp_id in (  select si.grp_id from gid001tb si  where si.usr_id = " . $usrid ." )";

echo $sql;
$result=mysql_query($sql);

function mysql_fetch_all($res) {
   while($row=mysql_fetch_array($res)) {
       $return[] = $row;
   }
   return $return;
}

function create_table($dataArr) {
    echo "<tr>";
    for($j = 0; $j < count($dataArr); $j++) {
        echo "<td>".$dataArr[$j]."</td>";
    }
    echo "</tr>";
}

$all = mysql_fetch_all($result);

echo "<table class='data_table'>";

for($i = 0; $i < count($all); $i++) {
    create_table($all[$i]);
}

echo "</table>";




// Register $myusername, $mypassword and redirect to file "login_success.php"
if(isset($_SESSION[$myusername]))
  unset($_SESSION['views']);

?>
