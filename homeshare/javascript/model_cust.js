//alert('import cust.js');
var formObj=document.forms[0];

var form1=document.forms[0];


//alert('C:001:@@@');

function  onLoadPage()
{
//alert('C:002:@@@');
}

function   cust_pre_onChange(obj)
{
    //alert("this is cust preOnchange");
}
//alert('C:004:@@@');


function   cust_post_onChange(obj)
{

	try
	{
	
	alert("post");

		var div="txnDtl";
	 var url="getUserTxn.php";
	 var json={USRID:glUserId};

  	onPostReq(url,json,div,'DIV');


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
	
}
function homepace_onCrbChange()
{
}
//alert('end cust.js');
