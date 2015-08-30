<?php


include('config.php');

// table name 
$tbl_name="uss_identity";

$page="getStmtDesc.php";
// Random confirmation code 
$confirm_code=md5(uniqid(rand())); 

// values sent from form 
$groupid=$_POST['GROUPID'];
$USRID=$_POST['USRID'];


//echo  "groupid  =  [".$groupid ."]";
//echo  "USRID  =  [".$USRID ."]";
$result=false;


// Insert data into database 


/*[
function log($page,$err_code, $err_desc, $error_text)
{

//	$sql="INSERT INTO db_errors (paerror_page,error_text,err_code,err_desc) VALUES ('$page','".escape_data($error_text)."', '$err_code ', '$err_desc')" ; 
//	mysql_query($sql);

//	mysql_error();
	if (mysql_errno()) 
	{ 
		$error = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>When executing:<br>\n$sql\n<br>"; 
		echo $error;
	} 

return 0;

}

]*/

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

function getDesc($groupid)
{

//	echo "get Desc";

echo "";

$sql="select stmt_id , descr from STMT001MB where status = 'A' and GRP_ID= '$groupid' ";
$result=mysql_query($sql);

echo "<select datatype='LIST' name='homespace_StmtMonth' xmlname='StmtMonth' id='StmtMonth' xml='N' parent='homespace' class='ctext' value='C' mndf='Y' label='Statement' onchange='javascript:onChange(this);' onkeydown='javascript:onKeyDown(this);' onkeypress='javascript:onKeyPress(this);' onkeyup='javascript:onKeyUp(this);'>";
for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
{ 
// print "<option selected='' value='C'> C-Card</option><option value='O'> O-ONLINE</option>";

while ($row = mysql_fetch_row($result)) 
{ //Table body


echo "<option value='$row[0]' >$row[1] </option> ";

}


}
echo "</select>";
echo "</tdf>";
}



if ( $groupid   != ""  )
{


	$sql="SELECT COUNT(1) FROM STMT001MB WHERE  GRP_ID= '$groupid' and descr= upper(DATE_FORMAT(sysdate(),'%b_%Y'))";
	$count=getCount($sql,$page,"CAL getCount:G:001");

//	echo "count=[" . $count . "]";
	if ( $count == 0 )
	{

		
		$sql="INSERT INTO STMT001MB  (grp_id,stmt_id,descr, CREATED_DT, MAKER_ID , MODIFIED_DT, AUTH_ID  ,status)VALUES('$groupid',getNextSeq('STMTID')  ,upper(DATE_FORMAT(sysdate(),'%b_%Y')),  sysdate(), $USRID, sysdate(),$USRID,'A')";

	//	echo "sql =[ ". $sql . "]";
		if ( insertQry($sql,$page,"CAL insert:G:001") == 0 )
		{
			getDesc($groupid);
		}
		else
		{
			echo "Error :";

		}

	} 
	else if ( $count >  0 )
	{
		getDesc($groupid);	
	}
	else
	{

		echo "Error";

	// ---------------- SEND MAIL FORM ----------------
/*[
	// send e-mail to ...
	$to=$email;
	$subject="Your confirmation link here";
	// From
	$header="from: Heaerie Home Share <homeshare@heaerie.com>";
	// Your message
	$message="Your Comfirmation link \r\n";
	$message.="Dear ".$lname .", \r\n";
	$message.="Welcome To Heaerie Homeshare \r\n";
	$message.="Click on this link to activate your account \r\n";
	$message.="<a  herf='http://homespace.heaerie.com/mcar10.1.4/homeshare/confirmation.php?passkey=".$confirm_code."' >I Agreed Terms and Condition of Heaerie</a> \r\n";

	echo " mail : $message";
	// send email
	$sentmail = mail($to,$subject,$message,$header);
	if($sentmail){
	echo "Your Confirmation link Has Been Sent To Your Email Address.";
	}
	else {
	echo "Cannot send Confirmation link to your e-mail address";
	}
	// if your email succesfully sent

	]*/
	}


}
else {
echo "Requires Fieds are missing";
}
?>
