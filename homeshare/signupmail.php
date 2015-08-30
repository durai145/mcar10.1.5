<?php


include('config.php');

// table name 
$tbl_name="uss_identity";

$page="signupmail.php";
// Random confirmation code 
$confirm_code=md5(uniqid(rand())); 

// values sent from form 
$groupid=$_POST['groupid'];
$groupname=$_POST['groupname'];
$lname=$_POST['lname'];
$fname=$_POST['fname'];
$email=$_POST['email'];
$password=$_POST['password'];
$result=false;

/*[
//$country=$_POST['country'];
$groupid="999";
$groupname='groupname';
$lname="last";
$fname="first";
$email="durai145@live.in";
$country="india";

]*/

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

*/

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

function sendMail($to)
{

	echo "Send mail to ". $to;

/*[
	$subject="Your confirmation link here";
	// From
	$header="from: Heaerie Home Share <homeshare@heaerie.com>";
	// Your message
	$message="Your Comfirmation link \r\n";
	$message.="Dear ".$lname .", \r\n";
	$message.="Welcome To Heaerie Homeshare \r\n";
	$message.="Click on this link to activate your account \r\n";
//	$message.="<a  herf='http://homespace.heaerie.com/mcar10.1.4/homeshare/confirmation.php?passkey=".$confirm_code."' >I Agreed Terms and Condition of Heaerie</a> \r\n";
//	$message.="http://homespace.heaerie.com/mcar10.1.4/homeshare/confirmation.php?passkey=".$confirm_code."\r\n";

//	echo " mail : $message";
	// send email
	echo "A:001";
	$sentmail = mail($to,$subject,$message,$header);
	if($sentmail){
	echo "Your Confirmation link Has Been Sent To Your Email Address. <$to> $sentmail";
	}
	else {
	echo "Cannot send Confirmation link to your e-mail address $sentmail ";
	}
]*/


// Your subject
$subject="Your confirmation link here";

// From
$header="from: Heaerie Home Share <homeshare@heaerie.com>";

// Your message
$message="Your Comfirmation link \r\n";
$message.="Dear Test, \r\n";
$message.="Welcome To Heaerie Homeshare \r\n";
$message.="Click on this link to activate your account \r\n";
//$message.="http://homespace.heaerie.com/mcar10.1.4/homeshare/confirmation.php?passkey=".$confirm_code."\r\n";

// send email
$sentmail = mail($to,$subject,$message,$header);
if ( $sentmail == 1 )
{
	echo "Success";
}
else
{
	echo "Failure" . $sentmail ;
}


return 0;

}


if ( $lname != "" || $fname != "" || $email != "" || $password != ""  )
{


	$sql="SELECT COUNT(1) FROM GRP001TB WHERE  GRP_ID= '$groupid'";
	$count=getCount($sql,$page,"CAL getCount:G:001");
	if ( $count == 0 )
	{

		$sql="INSERT INTO GRP001TB (grp_id,grp_name,dt_created,dt_modified,mkr_id,ath_id,status)VALUES('$groupid', '$groupname',  sysdate(),sysdate(),1,1,'PENDING')";
		if ( insertQry($sql,$page,"CAL getCount:G:001") == 0 )
		{

			$sql="INSERT INTO GID001TB (grp_id,usr_id,OTPE, f_name,l_name, email_id, password ,dt_created,dt_modified,mkr_id,ath_id,status)VALUES('$groupid',getNextSeq('USRID') ,'$confirm_code', '$lname', '$fname','$email', '$password', sysdate(),sysdate(),1,1,'PENDING')";
			if(insertQry($sql,$page,"CAL getCount:G:002") == 0 )
			{
				sendMail($email);
			}
		}
		else
		{
			echo "Error :";

		}

	} 
	else if ( $count >  0 )
	{
			$sql="INSERT INTO GID001TB (grp_id,usr_id,OTPE, f_name,l_name, email_id, password ,dt_created,dt_modified,mkr_id,ath_id,status)VALUES('$groupid',getNextSeq('USRID') ,'$confirm_code', '$lname', '$fname','$email', '$password', sysdate(),sysdate(),1,1,'PENDING')";
			if(insertQry($sql,$page,"CAL getCount:H:001") == 0 )
			{
				sendMail($email);
			}
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
