<?php


include('config.php');

// table name 
$tbl_name="uss_identity";

// Random confirmation code 
$confirm_code=md5(uniqid(rand())); 

// values sent from form 
$lname=$_POST['lname'];
$fname=$_POST['fname'];
$email=$_POST['email'];
$country=$_POST['country'];

// Insert data into database 

if ( $lname != "" || $fname != "" || $email != "" || $country != "" )
{
//$sql="INSERT INTO $tbl_name(confirm_code, name, email, password, country)VALUES('$confirm_code', '$lname', '$email', '$password', '$country')";
$sql="INSERT INTO GID001MB (OTPE, name, email, password, country)VALUES('$confirm_code', '$lname', '$email', '$password', '$country')";


$result=mysql_query($sql);


// if suceesfully inserted data into database, send confirmation link to email 
if($result){
// ---------------- SEND MAIL FORM ----------------

// send e-mail to ...
$to=$email;

// Your subject
$subject="Your confirmation link here";

// From
$header="from: Heaerie Home Share <homeshare@heaerie.com>";

// Your message
$message="Your Comfirmation link \r\n";
$message.="Dear ".$lname .", \r\n";
$message.="Welcome To Heaerie Homeshare \r\n";
$message.="Click on this link to activate your account \r\n";
$message.="http://homespace.heaerie.com/mcar10.1.4/homeshare/confirmation.php?passkey=".$confirm_code."\r\n";

// send email
$sentmail = mail($to,$subject,$message,$header);
}

// if not found 
else {
echo "Not found your email in our database";
}

// if your email succesfully sent
if($sentmail){
echo "Your Confirmation link Has Been Sent To Your Email Address.";
}
else {
echo "Cannot send Confirmation link to your e-mail address";
}

}
else {
echo "Requires Fieds are missing";
}
?>
