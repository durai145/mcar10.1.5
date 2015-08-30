<?php

ob_start(); 

include('config.php');

#echo "TEST";
// table nam
$usrid=$_SESSION['UserId']; 
//$usrid=21;

$glCurBal = " ";
$glLname = " ";

$myusername = stripslashes($usrid);
$myusername = mysql_real_escape_string($myusername);
$sql="select mid( f_name,1,6),  i.cur_bal from gid001tb i, grp001tb g where g.grp_id  = i.grp_id and  i.grp_id in (  select si.grp_id from gid001tb si  where si.usr_id = " . $usrid ." )";

//echo $sql;
$result=mysql_query($sql);
//var s1 = [100, 600, 700, 100];

function mysql_fetch_all($res) {
   while($row=mysql_fetch_array($res)) {
       $return[] = $row;
   }
   return $return;
}

function create_table($dataArr) {

 global  $glCurBal;
 global  $glLname;

   // echo "[";
    for($j = 0; $j < count($dataArr); $j++) {
      //  echo " ".$dataArr[$j].",";

	if ( $j == 0)
	$glLname= $glLname ."' ". $dataArr[$j] ."'";
	if ( $j == 1)
	$glCurBal= $glCurBal ." ". $dataArr[$j];
    }
  //  echo "]";
}

$all = mysql_fetch_all($result);

//echo "<table class='data_table'>";

$glCurBal= "[" . $glCurBal ;
$glLname= "[" . $glLname ;
for($i = 0; $i < count($all); $i++) {

	if ( $i > 0 )
	{
		$glCurBal=$glCurBal . "," ;	
		$glLname=$glLname . "," ;	
	}
    create_table($all[$i]);
}
$glCurBal=  $glCurBal ."]" ;
$glLname=  $glLname ."]" ;

//echo "</table>";


echo " var s1 = " . $glCurBal . ";\n";
echo " var ticks =" . $glLname . ";\n";


// Register $myusername, $mypassword and redirect to file "login_success.php"
if(isset($_SESSION[$myusername]))
  unset($_SESSION['views']);

?>

