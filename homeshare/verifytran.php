<!DOCTYPE html>
<?php
session_start();
if(!session_is_registered(myusername)){
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
var glSno        ="<?php echo $_POST['homespace_Sno'    ] ?>"; 
var glBank       ="<?php echo $_POST['homespace_Bank'  ] ?>";
var glCardNum  ="<?php echo $_POST['homespace_CardNum'  ] ?>";
var glBillDate  ="<?php echo $_POST['homespace_BillDate'  ] ?>";
var glDescr  ="<?php echo $_POST['homespace_Descr'  ] ?>";
var glSpndAmt="<?php echo $_POST['homespace_SpndAmt'] ?>";
var glShrCnt ="<?php echo $_POST['homespace_ShrCnt' ] ?>";
var glShrAmt ="<?php echo $_POST['homespace_ShrAmt' ] ?>";
var glCrbTtl ="<?php echo $_POST['homespace_CrbTtl' ] ?>";
var glBalTtl ="<?php echo $_POST['homespace_BalTtl' ] ?>";
var glVendor ="<?php echo $_POST['homespace_Vendor' ] ?>";
var glrlt    ="<?php echo $_POST['homespace_rlt'    ] ?>";
</script>

<?php

echo("<pre>\n");
print_r($_POST);
echo("</pre>\n");


?>


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




	fld.name="Bank"
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

<?php

ob_start(); 
// 461085
include('config.php');

#echo "TEST";
// table nam
$usrid=$_POST['seqname']; 
$usrid=1;
$myusername = stripslashes($usrid);
$myusername = mysql_real_escape_string($myusername);
$sql="select f_name, l_name , g.grp_id , i.usr_id , i.cur_bal,i.Food_type from gid001tb i, grp001tb g where g.grp_id  = i.grp_id and  i.grp_id in (  select si.grp_id from gid001tb si  where si.usr_id = " . $usrid ." )";

$logic_1="";
$logic_2="document.getElementById('ShrCnt').value= ( 0 ";
$logic_3="document.getElementById('BalTtl').value=(Math.round(( 0";
$logic_4="";
$logic_5="document.getElementById('CrbTtl').value=( 0 ";
$logic_6="";
 $logon ="//logon";




//echo $sql;
$result=mysql_query($sql);

$rtCntrb="createRow();fnCreateCaption('Contribution Details'); ";
$rtShare="createRow();fnCreateCaption('Share Details'); ";
$balDtl="createRow();fnCreateCaption('Balance Details'); ";

function mysql_fetch_all($res) {
   while($row=mysql_fetch_array($res)) {
       $return[] = $row;
   }
   return $return;
}

function create_logic_3($dataArr) 
{
$logic_1 =  "parseFloat( document.getElementById('shr_" . $dataArr[3] .  "').value)";
return $logic_1 ;
}

function create_logic_5($dataArr) 
{
//$logic_1 =  " parseFloat( document.getElementById('CrbPer_" . $dataArr[3] .  "').value)";
//return $logic_1 ;
return "parseFloat( document.getElementById('CrbPer_" . $dataArr[3] .  "').value ) " ;
}




function create_logic_2($dataArr) 
{
$logic_2 =  "((document.getElementById('shr_" . $dataArr[3] .  "Flg').value  == 'Y')?1 :0)";
return $logic_2 ;
}


function create_logic_1($dataArr) 
{
$logic_1 =  " if( document.getElementById('CrbPer_" . $dataArr[3] .  "').value.length  ==  0)\n document.getElementById('CrbPer_" . $dataArr[3] .  "').value = 0;\n";
return $logic_1 ;
}

function create_logic_4($dataArr) 
{

$logic_1 = " if( document.getElementById('shr_" . $dataArr[3] .  "Flg').value  == 'Y') \n ";
$logic_1 .= " { \n"; 
$logic_1 .= "  document.getElementById('shr_" . $dataArr[3] .  "').disabled = false;\n ";
$logic_1 .= "  document.getElementById('shr_" . $dataArr[3] .  "').value = document.getElementById('ShrAmt').value;\n ";
$logic_1 .= "  document.getElementById('bal_" . $dataArr[3] .  "').value = parseFloat( document.getElementById('CrbPer_" . $dataArr[3] .  "').value) -parseFloat( document.getElementById('ShrAmt').value);\n";
$logic_1 .= " } \n"; 
$logic_1 .= " else \n ";
$logic_1 .= " {\n ";
$logic_1 .= "  document.getElementById('shr_" . $dataArr[3] .  "').disabled = true;\n ";
$logic_1 .= "  document.getElementById('shr_" . $dataArr[3] .  "').value = 0;\n ";
$logic_1 .= "  document.getElementById('bal_" . $dataArr[3] .  "').value=  0;\n ";
$logic_1 .= " }\n ";

$logic_1 .= " if( document.getElementById('CrbPer_" . $dataArr[3] .  "Flg').value  == 'Y') \n ";
$logic_1 .= " { \n"; 
$logic_1 .= "  document.getElementById('CrbPer_" . $dataArr[3] .  "').disabled = false;\n ";
//$logic_1 .= " document.getElementById('shr_" . $dataArr[3] .  "').value= parseFloat( document.getElementById('CrbPer_" . $dataArr[3] .  "').value) -parseFloat( document.getElementById('ShrAmt').value);\n";
$logic_1 .= " } \n"; 
$logic_1 .= " else \n ";
$logic_1 .= " {\n ";
$logic_1 .= "  document.getElementById('CrbPer_" . $dataArr[3] .  "').disabled = true;\n ";
$logic_1 .= "  document.getElementById('CrbPer_" . $dataArr[3] .  "').value = 0;\n ";
$logic_1 .= " }\n ";

/*[
$logic_1 .= " if( document.getElementById('CrbPer_" . $dataArr[3] .  "Flg').value  == 'Y') \n ";
$logic_1 .= " { \n"; 
$logic_1 .= "  document.getElementById('CrbPer_" . $dataArr[3] .  "').disabled = false;\n ";
//$logic_1 .= " document.getElementById('shr_" . $dataArr[3] .  "').value= parseFloat( document.getElementById('CrbPer_" . $dataArr[3] .  "').value) -parseFloat( document.getElementById('ShrAmt').value);\n";
$logic_1 .= " } \n"; 
$logic_1 .= " else \n ";
$logic_1 .= " {\n ";
$logic_1 .= "  document.getElementById('CrbPer_" . $dataArr[3] .  "').disabled = true;\n ";
$logic_1 .= "  document.getElementById('CrbPer_" . $dataArr[3] .  "').value = 0;\n ";
$logic_1 .= " }\n ";
]*/


return $logic_1 ;
}



function create_cntribdtl($dataArr) 
{


$cntribHtml=  "createRow(); \n;";
$cntribHtml.=  "fld.name='CrbPer_" . $dataArr[3] . "';\n";
$cntribHtml.=  "fld.label='Contrib " . $dataArr[0] . "';\n" ;
$cntribHtml.=  "fld.dataType='LABEL';\n";
$cntribHtml.=  "fld.dflt='0';\n";
$cntribHtml.=  "fld.desc='N';\n";
$cntribHtml.=  "fld.parent='homespace';\n";
$cntribHtml.=  "fld.mndf='N';\n";
$cntribHtml.=  "fld.xml='N';\n";
$cntribHtml.=  "fnCreateField(fld);\n";
$cntribHtml.=  "fld.name='CrbPer_".  $dataArr[3] . "Flg';\n";
$cntribHtml.=  "fld.label='Is ".  $dataArr[0] . " Contributor?';\n";
$cntribHtml.=  "fld.desc='N';\n";
$cntribHtml.=  "fld.mndf='Y';\n";
$cntribHtml.=  "fld.dflt='N';\n";
$cntribHtml.=  "fld.listVal='||Y|Y-Contributer|N|N-Noncontributer';\n";
$cntribHtml.=  "fld.dataType='LABEL';\n";
$cntribHtml.=  "fld.parent='homespace';\n";
$cntribHtml.=  "fnCreateField(fld);\n ";

return $cntribHtml;
}

function create_onload($dataArr) 
{
	
//	echo   $_POST["homespace_CrbPer_" . $dataArr   ];



$CrpPer       = "CrbPer_" . $dataArr[3];
$CrpPerFlg    = "CrbPer_" . $dataArr[3] .  "Flg";
$Shr          = "shr_"    . $dataArr[3];
$ShrFlg       = "shr_"    . $dataArr[3] . "Flg";
$Bal          = "bal_"    . $dataArr[3];

$nameCrpPer       = "homespace_CrbPer_" . $dataArr[3];
$nameCrpPerFlg    = "homespace_CrbPer_" . $dataArr[3] .  "Flg";
$nameShr          = "homespace_shr_" . $dataArr[3];
$nameShrFlg       = "homespace_shr_" . $dataArr[3] . "Flg";
$nameBal          = "homespace_bal_" . $dataArr[3];




$valCrpPer         =  $_POST[$nameCrpPer   ] ;
$valCrpPerFlg      =  $_POST[$nameCrpPerFlg] ;
$valShr            =  $_POST[$nameShr      ] ;
$valShrFlg         =  $_POST[$nameShrFlg   ] ;
$valBal            =  $_POST[$nameBal      ] ;



$rtval= "// $CrpPer  = $valCrpPer \n // $CrpPerFlg =   $valCrpPerFlg \n  //  $Shr  = $valShr \n // $ShrFlg  = $valShrFlg \n  // $Bal  = $valBal  \n";

$rtval.= " document.getElementById('" . $CrpPer    . "').value        = '".  $valCrpPer     ."' ;\n";
$rtval.= " document.getElementById('" . $CrpPerFlg . "').value        = '".  $valCrpPerFlg  ."' ;\n";
$rtval.= " document.getElementById('" . $Shr       . "').value        = '".  $valShr        ."' ;\n";
$rtval.= " document.getElementById('" . $ShrFlg    . "').value        = '".  $valShrFlg        ."' ;\n";
$rtval.= " document.getElementById('" . $Bal       . "').value        = '".  $valBal        ."' ;\n";
$rtval.= " document.getElementById('" . $CrpPerFlg . "').disabled  = true ;\n";
$rtval.= " document.getElementById('" . $ShrFlg    . "').disabled  = true ;\n";
	return $rtval;
}

function create_baldtl($dataArr) 
{


$cntribHtml=  "createRow(); \n;";
$cntribHtml.=  "fld.name='bal_" . $dataArr[3] . "';\n";
$cntribHtml.=  "fld.label='Contrib " . $dataArr[0] . "';\n" ;
$cntribHtml.=  "fld.dataType='LABEL';\n";
$cntribHtml.=  "fld.dflt='0';\n";
$cntribHtml.=  "fld.desc='N';\n";
$cntribHtml.=  "fld.parent='homespace';\n";
$cntribHtml.=  "fld.mndf='N';\n";
$cntribHtml.=  "fld.xml='N';\n";
$cntribHtml.=  "fnCreateField(fld);\n";
/*
$cntribHtml.=  "fld.name='CrbPer_".  $dataArr[3] . "Flg';\n";
$cntribHtml.=  "fld.label='Is ".  $dataArr[0] . " Contributor?';\n";
$cntribHtml.=  "fld.desc='N';\n";
$cntribHtml.=  "fld.mndf='Y';\n";
$cntribHtml.=  "fld.dflt='Y';\n";
$cntribHtml.=  "fld.listVal='||Y|Y-Contributer|N|N-Noncontributer';\n";
$cntribHtml.=  "fld.dataType='LIST';\n";
$cntribHtml.=  "fld.parent='homespace';\n";
$cntribHtml.=  "fnCreateField(fld);\n ";
*/
return $cntribHtml;
}

function create_share($dataArr1) 
{

echo "//$dataArr1[0];\n";
$balancHtml=  "createRow(); \n";
$balancHtml.=  "fld.name='shr_" . $dataArr1[3] . "';\n";
$balancHtml.=  "fld.label='" . $dataArr1[0] . "';\n" ;
$balancHtml.=  "fld.dataType='LABEL';\n";
$balancHtml.=  "fld.dflt='0';\n";
$balancHtml.=  "fld.desc='N';\n";
$balancHtml.=  "fld.parent='homespace';\n";
$balancHtml.=  "fld.mndf='N';\n";
$balancHtml.=  "fld.xml='N';\n";
$balancHtml.=  "fld.name='shr_".  $dataArr1[3] . "';\n";
$balancHtml.=  "fnCreateField(fld);\n";

$balancHtml.=  "fld.name='shr_".  $dataArr1[3] . "Flg';\n";
$balancHtml.=  "fld.label='Is ".  $dataArr1[0] . " Shared ?';\n";
$balancHtml.=  "fld.desc='N';\n";
$balancHtml.=  "fld.mndf='Y';\n";
$balancHtml.=  "fld.dflt='Y';\n";
$balancHtml.=  "fld.listVal='||Y|Y-Contributer|N|N-Noncontributer';\n";
$balancHtml.=  "fld.dataType='LIST';\n";
$balancHtml.=  "fld.parent='homespace';\n";
$balancHtml.=  "fnCreateField(fld);\n ";
return $balancHtml;

}

$all = mysql_fetch_all($result);


for($i = 0; $i < count($all); $i++)
{
     $rtCntrb.=create_cntribdtl($all[$i]);
     $rtShare.=create_share($all[$i]);
     $balDtl.=create_baldtl($all[$i]);
     $logic_1.=create_logic_1($all[$i]);
     $logic_2= $logic_2 .  "+"  . create_logic_2($all[$i]);
     $logic_3= $logic_3 .  "+"  . create_logic_3($all[$i]);
     $logic_4.=create_logic_4($all[$i]);
     $logic_5= $logic_5 . "+" . create_logic_5($all[$i]);
     $logon .= create_onload($all[$i]);

}
$logic_2= $logic_2 . ");";
$logic_3= $logic_3 . ") ) *100)/100;\n";
$logic_5= $logic_5 . ");\n";
echo $rtCntrb;
echo $rtShare;
echo $balDtl;
//echo $logic_1;
//echo $logic_2;
//echo $logic_3;



$jsfunc = "function homepace_onCrbChange()\n";
$jsfunc .= "{\n";
$jsfunc .= "	if( document.getElementById('SpndAmt').value.length  ==  0)\n";
$jsfunc .= "	{\n";
$jsfunc .= "		alert('Please Enter' + document.getElementById('SpndAmt').getAttribute('label') );\n";
$jsfunc .= "		document.getElementById('SpndAmt').focus();\n";
$jsfunc .= "		return false;\n";
$jsfunc .= "	}\n";
$jsfunc .= "\n";
/*[
$jsfunc .= "	if( document.getElementById('CrbPer1').value.length  ==  0)\n";
$jsfunc .= "	document.getElementById('CrbPer1').value = 0;\n";
$jsfunc .= "	if( document.getElementById('CrbPer2').value.length  ==  0)\n";
$jsfunc .= "	document.getElementById('CrbPer2').value = 0;\n";
$jsfunc .= "	if( document.getElementById('CrbPer3').value.length  ==  0)\n";
$jsfunc .= "	document.getElementById('CrbPer3').value = 0;\n";
$jsfunc .= "	if( document.getElementById('CrbPer4').value.length  ==  0)\n";
$jsfunc .= "	document.getElementById('CrbPer4').value = 0;\n";
$jsfunc .= "	if( document.getElementById('CrbPer5').value.length  ==  0)\n";
$jsfunc .= "	document.getElementById('CrbPer5').value = 0;\n";
//]*/
$jsfunc .= $logic_1;
$jsfunc .= "\n";
/*[ static ]*/
$jsfunc .= "\n";
$jsfunc .= "//logic 2\n";
$jsfunc .= $logic_2;

$jsfunc .= "\n";
//$jsfunc .= "	 document.getElementById('ShrCnt').value =( (document.getElementById('CrbPer1Flg').value  == 'Y')?1 :0)  + ( (document.getElementById('CrbPer2Flg').value  == 'Y')?1 :0)  + ( (document.getElementById('CrbPer3Flg').value  == 'Y')?1 :0)  + ( (document.getElementById('CrbPer4Flg').value  == 'Y')?1 :0)  + ( (document.getElementById('CrbPer5Flg').value  == 'Y')?1 :0)  ;\n";
$jsfunc .= "\n";
//[ static
$jsfunc .= "\n";
$jsfunc .= "	if (document.getElementById('SpndAmt').value.length!=0)	\n";
$jsfunc .= "	{\n";
$jsfunc .= "		document.getElementById('ShrAmt').value= Math.round(parseFloat( document.getElementById('SpndAmt').value)/parseFloat( document.getElementById('ShrCnt').value) * 100 )/100;\n";
$jsfunc .= "	}\n";
//]

 // document.getElementById('shr_3').value= parseFloat( document.getElementById('CrbPer_3').value) -parseFloat( document.getElementById('ShrAmt').value);

$jsfunc .= "//logic_4\n";
$jsfunc .= $logic_4;

$jsfunc .= "\n";
$jsfunc .= "//logic_3";
$jsfunc .= $logic_3;

$jsfunc .= "//logic_5\n";
$jsfunc .= $logic_5;

//document.getElementById('BalTtl').value=Math.round((( 0+parseFloat( document.getElementById('shr_1Flg').value)+parseFloat( document.getElementById('shr_3Flg').value)) ) *100)/100;
/*[
$jsfunc .= "	if( document.getElementById('CrbPer1Flg').value  == 'Y')\n";
$jsfunc .= "	document.getElementById('BalPer1').value= parseFloat( document.getElementById('CrbPer1').value) -parseFloat( document.getElementById('ShrAmt').value);\n";
$jsfunc .= "	if( document.getElementById('CrbPer2Flg').value  == 'Y')\n";
$jsfunc .= "	document.getElementById('BalPer2').value= parseFloat( document.getElementById('CrbPer2').value) -parseFloat( document.getElementById('ShrAmt').value);\n";
$jsfunc .= "	if( document.getElementById('CrbPer3Flg').value  == 'Y')\n";
$jsfunc .= "	document.getElementById('BalPer3').value= parseFloat( document.getElementById('CrbPer3').value) -parseFloat( document.getElementById('ShrAmt').value);\n";
$jsfunc .= "	if( document.getElementById('CrbPer4Flg').value  == 'Y')\n";
$jsfunc .= "	document.getElementById('BalPer4').value= parseFloat( document.getElementById('CrbPer4').value) -parseFloat( document.getElementById('ShrAmt').value);\n";
$jsfunc .= "	if( document.getElementById('CrbPer5Flg').value  == 'Y')\n";
$jsfunc .= "	document.getElementById('BalPer5').value= parseFloat( document.getElementById('CrbPer5').value) -parseFloat( document.getElementById('ShrAmt').value);\n";
$jsfunc .= "\n";
]*/

//$jsfunc .= "	document.getElementById('BalTtl').value= Math.round( ( parseFloat( document.getElementById('BalPer1').value) +parseFloat( document.getElementById('BalPer2').value) +parseFloat( document.getElementById('BalPer3').value) +parseFloat( document.getElementById('BalPer4').value) +parseFloat( document.getElementById('BalPer5').value) ) *100)/100;\n";

//$jsfunc .= "	document.getElementById('CrbTtl').value= parseFloat( document.getElementById('CrbPer1').value) +parseFloat( document.getElementById('CrbPer2').value) +parseFloat( document.getElementById('CrbPer3').value) +parseFloat( document.getElementById('CrbPer4').value) +parseFloat( document.getElementById('CrbPer5').value);\n";
$jsfunc .= "	document.getElementById('BalDiff').value= parseFloat( document.getElementById('CrbTtl').value) - parseFloat( document.getElementById('SpndAmt').value);\n";


$jsfunc .= "\n";
$jsfunc .= "}\n";


$jsfunc .= "function  onLoadPage()\n";
$jsfunc .= "{\n";
//$jsfunc .= "	alert('On Load php');\n";
$jsfunc .= "\n";
//$jsfunc .= "	var div='Sno';\n";
//$jsfunc .= "	var url='grpid.php';\n";
//$jsfunc .= "	var json={seqname:'TRANID'};\n";
//$jsfunc .= "	onPostReq(url,json,div,'OBJ');\n";

		
$jsfunc .= "\n";
$jsfunc .= "	try\n";
$jsfunc .= "	{\n";
$jsfunc .= "\n";
$jsfunc .= "		document.getElementById('GroupId').value= glGroupId ;\n";
$jsfunc .= "		document.getElementById('UserId').value= glUserId ;\n";
$jsfunc .= "		document.getElementById('EmailId').value= glEmailId ;\n";
$jsfunc .= "		document.getElementById('GroupName').value= glGroupName ;\n";
$jsfunc .= "		document.getElementById('Sno').value=glSno;\n";
$jsfunc .= "		document.getElementById('Bank'  ).value=glBank;\n";
$jsfunc .= "		document.getElementById('CardNum'  ).value=glCardNum;\n";
$jsfunc .= "		document.getElementById('BillDate'  ).value=glBillDate;\n";
$jsfunc .= "		document.getElementById('Descr'  ).value=glDescr ;\n";
$jsfunc .= "		document.getElementById('SpndAmt').value=glSpndAmt;\n";
$jsfunc .= "		document.getElementById('ShrCnt' ).value=glShrCnt ;\n";
$jsfunc .= "		document.getElementById('ShrAmt' ).value=glShrAmt ;\n";
$jsfunc .= "		document.getElementById('CrbTtl' ).value=glCrbTtl ;\n";
$jsfunc .= "		document.getElementById('BalTtl' ).value=glBalTtl ;\n";
$jsfunc .= "		document.getElementById('Vendor' ).value=glVendor ;\n";
$jsfunc .= "		document.getElementById('rlt'    ).value=glrlt;\n";
$jsfunc .=  $logon ;
$jsfunc .= "\n";
$jsfunc .= "	}\n";
$jsfunc .= "	catch(e)\n";
$jsfunc .= "	{\n";
$jsfunc .= "		alert('ONLException: ' + e);\n";
$jsfunc .= "	}\n";
$jsfunc .= "}\n";



echo $jsfunc;


?>


	createRow();


	endNewTbl();	

	


	</script>

	<table>
		<tr>
			<td>	
				<center>
				<input type="button" class="button" parent="verifytran"  task="BACK" value="back" onclick="javascript:onClick(this)" >
				<input type="button" class="button" parent="verifytran"  task="SUBMIT"   value="submit"   onclick="javascript:onClick(this)" >
				</center>
			</td>
		</tr>
	</table>
</div>
</form>
</body>
</html>
