<?php
 
main();
 
function main() {

date_default_timezone_set('UTC');
$date = new DateTime();

$data = "";
access_file("hit_count.txt", $data);

$data=trim($data);
 
for ($n = 0; $n < strlen($data); $n++) {
$count[$n] = substr($data, $n, 1);
}
 
for ($n = 0; $n < 4 - strlen($data); $n++) {
echo "<img width=20px hight=20px src=\"../img/0tile.png\" alt=\"0\">";
}
 
for ($n = 0; $n < strlen($data); $n++) {
switch ($count[$n]) {
case 0:
$insert = "0";
break;
case 1:
$insert = "1";
break;
case 2:
$insert = "2";
break;
case 3:
$insert = "3";
break;
case 4:
$insert = "4";
break;
case 5:
$insert = "5";
break;
case 6:
$insert = "6";
break;
case 7:
$insert = "7";
break;
case 8:
$insert = "8";
break;
case 9:
$insert = "9";
break;
default:
$insert = "0";
}
echo "<img width=20px hight=20px src=\"../img/" . $insert . "tile.png\" alt=\"$insert\">";

 
}


if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Gecko') )
{
   if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape') )
   {
     $browser = 'Netscape (Gecko/Netscape)';
   }
   else if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') )
   {
     $browser = 'Mozilla Firefox (Gecko/Firefox)';
   }
   else
   {
     $browser = 'Mozilla (Gecko/Mozilla)';
   }
}
else if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') )
{
   if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') )
   {
     $browser = 'Opera (MSIE/Opera/Compatible)';
   }
   else
   {
     $browser = 'Internet Explorer (MSIE/Compatible)';
   }
}
else
{
   $browser = 'Others browsers';
}

$nameLangName="ENG";
if(  $_POST['nameLangName']  == ""  )
{
if(  $_GET['lang'] == ""  )
{
		$nameLangName="";
}
else
{
		$nameLangName=$_GET['lang'] ;
}
}
else
{
		$nameLangName= $_POST['nameLangName']   ;
}

if ( $nameLangName == ""  )
{
	$nameLangName="ENG";

}



if ($_SERVER['HTTP_X_FORWARD_FOR']) {
$ip = $_SERVER['HTTP_X_FORWARD_FOR'];
} else {
$ip = $_SERVER['REMOTE_ADDR'];
}
 

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);


//time()  getTimestamp()	
//$log= "\n" . $date->get() ."|" . $data .  "|". $nameLangName ."|" . $ip . "|" . $hostname . "|" . $_SERVER['HTTP_USER_AGENT'];
$log= "\n"  . date(DATE_ATOM) ."|" . $data .  "|". $nameLangName ."|" . $ip . "|" . $hostname . "|" . $_SERVER['HTTP_USER_AGENT'];
write_file("hit_count_dtl.log", $log );

}

function access_file ($filename, &$data) {
$file1 = fopen($filename, "r+") or die ("Unable to open file $filename for read / write.");
$data = fread($file1, filesize($filename));
$new_data = $data + 1;
fseek($file1, 0, SEEK_SET);
fwrite($file1, $new_data);
fclose($file1);
}
function write_file ($filename, &$data) {
$file1 = fopen($filename, "a+") or die ("Unable to open file $filename for read / write.");
$new_data = $data;
fwrite($file1, $new_data);
fclose($file1);
}
 
 
?>

