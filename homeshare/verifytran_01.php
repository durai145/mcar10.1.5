<!DOCTYPE html>
<?php
session_start();
if(!session_is_registered('myusername')){
header("location:index.php");
}
?>

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
		<script language="javascript" src="javascript/hometran_cust.js"> </script>

	<link rel="stylesheet" href="../javascript/themes/base/jquery.ui.all.css">
	<script src="../javascript/jquery-1.7.2.js"></script>
	<script src="../javascript/ui/jquery.ui.core.js"></script>
	<script src="../javascript/ui/jquery.ui.widget.js"></script>
	<script src="../javascript/ui/jquery.ui.position.js"></script>
	<script src="../javascript/ui/jquery.ui.autocomplete.js"></script>
	<script src="../javascript/ui/jquery.ui.tabs.js"></script>

	<link rel="stylesheet" href="../css/demos.css">
	<script>

	function onPostReq(url,json,id,type)
	{
	     var rtVal="";
             $.post( 
             url,
             json,
             function(data) 
		{
		if(type == 'DIV')
		$("#"+id).html(data);
		else if( type == 'OBJ')
		{
		document.getElementById(id).value= data;
		}

		}
          )
	}
	




	var lang="<?php echo $nameLangName ?>";
	langGet="<?php echo $_GET['nameLangName'] ?>";


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

var glGroupId    ="<?php echo $_SESSION['GroupId'] ?> "; 
var glUserId     ="<?php echo $_SESSION['UserId'] ?> "; 
var glEmailId    ="<?php echo $_SESSION['myusername'] ?> "; 
var glGroupName  ="<?php echo $_SESSION['GroupName'  ] ?> "; 
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
	creatNewTbl();
	fnCreateCaption("Login Details");
	fld.name="GroupId"
	fld.label="Group ID"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="N";
//	fld.dataType="NUMBER"
	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"
	createRow();
	fnCreateField(fld);


	fld.name="UserId"
	fld.label="UserId"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="N";
	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"
	fnCreateField(fld);
	createRow();

	fld.name="EmailId"
	fld.label="Login Id"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="Y";
	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"
	fnCreateField(fld);


	fld.name="GroupName"
	fld.label="Group Name"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="N";
	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"
//	createRow();
	fnCreateField(fld);

	createRow();

	fnCreateCaption("Bill Details");

	fld.name="Sno"
	fld.label="Txn. Ref. No"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="Y";
	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"
	createRow();
	fnCreateField(fld);

	fld.name="BillDate"
	fld.label="Date Of Purchase"
	fld.desc="Y"
	fld.group="homespace"
	fld.mndf="Y";
	fld.dataType="LABEL";
	fld.parent="homespace";
	fld.xml="N";
//	createRow();
	fnCreateField(fld);

	fld.name="PayMode"
	fld.label="Payment Mode"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="Y";
	fld.dflt="C";
	fld.dataType="LABEL";
	fld.listVal="||C|C-Card|O|O-ONLINE";
	fld.parent="homespace";
	fld.xml="N";
	createRow();
	fnCreateField(fld);

	fld.name="Vendor"
	fld.label="Vendor"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="Y";
	fld.dflt="";
	fld.dataType="LABEL";
//	fld.listVal="||C|C-Card|O|O-ONLINE";
	fld.parent="homespace";
	fld.xml="N";
//	createRow();
	fnCreateField(fld);

	fld.name="CardNum"
	fld.label="Card Last 4 digit /Ac. No"
	fld.desc="N"
	fld.group="homespace"
	fld.mndf="N";
	fld.dflt="";
	fld.dataType="LABEL";
//	fld.listVal="||C|C-Card|O|O-ONLINE";
	fld.parent="homespace";
	fld.xml="N";
	createRow();
	fnCreateField(fld);




	fld.name="RefNo"
	fld.label="Bank"
	fld.dataType="LABEL"
	fld.desc="N"
	fld.mndf="N";
	fld.parent="homespace"
	fld.xml="N"
//	createRow()
	fnCreateField(fld);


	
	fld.name="Descr"
	fld.label="Descr"
	fld.desc="N"
	fld.mndf="Y";
	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"
	createRow()
	fnCreateField(fld);
	createRow()

	fld.name="SpndAmt"
	fld.label="Spend Amount"
	fld.dataType="LABEL"

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
	fld.label="Share Amount Per Person"
	fld.desc="N"
	fld.dataType="LABEL"

	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	//createRow()


	fld.name="CrbTtl"
	fld.label="Contribution Total"
	fld.desc="N"
	fld.dataType="LABEL"
	fld.parent="homespace"
	fld.xml="N"

	fnCreateField(fld);
	createRow();



//	endNewTbl();	
//	creatNewTbl();

	fld.name="BalTtl"
	fld.label="Balance Total"
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

 <?php include("getGroupDtlTranVerify.php"); ?> 

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
