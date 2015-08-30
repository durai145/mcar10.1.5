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
$logic_5="document.getElementById('CrbTtl').value=( 0";
$logic_6="";





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
$cntribHtml.=  "fld.dataType='AMOUNT';\n";
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
$cntribHtml.=  "fld.dataType='LIST';\n";
$cntribHtml.=  "fld.parent='homespace';\n";
$cntribHtml.=  "fnCreateField(fld);\n ";

return $cntribHtml;
}


function create_baldtl($dataArr) 
{


$cntribHtml=  "createRow(); \n;";
$cntribHtml.=  "fld.name='bal_" . $dataArr[3] . "';\n";
$cntribHtml.=  "fld.label='Contrib " . $dataArr[0] . "';\n" ;
$cntribHtml.=  "fld.dataType='AMOUNT';\n";
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
$balancHtml.=  "fld.dataType='AMOUNT';\n";
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
$jsfunc .= "	var div='Sno';\n";
$jsfunc .= "	var url='grpid.php';\n";
$jsfunc .= "	var json={seqname:'TRANID'};\n";
$jsfunc .= "	onPostReq(url,json,div,'OBJ');\n";
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
$jsfunc .= "		document.getElementById('Descr'  ).value=glDescr ;\n";
$jsfunc .= "		document.getElementById('SpndAmt').value=glSpndAmt;\n";
$jsfunc .= "		document.getElementById('ShrCnt' ).value=glShrCnt ;\n";
$jsfunc .= "		document.getElementById('ShrAmt' ).value=glShrAmt ;\n";
$jsfunc .= "		document.getElementById('CrbTtl' ).value=glCrbTtl ;\n";
$jsfunc .= "		document.getElementById('BalTtl' ).value=glBalTtl ;\n";
$jsfunc .= "		document.getElementById('rlt'    ).value=glrlt;\n";
$jsfunc .= "\n";
$jsfunc .= "	}\n";
$jsfunc .= "	catch(e)\n";
$jsfunc .= "	{\n";
$jsfunc .= "		alert('ONLException: ' + e);\n";
$jsfunc .= "	}\n";
$jsfunc .= "}\n";



echo $jsfunc;


?>
