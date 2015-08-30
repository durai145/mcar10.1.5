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
	alert('On Load');

	var div="Sno";
	var url="grpid.php";
	var json={seqname:"TRANID"};
	onPostReq(url,json,div,'OBJ');

	try
	{

document.getElementById('Sno').value=glSno;
document.getElementById('RefNo'  ).value=glRefNo;
document.getElementById('Descr'  ).value=glDescr ;
document.getElementById('SpndAmt').value=glSpndAmt;
document.getElementById('ShrCnt' ).value=glShrCnt ;
document.getElementById('ShrAmt' ).value=glShrAmt ;
document.getElementById('CrbTtl' ).value=glCrbTtl ;
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
			if(obj.id != 'ShrAmt'  )
			{

				if ( document.getElementById('SpndAmt').value.length == 0)
				{
					alert(VLDOKU00003 +  document.getElementById('SpndAmt').getAttribute('label'));
					 document.getElementById('SpndAmt').focus();
					return false;	
				}
			}
			else
			{
					homepace_onCrbChange(obj);
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
   // alert("this is cust postOnKeyPress");

		homepace_onCrbChange();

	

	return true;
}
function   cust_post_onClick(obj)
{

      	

	var form1=document.forms[0];
	form1.method="POST";
	if ( obj.getAttribute('task') ==  'BACK' )
	{
		
		if  (  obj.getAttribute('parent') == 'hometran' )
		{	
			if  ( document.getElementById('FuncCode' ).value  == 'E' )
			{
				document.getElementById('FuncCode' ).value = 'E';
				form1.action="portlets.php";
			}
			else
			if  ( document.getElementById('FuncCode' ).value  == 'V' )
			{
				document.getElementById('FuncCode' ).value = 'E';
				form1.action="hometran.php";
			}
			else
			if  ( document.getElementById('FuncCode' ).value  == 'C' )
			{

				
				document.getElementById('FuncCode' ).value = 'E';
				form1.action="hometran.php";

			}

		}
		if  (  obj.getAttribute('parent') == 'verifytran' )
		{
			form1.action="hometran.php";
		}
		form1.submit();
	}
	
	if ( obj.getAttribute('task') ==  'SUBMIT' )
	{


		if  ( document.getElementById('FuncCode' ).value  == 'E' )
		{
				
			var BalDiff=document.getElementById('BalDiff' ).value;

			if ( BalDiff.length == 0 )
			{

				alert("BalDiff is not calculated ");
				return false;

			}


			if (  Math.round( parseInt(BalDiff) )   == 0 )
			{

			//	alert("Diff Contrib and Spend is Tallied with " + document.getElementById('BalDiff' ).value );

				if ( document.getElementById('FuncCode' ).value  == 'E' )
				{
				  document.getElementById('FuncCode' ).value  = 'V';
				}
				  return true;
			}
			else
			{
				document.getElementById('FuncCode' ).value  = 'E';
				alert(document.getElementById('BalDiff' ).getAttribute("label") + "is Not Tally");
				return false;
			}

		}	
		else if  ( document.getElementById('FuncCode' ).value  == 'V' )
		{
				document.getElementById('FuncCode' ).value  = 'C';
			

		}
		else if  ( document.getElementById('FuncCode' ).value  == 'C' )
		{
			//	document.getElementById('FuncCode' ).value  = 'C';
				form1.action="portlets.php";

			

		}

	}

//		form1.submit();


	return true;
	
}
/*[
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
]*/
//alert('end cust.js');
