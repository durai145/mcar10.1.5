<html>
<body>

<?php

phpinfo() ;

if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {


echo("<pre>\n");
print_r($_POST);
echo("</pre>\n");

  //send email
  $email = $_POST["email"] ;
  $subject = $_POST["subject"] ;
  $message = $_POST["message"] ;

echo "<br>email:[" . $email . "]" ;
echo "<br>subject:[" . $subject . "]" ;
echo "<br>msge: ". $message ;
$result=mail($email , $subject, $message, "From:" . $email); 

if (  $result == 0 )
{
	echo "Success\r\n";
}
else
{
	echo "<br>Failure <br>   [" . $result ."][" . error_get_last() ."]";
}
$error = error_get_last();
preg_match("/\d+/", $error["message"], $error);


	
  echo "Thank you for using our mail send to <" . $email . ">"; 
  }
else
//if "email" is not filled out, display the form
  {
  echo "<form method='post' action='smail.php'>
  Email: <input name='email' type='text'><br>
  Subject: <input name='subject' type='text'><br>
  Message:<br>
  <textarea name='message' rows='15' cols='40'>
  </textarea><br>
  <input type='submit'>
  </form>";
  }
?>

</body>
</html>

