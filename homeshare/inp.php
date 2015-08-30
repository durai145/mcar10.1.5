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
		<script language="javascript" src="javascript/keetham.js"> </script>
		<script language="javascript" src="../javascript/validate.js"> </script>
		<script language="javascript" src="javascript/map.js"> </script>
		<script language="javascript" src="javascript/cust.js"> </script>

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
<body  class="cbody" onload="javascript:onLoadPage();" onkeyup="javascript:onKeyUp(obj)">
	
<div class="demo">

<div class="ui-widget">
	<label for="tags"></label>
	<input id="tags" type=hidden />
</div>

</div><!-- End demo -->


<form name="form1" xmlname="homespace" method="POST">
<div class="cform">
 	<script language="javascript"	>
		
	var fld=new fieldClass();
	fld.name="sno"
	fld.label="S.No"
	fld.desc="N"
	fld.dataType="NUMBER"
	fld.parent="homespace"
	fld.xml="N"
	


	creatNewTbl();
	fnCreateCaption("Bill Details");
	createRow();
	fnCreateField(fld);
	createRow();


	fld.name="RefNo"
	fld.label="Ref No"
	fld.desc="N"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow()


	
	fld.name="descr"
	fld.label="Descr"
	fld.desc="N"
	fld.dataType="VARCHAR"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow()

	fld.name="spndAmt"
	fld.label="Spend Amount"
	fld.dataType="AMOUNT"

	fld.desc="N"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow()

	fld.name="shrCnt"
	fld.label="Share Count"
	fld.desc="N"
	fld.dataType="AMOUNT"

	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow()

	fld.name="shrAmt"
	fld.label="Share Amount"
	fld.desc="N"
	fld.dataType="AMOUNT"

	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow()

	fnCreateCaption("Contribution Details");
	createRow();

	fld.name="crbPer1"
	fld.label="Contrib Murali"
	fld.desc="N"
	fld.dataType="AMOUNT"
	fld.parent="homespace"
	fld.xml="N"



	fld.name="crbPer1"
	fld.label="Contrib Murali"
	fld.desc="N"
	fld.dataType="AMOUNT"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();

	fld.name="crbPer2"
	fld.label="Contrib Durai"
	fld.dataType="AMOUNT"
	fld.desc="N"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();



	fld.name="crbPer3"
	fld.label="Contrib Sridhar"
	fld.dataType="AMOUNT"
	fld.desc="N"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();


	fld.name="crbPer4"
	fld.label="Contrib Gomatesh"
	fld.desc="N"
	fld.dataType="AMOUNT"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);

	createRow();

	fld.name="crbPer5"
	fld.label="Contrib Palani"
	fld.desc="N"
	fld.dataType="AMOUNT"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();



//	endNewTbl();	
//	creatNewTbl();

	fnCreateCaption("Balance Details");
	createRow();

	fld.name="balPer1"
	fld.label="Murali"
	fld.desc="N"
	fld.dataType="AMOUNT"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();

	fld.name="balPer2"
	fld.label="Durai"
	fld.desc="N"
	fld.dataType="AMOUNT"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();



	fld.name="balPer3"
	fld.label="Sridhar"
	fld.desc="N"
	fld.dataType="AMOUNT"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();


	fld.name="balPer4"
	fld.label="Gomatesh"
	fld.desc="N"
	fld.dataType="AMOUNT"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();

	fld.name="balPer5"
	fld.label=" Palani"
	fld.desc="N"
	fld.dataType="AMOUNT"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();




	endNewTbl();	

	


	</script>

	<table>
		<tr>
			<td>	
				<center>
				<input type="button" class="button" task="validate" value="validate" onclick="javascript:onClick(this)" >
				<input type="button" class="button" task="submit" value="submit" onclick="javascript:onClick(this)" >
				</center>
			</td>
		</tr>
	</table>
</div>
</form>
</body>
</html>
