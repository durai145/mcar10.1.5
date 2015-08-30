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
<body  class="cbody" onload="javascript:onLoadPage();" >
	
<div class="demo">

<div class="ui-widget">
	<label for="tags"></label>
	<input id="tags" type=hidden />
</div>

</div><!-- End demo -->

<script>

var glSno    ="<?php echo $_POST['homeverify_Sno'    ] ?>"; 
var glRefNo  ="<?php echo $_POST['homeverify_RefNo'  ] ?>";
var glDescr  ="<?php echo $_POST['homeverify_Descr'  ] ?>";
var glSpndAmt="<?php echo $_POST['homeverify_SpndAmt'] ?>";
var glShrCnt ="<?php echo $_POST['homeverify_ShrCnt' ] ?>";
var glShrAmt ="<?php echo $_POST['homeverify_ShrAmt' ] ?>";
var glCrbPer1="<?php echo $_POST['homeverify_CrbPer1'] ?>";
var glCrbPer1="<?php echo $_POST['homeverify_CrbPer1'] ?>";
var glCrbPer2="<?php echo $_POST['homeverify_CrbPer2'] ?>";
var glCrbPer3="<?php echo $_POST['homeverify_CrbPer3'] ?>";
var glCrbPer4="<?php echo $_POST['homeverify_CrbPer4'] ?>";
var glCrbPer5="<?php echo $_POST['homeverify_CrbPer5'] ?>";
var glCrbPer1Flg="<?php echo $_POST['homespace_CrbPer1Flg'] ?>";
var glCrbPer2Flg="<?php echo $_POST['homespace_CrbPer2Flg'] ?>";
var glCrbPer3Flg="<?php echo $_POST['homespace_CrbPer3Flg'] ?>";
var glCrbPer4Flg="<?php echo $_POST['homespace_CrbPer4Flg'] ?>";
var glCrbPer5Flg="<?php echo $_POST['homespace_CrbPer5Flg'] ?>";
var glCrbTtl ="<?php echo $_POST['homeverify_CrbTtl' ] ?>";
var glBalPer1="<?php echo $_POST['homeverify_BalPer1'] ?>";
var glBalPer2="<?php echo $_POST['homeverify_BalPer2'] ?>";
var glBalPer3="<?php echo $_POST['homeverify_BalPer3'] ?>";
var glBalPer4="<?php echo $_POST['homeverify_BalPer4'] ?>";
var glBalPer5="<?php echo $_POST['homeverify_BalPer5'] ?>";
var glBalTtl ="<?php echo $_POST['homeverify_BalTtl' ] ?>";
var glrlt    ="<?php echo $_POST['homeverify_rlt'    ] ?>";
</script>


<form name="form1" xmlname="homespace" method="POST">
<div class="cform">
 	<script language="javascript"	>
		
	var fld=new fieldClass();
	fld.name="Sno"
	fld.label="S.No"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="Y";
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
	fld.dataType="VARCHAR"
	fld.desc="N"
	fld.mndf="N";
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
//	createRow()


	
	fld.name="Descr"
	fld.label="Descr"
	fld.desc="N"
	fld.mndf="Y";
	fld.dataType="VARCHAR"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow()

	fld.name="SpndAmt"
	fld.label="Spend Amount"
	fld.dataType="AMOUNT"

	fld.desc="N"
	fld.parent="homespace"
	fld.xml="N"
	fld.mndf="Y";

	fnCreateField(fld);
//	createRow()

	fld.name="ShrCnt"
	fld.label="Share Count"
	fld.mndf="N";
	fld.desc="N"
	fld.dataType="LABEL"

	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow()

	fld.name="ShrAmt"
	fld.label="Share Amount"
	fld.desc="N"
	fld.dataType="LABEL"

	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow()

	fnCreateCaption("Contribution Details");
	createRow();




	fld.name="CrbPer1"
	fld.label="Contrib Murali"
	fld.desc="N"
	fld.dflt="0"
	fld.dataType="AMOUNT"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	fld.name="CrbPer1Flg"
	fld.label="Is Murali  Contributor?"
	fld.desc="N"
	fld.mndf="Y";
	fld.dflt="Y"
	//fld.dflt="N"
	fld.listVal="||Y|Y-Contributer|N|N-Noncontributer"
	fld.dataType="LIST"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);

	createRow();

	fld.name="CrbPer2"
	fld.label="Contrib Durai"
	fld.dataType="AMOUNT"
	fld.dflt="0"
	fld.desc="N"
	fld.parent="homespace"
	fld.mndf="N";
	fld.xml="N"
	fnCreateField(fld);
	fld.name="CrbPer2Flg"
	fld.label="Is Durai Contributor?"
	fld.desc="N"
	fld.mndf="Y";
	fld.dflt="Y"
	fld.listVal="||Y|Y-Contributer|N|N-Noncontributer"
	fld.dataType="LIST"
	fld.parent="homespace"

	fnCreateField(fld);
	createRow();



	fld.name="CrbPer3"
	fld.label="Contrib Sridhar"
	fld.dataType="AMOUNT"
	fld.desc="N"
	fld.mndf="N";
	fld.dflt="0"
	fld.parent="homespace"
	fld.xml="N"
	fnCreateField(fld);
	fld.name="CrbPer3Flg"
	fld.label="Is Sridhar Contributor?"
	fld.desc="N"
	fld.mndf="Y";
	fld.dflt="Y"
	fld.listVal="||Y|Y-Contributer|N|N-Noncontributer"
	fld.dataType="LIST"
	fld.parent="homespace"

	fnCreateField(fld);
	createRow();


	fld.name="CrbPer4"
	fld.label="Contrib Gomatesh"
	fld.desc="N"
	fld.dflt="0"
	fld.dataType="AMOUNT"
	fld.mndf="N";
	fld.parent="homespace"
	fld.xml="N"
	fnCreateField(fld);
	fld.name="CrbPer4Flg"
	fld.label="Is Gomatesh Contributor"
	fld.desc="N"
	fld.mndf="Y";
	fld.dflt="Y"
	//fld.dflt="N"
	fld.listVal="||Y|Y-Contributer|N|N-Noncontributer"
	fld.dataType="LIST"
	fld.parent="homespace"

	fnCreateField(fld);

	createRow();

	fld.name="CrbPer5"
	fld.label="Contrib Palani"
	fld.desc="N"
	fld.dflt="0"
	fld.mndf="N";
	fld.dataType="AMOUNT"
	fld.parent="homespace"
	fld.xml="N"
	fnCreateField(fld);
	fld.name="CrbPer5Flg"
	fld.label="Is Palani Contributor"
	fld.desc="N"
	fld.mndf="Y";
	fld.dflt="Y"
	//fld.dflt="N"
	fld.listVal="||Y|Y-Contributer|N|N-Noncontributer"
	fld.dataType="LIST"
	fld.parent="homespace"

	fnCreateField(fld);
	createRow();

	createRow();

	fld.name="CrbTtl"
	fld.label="Total"
	fld.desc="N"
	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();



//	endNewTbl();	
//	creatNewTbl();

	fnCreateCaption("Balance Details");
	createRow();

	fld.name="BalPer1"
	fld.label="Murali"
	fld.desc="N"
	fld.dflt="0"
	fld.dataType="AMOUNT"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();

	fld.name="BalPer2"
	fld.label="Durai"
	fld.desc="N"
	fld.dataType="AMOUNT"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();



	fld.name="BalPer3"
	fld.label="Sridhar"
	fld.desc="N"
	fld.dataType="AMOUNT"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();


	fld.name="BalPer4"
	fld.label="Gomatesh"
	fld.desc="N"
	fld.dataType="AMOUNT"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();

	fld.name="BalPer5"
	fld.label=" Palani"
	fld.desc="N"
	fld.dataType="AMOUNT"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();

	fld.name="BalTtl"
	fld.label=" Total"
	fld.desc="N"
//	fld.dataType="AMOUNT"

	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();

	fld.name="BalDiff"
	fld.label="Difference"
	fld.desc="N"
//	fld.dataType="AMOUNT"

	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();



	fld.name="rlt"
	fld.label="rlt"
	fld.desc="N"
	fld.dataType="VARCHAR"
	fld.parent="homespace"
	fld.mndf="N";
	fld.xml="N"

	fnCreateField(fld);
	createRow();


	endNewTbl();	

	


	</script>

	<table>
		<tr>
			<td>	
				<center>
				<input type="button" class="button" parent="homespace"  task="VALIDATE" value="validate" onclick="javascript:onClick(this)" >
				<input type="button" class="button" parent="homespace"  task="SUBMIT"   value="submit"   onclick="javascript:onClick(this)" >
				</center>
			</td>
		</tr>
	</table>
</div>
</form>
</body>
</html>
