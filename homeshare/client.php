<?php
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

if ($_SERVER['HTTP_X_FORWARD_FOR']) {
$ip = $_SERVER['HTTP_X_FORWARD_FOR'];
} else {
$ip = $_SERVER['REMOTE_ADDR'];
}

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);


echo  "|" $browser . "|"  . $ip . "|" .  $hostname;

?>
