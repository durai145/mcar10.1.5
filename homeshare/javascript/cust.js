//alert('import cust.js');
var formObj=document.forms[0];

var objSwarasName= new SwarasName();

	var st ='<table class="ctable" border=1 >';
	var sr ='<tr>';
	var sd ='<td class="ctext">';
	var sc ='<td class="ccaption">';
	var dy = st;
	var et ='</table>';
	var er ='</tr>';
	var ed ='</td>';
var form1=document.forms[0];


//alert('C:001:@@@');

function  onLoadPage()
{
    //document.forms[0].rlt.value =docSource;
//	alert('On Load');

	var div="Sno";
	var url="grpid.php";
	var json={seqname:"TRANID"};
	onPostReq(url,json,div,'OBJ');

	try
	{

document.getElementById('Sno').value=glSno;
//alert("Sno= "+form1.Sno.value  ); 
document.getElementById('RefNo'  ).value=glRefNo;
document.getElementById('Descr'  ).value=glDescr ;
document.getElementById('SpndAmt').value=glSpndAmt;
document.getElementById('ShrCnt' ).value=glShrCnt ;
document.getElementById('ShrAmt' ).value=glShrAmt ;
if(glCrbPer1.length != 0)
document.getElementById('CrbPer1').value=glCrbPer1;
if(glCrbPer2.length != 0)
document.getElementById('CrbPer2').value=glCrbPer2;
if(glCrbPer3.length != 0)
document.getElementById('CrbPer3').value=glCrbPer3;
if(glCrbPer4.length != 0)
document.getElementById('CrbPer4').value=glCrbPer4;
if(glCrbPer5.length != 0)
document.getElementById('CrbPer5').value=glCrbPer5;


if(glCrbPer1Flg.length != 0)
document.getElementById('CrbPer1Flg').value=glCrbPer1Flg;
if(glCrbPer2Flg.length != 0)
document.getElementById('CrbPer2Flg').value=glCrbPer2Flg;
if(glCrbPer3Flg.length != 0)
document.getElementById('CrbPer3Flg').value=glCrbPer3Flg;
if(glCrbPer4Flg.length != 0)
document.getElementById('CrbPer4Flg').value=glCrbPer4Flg;
if(glCrbPer5Flg.length != 0)
document.getElementById('CrbPer5Flg').value=glCrbPer5Flg;

document.getElementById('CrbTtl' ).value=glCrbTtl ;
if(glBalPer1.length != 0)
document.getElementById('BalPer1').value=glBalPer1;
if(glBalPer2.length != 0)
document.getElementById('BalPer2').value=glBalPer2;
if(glBalPer3.length != 0)
document.getElementById('BalPer3').value=glBalPer3;
if(glBalPer4.length != 0)
document.getElementById('BalPer4').value=glBalPer4;
if(glBalPer5.length != 0)
document.getElementById('BalPer5').value=glBalPer5;
document.getElementById('BalTtl' ).value=glBalTtl ;
document.getElementById('rlt'    ).value=glrlt;

}
	catch(e)
	{
		alert('ONLException: ' + e);
	}
}
//alert('C:002:@@@');

function   cust_pre_onChange(obj)
{
    //alert("this is cust preOnchange");
}
//alert('C:004:@@@');


function   cust_post_onChange(obj)
{

	try
	{
		if(obj.getAttribute('parent')=="homespace")
		{
			if(obj.id == 'ShrCnt'  )
			{

				if ( document.getElementById('SpndAmt').value.length == 0)
				{
					alert(VLDOKU00003 +  document.getElementById('SpndAmt').getAttribute('label'));
					 document.getElementById('SpndAmt').focus();
					return false;	
				}
				else
				{
					 document.getElementById('ShrAmt').value= parseFloat( document.getElementById('SpndAmt').value)/parseFloat( document.getElementById('ShrCnt').value);
				}
			}
			else if(obj.id == 'SpndAmt'  )
			{	
			homepace_onCrbChange();
			}
			else if(obj.id == 'CrbPer1'  )
			{
			homepace_onCrbChange();
			
			}
			else if(obj.id == 'CrbPer2'  )
			{
			homepace_onCrbChange();

			}
			else if(obj.id == 'CrbPer3'  )
			{
			homepace_onCrbChange();
			}
			else if(obj.id == 'CrbPer4'  )
			{
			homepace_onCrbChange();
			}
			else if(obj.id == 'CrbPer5'  )
			{
			homepace_onCrbChange();
			}
			else if(obj.id == 'CrbPer1Flg'  )
			{
//				alert('CrbPrt1Flg');
					
				
//				alert('OG###:'+document.getElementById('CrbPer1Flg').value) 	;
				if( document.getElementById('CrbPer1Flg').value  == 'Y')
				{
				 document.getElementById('CrbPer1').disabled=false; 
				}
				else
				{
				 document.getElementById('CrbPer1').disabled=true; 
				 document.getElementById('CrbPer1').value=0; 
				 document.getElementById('BalPer1').value=0; 
				}
			homepace_onCrbChange();


			}
			else if(obj.id == 'CrbPer2Flg'  )
			{
//				alert('CrbPrt1Flg');
					

				
//				alert('OG###:'+document.getElementById('CrbPer1Flg').value) 	;
				if( document.getElementById('CrbPer2Flg').value  == 'Y')
				{
				 document.getElementById('CrbPer2').disabled=false; 
				}
				else
				{
				 document.getElementById('CrbPer2').disabled=true; 
				 document.getElementById('CrbPer2').value=0; 
				 document.getElementById('BalPer2').value=0; 
				}


			homepace_onCrbChange();

			}
			else if(obj.id == 'CrbPer3Flg'  )
			{
				
//				alert('OG###:'+document.getElementById('CrbPer1Flg').value) 	;
				if( document.getElementById('CrbPer3Flg').value  == 'Y')
				{
				 document.getElementById('CrbPer3').disabled=false; 
				}
				else
				{
				 document.getElementById('CrbPer3').disabled=true; 
				 document.getElementById('CrbPer3').value=0; 
				 document.getElementById('BalPer3').value=0; 
				}

			homepace_onCrbChange();



			}
			else if(obj.id == 'CrbPer4Flg'  )
			{
//				alert('CrbPrt1Flg');
					
				
//				alert('OG###:'+document.getElementById('CrbPer1Flg').value) 	;
				if( document.getElementById('CrbPer4Flg').value  == 'Y')
				{
				 document.getElementById('CrbPer4').disabled=false; 
				}
				else
				{
				 document.getElementById('CrbPer4').disabled=true; 
				 document.getElementById('CrbPer4').value=0; 
				 document.getElementById('BalPer4').value=0; 
				}


				homepace_onCrbChange();
					

			}
			else if(obj.id == 'CrbPer5Flg'  )
			{
//				alert('CrbPrt1Flg');
					

				
//				alert('OG###:'+document.getElementById('CrbPer1Flg').value) 	;
				if( document.getElementById('CrbPer5Flg').value  == 'Y')
				{
				 document.getElementById('CrbPer5').disabled=false; 
				}
				else
				{
				 document.getElementById('CrbPer5').disabled=true; 
				 document.getElementById('CrbPer5').value=0; 
				 document.getElementById('BalPer5').value=0; 
				}
				homepace_onCrbChange();


			}
			else
			{
					homepace_onCrbChange();
			}




		
			
		}
	}
	catch(e)
	{
		alert('EXPPostTran'+e);
	}

}
//alert('C:005:@@@');

function   cust_pre_onKeyDown(obj)
{
   //  alert("this is cust preOnKeyPresse");
}
//alert('C:006:@@@');


function   cust_post_onKeyDown(obj)
{
    //alert("this is cust postOnKeyPress");
}

//alert('C:007:@@@');

function   cust_pre_onKeyUp(obj)
{
   //  alert("this is cust preOnKeyUp");
}
//alert('C:010:@@@');


function   cust_post_onKeyUp(obj)
{
    //alert("this is cust postOnKeyUp");
}


function   cust_pre_onKeyPress(obj)
{
   //  alert("this is cust preOnKeyPresse");
}


function   cust_post_onKeyPress(obj)
{
    //alert("this is cust postOnKeyPress");
}



//alert('C:011:@@@');
function onClickLink(objId,Link,title)
{
/*[
	alert("onClickLink");
	
	try
	{
		var url="../helpWin/";
		url+=Link; 
		url+="?helpWin.sysDate=" +document.getElementById(objId).value;
		
			window.showModalDialog(url,title); 
	}
	catch(e)
	{
			alert("OCLExceprion:"+e);
	}
]*/
		
}

function mod(n,m)
{
if((n%m)==0)
return m;
else
return n%m;
}

function ceil(	inp)
{
	var rtVal=0;
	var intVal=parseFloat(inp)*1000000000000; // it will remove the decimel point
	var floatVal=inp*1000000000000; // it has the decimel point

	if( intVal  <floatVal)
	{
		rtVal=parseFloat(inp)+1;
	}
	else
	{
		rtVal=parseFloat(inp);	
	}
	

	return rtVal;
}
function   cust_pre_onClick(obj)
{
    //alert("this is cust postOnKeyPress");
}
function   cust_post_onClick(obj)
{
	//    alert("this is cust cust_post_onClick");

//	alert( "<"+obj.getAttribute('task')+"> <"+obj.getAttribute('parent')+">");
	var form1=document.forms[0];
	form1.method="POST";
	if ( obj.getAttribute('task') ==  'BACK' )
	{
		
		if  (  obj.getAttribute('parent') == 'homeconfirm' )
		{
			form1.action="verify.php";
		}
		if  (  obj.getAttribute('parent') == 'homeverify' )
		{
			form1.action="portlets.php";
		}
		form1.submit();
	}
	
	if ( obj.getAttribute('task') ==  'SUBMIT' )
	{
		if  (  obj.getAttribute('parent') == 'homespace' )
		{
			form1.action="portlets.php";
		}
		if  (  obj.getAttribute('parent') == 'homeverify' )
		{
			form1.action="portlets.php";
		}

		if  (  obj.getAttribute('parent') == 'homeconfirm' )
		{
			form1.action="confirm.php";
		}

		form1.submit();
	}
	
}
function homepace_onCrbChange()
{

	if( document.getElementById('SpndAmt').value.length  ==  0)
	{
		alert("Please Enter " + document.getElementById('SpndAmt').getAttribute('label') );
		document.getElementById('SpndAmt').focus();
		return false;
	}

	if( document.getElementById('CrbPer1').value.length  ==  0)
	document.getElementById('CrbPer1').value = 0;
	if( document.getElementById('CrbPer2').value.length  ==  0)
	document.getElementById('CrbPer2').value = 0;
	if( document.getElementById('CrbPer3').value.length  ==  0)
	document.getElementById('CrbPer3').value = 0;
	if( document.getElementById('CrbPer4').value.length  ==  0)
	document.getElementById('CrbPer4').value = 0;
	if( document.getElementById('CrbPer5').value.length  ==  0)
	document.getElementById('CrbPer5').value = 0;


	 document.getElementById('ShrCnt').value =( (document.getElementById('CrbPer1Flg').value  == 'Y')?1 :0)  + ( (document.getElementById('CrbPer2Flg').value  == 'Y')?1 :0)  + ( (document.getElementById('CrbPer3Flg').value  == 'Y')?1 :0)  + ( (document.getElementById('CrbPer4Flg').value  == 'Y')?1 :0)  + ( (document.getElementById('CrbPer5Flg').value  == 'Y')?1 :0)  ;


	if (document.getElementById('SpndAmt').value.length!=0)	
	{
		document.getElementById('ShrAmt').value= parseFloat( document.getElementById('SpndAmt').value)/parseFloat( document.getElementById('ShrCnt').value);
	}
	if( document.getElementById('CrbPer1Flg').value  == 'Y')
	document.getElementById('BalPer1').value= parseFloat( document.getElementById('CrbPer1').value) -parseFloat( document.getElementById('ShrAmt').value);
	if( document.getElementById('CrbPer2Flg').value  == 'Y')
	document.getElementById('BalPer2').value= parseFloat( document.getElementById('CrbPer2').value) -parseFloat( document.getElementById('ShrAmt').value);
	if( document.getElementById('CrbPer3Flg').value  == 'Y')
	document.getElementById('BalPer3').value= parseFloat( document.getElementById('CrbPer3').value) -parseFloat( document.getElementById('ShrAmt').value);
	if( document.getElementById('CrbPer4Flg').value  == 'Y')
	document.getElementById('BalPer4').value= parseFloat( document.getElementById('CrbPer4').value) -parseFloat( document.getElementById('ShrAmt').value);
	if( document.getElementById('CrbPer5Flg').value  == 'Y')
	document.getElementById('BalPer5').value= parseFloat( document.getElementById('CrbPer5').value) -parseFloat( document.getElementById('ShrAmt').value);

	document.getElementById('BalTtl').value= Math.round((parseFloat( document.getElementById('BalPer1').value) +parseFloat( document.getElementById('BalPer2').value) +parseFloat( document.getElementById('BalPer3').value) +parseFloat( document.getElementById('BalPer4').value) +parseFloat( document.getElementById('BalPer5').value) ) *100)/100;
	document.getElementById('CrbTtl').value= parseFloat( document.getElementById('CrbPer1').value) +parseFloat( document.getElementById('CrbPer2').value) +parseFloat( document.getElementById('CrbPer3').value) +parseFloat( document.getElementById('CrbPer4').value) +parseFloat( document.getElementById('CrbPer5').value);
	document.getElementById('BalDiff').value= parseFloat( document.getElementById('CrbTtl').value) - parseFloat( document.getElementById('SpndAmt').value);

}
//alert('end cust.js');
