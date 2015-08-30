<?php

ob_start(); 

include('config.php');

#echo "TEST";
// table nam

function getCount($sql,$page,$err_desc)
{

	$result=mysql_query($sql);
	if (mysql_errno()) 
	{ 

		$error_text = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>When executing:<br>\n$sql\n<br>"; 
		echo $error_text;
	//	log($page,1, $err_desc, $error_text);

		return -1;
	} 
	else
	{

	$row = mysql_fetch_row($result);
	$record=count($row);
	//echo "Record:$record  $row[0]\n";
	$count=$row[0];


	}




return $count;
}



function insertQry($sql,$page,$err_desc)
{

	echo "insertQry<" . $sql  . ">";
	$rtCount=0;
	
	$result=mysql_query($sql);
	if (mysql_errno()) 
	{ 

		$error_text = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>When executing:<br>\n$sql\n<br>"; 
		echo $error_text;
	//	log($page,1, $err_desc, $error_text);

		return -1;
	} 
	else
	{

	//$row = mysql_fetch_row($result);
	//$record=count($row);
	//echo "Record:$record  $row[0]\n";
	//$count=$row[0];
	$rtCount=0;

	}




return 0;

}


?>
