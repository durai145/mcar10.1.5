<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="Free carnatic class" />
<meta name="keywords" content="music, baisc practices,Tamil Isai,Samanmandilam, Sarali, jandavarisai,thattu, vakkra, melakartha, heaerie,carnatic,ragam" />
<meta name="author" content="duraimurugan g" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

	<title>Heaerie-Carnatic</title>

		<link rel="stylesheet" href="../css/main.1.css">
		<LINK title=heaerie  href="../css/content.css" type=text/css rel="STYLESHEET" >
		<LINK title=heaerie  href="../css/content-fonts.css" type=text/css rel="STYLESHEET" >
		<LINK title=heaerie  href="../css/content-ie6.css" type=text/css rel="STYLESHEET" >
		<LINK href="css/pro.css" type="text/css" rel=stylesheet>
		<LINK title=heaerie href="../css/services.css" type=text/css rel="STYLESHEET" >
		<link rel="stylesheet" href="../css/theme/jquery.ui.all.css">

		<?php
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


		?>
		<script language="javascript" src="../javascript/<?php echo $nameLangName ?>/Resource.js"> </script>
		<script>
				var docSource="";
		</script>  
		<script language="javascript" src="../javascript/field_02.js"> </script>
		<script language="javascript" src="../javascript/field_03.js"> </script>
		<script language="javascript" src="../javascript/dates.js"> </script>
		<script language="javascript" src="../javascript/xml.js"> </script>
		<script language="javascript" src="javascript/sarali.js"> </script>
		<link rel="stylesheet" href="../javascript/themes/base/jquery.ui.all.css">
	<script src="../javascript/jquery-1.7.2.js"></script>
	<script src="../javascript/ui/jquery.ui.core.js"></script>
	<script src="../javascript/ui/jquery.ui.widget.js"></script>
	<script src="../javascript/ui/jquery.ui.position.js"></script>
	<script src="../javascript/ui/jquery.ui.autocomplete.js"></script>
	<script src="../javascript/ui/jquery.ui.tabs.js"></script>

	<link rel="stylesheet" href="../css/demos.css">
	<script>
	var lang="<?php echo $nameLangName ?>";
	langGet="<?php echo $_GET['nameLangName'] ?>";

	$(function() {
		var availableTags = [
HMELCARNAME00,
HMELCARNAME01,
HMELCARNAME02,
HMELCARNAME03,
HMELCARNAME04,
HMELCARNAME05,
HMELCARNAME06,
HMELCARNAME07,
HMELCARNAME08,
HMELCARNAME09,
HMELCARNAME10,
HMELCARNAME11,
HMELCARNAME12,
HMELCARNAME13,
HMELCARNAME14,
HMELCARNAME15,
HMELCARNAME16,
HMELCARNAME17,
HMELCARNAME18,
HMELCARNAME19,
HMELCARNAME20,
HMELCARNAME21,
HMELCARNAME22,
HMELCARNAME23,
HMELCARNAME24,
HMELCARNAME25,
HMELCARNAME26,
HMELCARNAME27,
HMELCARNAME28,
HMELCARNAME29,
HMELCARNAME30,
HMELCARNAME31,
HMELCARNAME32,
HMELCARNAME33,
HMELCARNAME34,
HMELCARNAME35,
HMELCARNAME36,
HMELCARNAME37,
HMELCARNAME38,
HMELCARNAME39,
HMELCARNAME40,
HMELCARNAME41,
HMELCARNAME42,
HMELCARNAME43,
HMELCARNAME44,
HMELCARNAME45,
HMELCARNAME46,
HMELCARNAME47,
HMELCARNAME48,
HMELCARNAME49,
HMELCARNAME50,
HMELCARNAME51,
HMELCARNAME52,
HMELCARNAME53,
HMELCARNAME54,
HMELCARNAME55,
HMELCARNAME56,
HMELCARNAME57,
HMELCARNAME58,
HMELCARNAME59,
HMELCARNAME60,
HMELCARNAME61,
HMELCARNAME62,
HMELCARNAME63,
HMELCARNAME64,
HMELCARNAME65,
HMELCARNAME66,
HMELCARNAME67,
HMELCARNAME68,
HMELCARNAME69,
HMELCARNAME70,
HMELCARNAME71,
HMELCARNAME72
		];
		$( "#tags" ).autocomplete({
			source: availableTags
		});
	});

$(function() {
		$( "#tabs" ).tabs({
			event: "mouseover"
		});
	});

	</script>
</head>
<body  class="cbody" onload="javascript:onLoadPage();" >
	
<div class="demo">

<div class="ui-widget">
	<label for="tags"></label>
	<input id="tags" type=hidden />
</div>

</div><!-- End demo -->

<script>

</script>

<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td><form name="form1" method="post" action="signup_ac.php">
<table width="100%" border="0" cellspacing="4" cellpadding="0">
<tr>
<td colspan="3"><strong>Sign up</strong></td>
</tr>
<tr>
<td width="76">Name</td>
<td width="3">:</td>
<td width="305"><input name="name" type="text" id="name" size="30"></td>
</tr>
<tr>
<td>E-mail</td>
<td>:</td>
<td><input name="email" type="text" id="email" size="30"></td>
</tr>
<tr>
<td>password</td>
<td>:</td>
<td><input name="password" type="password" id="password" size="30"></td>
</tr>
<tr>
<td>Country</td>
<td>:</td>
<td><input name="country" type="text" id="country" size="30"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit"> &nbsp;
<input type="reset" name="Reset" value="Reset"></td>
</tr>
</table>
</form></td>
</tr>
</table>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="checklogin.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Member Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>



	
	
</div>
</form>
</body>
</html>
