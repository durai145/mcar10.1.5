//alert('import cust.js');
var sarali="";



	var st='<table class="ctable" border=1 >';
	var sr ='<tr>';
	var sd ='<td class="ctext">';
	var sc ='<td class="ccaption">';
	var dy = st;
	var et='</table>';
	var er ='</tr>';
	var ed ='</td>';

	var channel_max = 64;										// number of channels
	audiochannels = new Array();
	for (a=0;a<channel_max;a++) {									// prepare the channels
		audiochannels[a] = new Array();
		audiochannels[a]['channel'] = new Audio();						// create a new audio object
		audiochannels[a]['finished'] = -1;							// expected end time for this channel
	}
	function play_multi_sound(s) {
		for (a=0;a<audiochannels.length;a++) {
			thistime = new Date();
			if (audiochannels[a]['finished'] < thistime.getTime()) {			// is this channel finished?
				audiochannels[a]['finished'] = thistime.getTime() + document.getElementById(s).duration*1000;
				audiochannels[a]['channel'].src = document.getElementById(s).src;
				audiochannels[a]['channel'].load();
				audiochannels[a]['channel'].play();
				break;
			}
		}
	}


//alert('C:001:@@@');
function  onLoadPage()
{
    //document.forms[0].rlt.value =docSource;
//	alert('On Load');
	try
	{
var		nameid = 'name';
	var melNameId=nameid+"MelNameId";
		var melNoId=nameid+"MelNoId";
		var melChakraId=nameid+"MelChakraNoId";
		var melChakraNameId=nameid+"MelChakraNameId";
		var melMelamNoId=nameid+"MelMelamNoId";
		var melMelamNameId=nameid+"MelMelamNameId";
		var govaiId=nameid+"GovaiId";
		var jathiId=nameid+"JathiId";
		var talaId=nameid+"TalaId";
		var langId=nameid+"LangId";
		var acharamId=nameid+"AcharamId";
		var SId=nameid+"SId";
		var RId=nameid+"RId";
		var GId=nameid+"GId";
		var MId=nameid+"MId";
		var PId=nameid+"PId";
		var DId=nameid+"DId";
		var NId=nameid+"NId";


		document.getElementById(melNoId).value = 15;
		document.getElementById(jathiId).value = 4;
		document.getElementById(acharamId).value = 1;
		if(lang == "" )
		document.getElementById(langId).value = "ENG";
		else
		document.getElementById(langId).value = lang;
		document.getElementById(talaId).value = "IOO";
		document.getElementById(govaiId).value = "SAMANMANDILAM";
		document.getElementById(melNoId).onchange();
		document.getElementById(govaiId).onchange();

	//	document.getElementById(melChakraId).disabled = true;
	//	document.getElementById(melChakraNameId).disabled = true;
	//	document.getElementById(melMelamNoId).disabled = true;
	}
	catch(e)
	{
		alert('ONLException: ' + e);
	}
}
//alert('C:002:@@@');

function   cust_pre_onChange(obj)
{
   // alert("this is cust preOnchange");
}
//alert('C:004:@@@');


function   cust_post_onChange(obj)
{

	try
	{
    //alert("this is cust postOnchange");

var 	nameid   =obj.getAttribute('nameid');
	if (nameid == "")
	{
	;
	}
	else
	{
		//alert("nameid= <"+nameid +">");	
		var melNameId=nameid+"MelNameId";
		var melNoId=nameid+"MelNoId";
		var melChakraId=nameid+"MelChakraNoId";
		var melChakraNameId=nameid+"MelChakraNameId";
		var melMelamNoId=nameid+"MelMelamNoId";
		var melMelamNameId=nameid+"MelMelamNameId";

		var govaiId=nameid+"GovaiId";
		var talaId=nameid+"TalaId";
		var jathiId=nameid+"JathiId";
		var langId=nameid+"LangId";
		var acharamId=nameid+"AcharamId";
		var SId=nameid+"SId";
		var RId=nameid+"RId";
		var GId=nameid+"GId";
		var MId=nameid+"MId";
		var PId=nameid+"PId";
		var DId=nameid+"DId";
		var NId=nameid+"NId";
	    				//MelChakraNoId
			var rdArry = new Array(1,1,1,2,2,3);
			var gnArry = new Array(1,2,3,2,3,3);
 			var rArr=new Array(0,12,18);
 			var gArr=new Array(0,6,12);
 			var dArr=new Array(0,2,3);
 			var nArr=new Array(1,2,3);
 			var mArr=new Array(0,36);


	    if(obj.id == melNameId )
		{
			//S-0
			//R-0,12,18 :=(int)ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]
			//G-0,6,12
			//M-0,36,
			//P-0
			//D-0,2,3
			//N-1,2,3
					
			//alert('To do nameId');
			var i=obj.value;
			document.getElementById(melNoId).value       = obj.value;
			document.getElementById(melChakraId).value     = ceil(obj.value/6);
			document.getElementById(melChakraNameId).value = ceil(obj.value/6);
/*
			document.getElementById(melMelamNoId).value    = (obj.value%6 == 0)?6 :obj.value%6;
			document.getElementById(melMelamNameId).value  = (obj.value%6 == 0)?6 :obj.value%6;
*/ 
			document.getElementById(melMelamNoId).value    = mod(obj.value,6);
			document.getElementById(melMelamNameId).value  = mod(obj.value,6);


//			alert(ceil(((i%36== 0)?36:(i%36))*1.00/6.0));
			document.getElementById(SId).value    = 0;
			document.getElementById(RId).value    = rArr[rdArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1] ;
			document.getElementById(GId).value    = gArr[gnArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1];
			document.getElementById(DId).value    = dArr[rdArry[ceil((i%6== 0)?6:(i%6))-1]-1] ;
			document.getElementById(NId).value    = nArr[gnArry[ceil((i%6== 0)?6:(i%6))-1]-1];
			document.getElementById(MId).value    = mArr[ceil(i/36)-1];

		}
		else if(obj.id == melNoId )
		{
		//	alert('To do noId' + obj.value);
			var i=obj.value;
			document.getElementById(melNameId).value       = obj.value;
			document.getElementById(melChakraId).value     = ceil(obj.value/6);
			document.getElementById(melChakraNameId).value = ceil(obj.value/6);
			document.getElementById(melMelamNoId).value    = mod(obj.value,6);
			document.getElementById(melMelamNameId).value  = mod(obj.value,6);
//			alert(ceil(((i%36== 0)?36:(i%36))*1.00/6.0));
			document.getElementById(SId).value    = 0;
			document.getElementById(RId).value    = rArr[rdArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1] ;
			document.getElementById(GId).value    = gArr[gnArry[ceil(((i%36== 0)?36:(i%36))*1.00/6.0)-1]-1];
			document.getElementById(DId).value    = dArr[rdArry[ceil((i%6== 0)?6:(i%6))-1]-1] ;
			document.getElementById(NId).value    = nArr[gnArry[ceil((i%6== 0)?6:(i%6))-1]-1];
			document.getElementById(MId).value    = mArr[ceil(i/36)-1];
		}
		else if(obj.id == govaiId || obj.id ==jathiId || obj.id == talaId ||  obj.id == acharamId)
		{
		//	alert('Test<' + obj.id+'> value' + obj.value);
		//	alert(document.getElementById(talaId).value );
		//	alert(document.getElementById(jathiId).value );
			var jathiThala=getJathiFormat(document.getElementById(jathiId).value,document.getElementById(talaId).value);
			var jathiThalaLen=getJathiFormatLength(document.getElementById(jathiId).value,document.getElementById(talaId).value);

			try
			{
						var acharam=document.getElementById(acharamId).value ;
					if( 	document.getElementById(govaiId).value == 'SAMANMANDILAM' )
					{
						//document.getElementById("nameViewId").innerHTML = "<"+jathiThala+"> <" +jathiThala+"><"+sarali ;
						document.getElementById("nameViewId").innerHTML = getOnePara(sarali,jathiThala,jathiThalaLen,acharam);
						}
						else
						{
						//document.getElementById("nameViewId").innerHTML = "<"+jathiThala+"> <" +jathiThalaLen+">" ;
						document.getElementById("nameViewId").innerHTML = "Under Construction..." ;
						}
				}
				catch(e)
				{
					alert('EXPPostTran:'+govaiId+':'+e);
				}
		}
		else if( obj.id ==langId )
		{
		//	alert('Submit');
			document.forms[0].submit();	
			
		}
		
		}
	
		
// ALert('post onchange');
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
		
}
//alert('C:012:@@@');
function wrtSwaraSpiral()
{
        var dynStr="<table border=2 class='ctable'>";	
	var stg="A001";
	 var tblValues= '~|||P||||'; 
         tblValues+='~||||M2|||'; 
         tblValues+='~||||M1|||'; 
         tblValues+='~|||||G3||'; 
         tblValues+='~|||||G2|R3|'; 
         tblValues+='~|||||G1|R2|'; 
         tblValues+='~||||||R1|'; 
         tblValues+='~|||||||S'; 
         tblValues+='~||||||N3|'; 
         tblValues+='~|||||D3|N2|'; 
         tblValues+='~|||||D2|N1|'; 
         tblValues+='~|||||D1||'; 
         tblValues+='~||||p|||'; 
         tblValues+='~|||m2||||'; 
         tblValues+='~|||m1||||'; 
         tblValues+='~||g3|||||'; 
         tblValues+='~|r3|g2|||||'; 
         tblValues+='~|r2|g1|||||'; 
         tblValues+='~|r1||||||'; 
         tblValues+='~s|||||||'; 
         tblValues+='~|n3||||||'; 
         tblValues+='~|n2|d3|||||'; 
         tblValues+='~|n1|d2|||||'; 
         tblValues+='~||d1|||||'; 
         tblValues+='~|||b||||'; 
	// alert("A:001");
	stg="002";
       var swram= new swaras();
       var ss= new SwarasSpiral();
	stg="003";

	stg="004";
	
 dynStr+='<tr class="ccaption"> <td colspan=10>'+ eval('ss.ssTitle' ) + '</td> </tr>';
 dynStr+='<tr> <td colspan=10> '+ eval('ss.ssTip')  +' </td> </tr>';
	try
	{
		stg="005";
		var tblRows=tblValues.split('~');
		stg="006";
		for (var row=0; row<tblRows.length; row ++ )
		{
			stg="007";
			var tblCols=tblRows[row].split('|');
			//dynStr+='<tr class="ccaption">';			
			dynStr+='<tr>';			
			for (var col=0; col< tblCols.length; col += 1)
			{
				stg="008";
				if( tblCols[col].length != 0 )
				{
					stg="009";
				// eval('swram.'+ tblCols[col] )
			         dynStr+='<td class="ctext" title="'+ eval('swram.'+ tblCols[col] )+'">';			
				}
				else
				{
												stg="010";
			         dynStr+='<td>';			
				}
			stg="011";
			if ( tblCols[col].length != 0 )	
			{
				
				dynStr+= "<a href=\"javascript:play_multi_sound('"+ tblCols[col]    +"');\" >" + tblCols[col] +"</a>";			
			}
			else
			{
				dynStr+= tblCols[col];			
			}
			dynStr+='</td>';			
			}
			stg="012";
			dynStr+='</tr>';			
				
		}
			stg="013";
			dynStr+='</table>';			
//alert('dynStr '+ dynStr);
	return dynStr;
			
	}
	catch(e)
	{
			alert("WSSExceprion:"+stg+":"+e);
	}
	return dynStr;
		
}
//alert('C:013:@@@');

function melRagas()
{

}
/*--
1-Indhu         - Ragas 1-6    - (Db, D swaras are fixed)
2-Nethra        - Ragas 7-12  - (Db, Eb swaras are fixed)
3-Agni           - Ragas 13-18 - (Db, E swaras are fixed)
4-Vedha         - Ragas 19-24 - (D, Eb swaras are fixed)
5-Bhana         - Ragas 25-30 - (D, E swaras are fixed)
6-Rudhu         - Ragas 31-36 - (Eb, E swaras are fixed)
 
7- Rishi            - Ragas 37-42 - (Db, D swaras are fixed)
8- Vasu           - Ragas 43-48 - (Db, Eb swaras are fixed)
9- Brahma        - Ragas 49-54 - (Db, E swaras are fixed)
10-Disi            - Ragas 55-60 - (D, Eb swaras are fixed)
11-Rudra         - Ragas 61-66 - (D, E swaras are fixed)
12-Adithya       - Ragas 67-72 - (Eb, E swaras are fixed)

--*/
function melRagaMelamNoList(name)
{

	
//	alert('In melRagaMelamNoList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaMelamList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var melam = new Array(0,1,2,3,4,5,6);
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
//	dynStr+='Melam';
	dynStr+=HMELCARNAMET4;
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	dynStr+='<select id="'+name+'MelMelamNoId" disabled=true class="clabel"  readonly nameid="'+name+'"  name="'+name+'MelMelamNoName" dataType="OPTION"  onchange="javascript:onChange(this)" >';


	for(var i=0; i<melam.length; i++)
	{

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value='+i+'>' +   melam[i]  + '</option>';
	//dynStr+='<option value='+i+'>' +   eval('chakaras.melams'+i ) + '</option>';
	
	}
	dynStr+='</select>';
	dynStr+='</td>';
	
	}
	catch(e)
	{
		alert("MRNException:"+e);
	}
	return dynStr;

}
function melRagaMelamNameList(name)
{

	
//	alert('In melRagaMelammList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaMelamList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var chakaras = new Melams();
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET5;
//	dynStr+='ChakaraNo';
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	dynStr+='<select id="'+name+'MelMelamNameId"  disabled=true   nameid="'+name+'"  name="'+name+'MelMelamNameName" dataType="OPTION"  onchange="javascript:onChange(this)" >';


	for(var i=0; i<7; i++)
	{

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value='+i+'>' +  i +'-'+ eval('chakaras.melams'+i ) + '</option>';
	//dynStr+='<option value='+i+'>' +   eval('chakaras.melams'+i ) + '</option>';
	
	}
	dynStr+='</select>';
	dynStr+='</td>';
	
	}
	catch(e)
	{
		alert("MRNException:"+e);
	}
	return dynStr;

}
function melRagaChakraNameList(name)
{

	
//	alert('In melRagaChakramList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaChakraList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var chakaras = new Chakras();
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET3;
//	dynStr+='ChakaraNo';
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	dynStr+='<select id="'+name+'MelChakraNameId" disabled=true  readonly nameid="'+name+'"  name="'+name+'MelChakraNameName" dataType="OPTION"  onchange="javascript:onChange(this)" >';


	for(var i=0; i<13; i++)
	{

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value='+i+' >' +  i+'-'+ eval('chakaras.chakara'+i ) + '</option>';
	
	}
	dynStr+='</select>';
	dynStr+='</td>';
	
	}
	catch(e)
	{
		alert("MRNException:"+e);
	}
	return dynStr;

}
function melRagaChakraList(name)
{

	
//	alert('In melRagaChakramList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaChakraList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var mel = new Mela();
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET2;
//	dynStr+='ChakaraNo';
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	dynStr+='<select id="'+name+'MelChakraNoId" disabled=true readonly nameid="'+name+'"  name="'+name+'MelChakraNoName" dataType="OPTION"  onchange="javascript:onChange(this)" >';


	for(var i=0; i<13; i++)
	{

	//	document.write(''+ i +'=' + eval('mel.raga'+i ) );
	dynStr+='<option value='+i+'>' + i  + '</option>';
	
	}
	dynStr+='</select>';
	dynStr+='</td>';
	
	}
	catch(e)
	{
		alert("MRNException:"+e);
	}
	return dynStr;

}
function melRagaNoList(name)
{
	
//	alert('In melRagaNoList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaNoList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var mel = new Mela();
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET1;
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	dynStr+='<select id="'+name+'MelNoId" nameid="'+name+'"  name="'+name+'MelNoName" dataType="OPTION"  onchange="javascript:onChange(this)" >';


	for(var i=0; i<73; i++)
	{

	//	document.write(''+ i +'=' + eval('mel.raga'+i ) );
	dynStr+='<option value='+i+'>' + i  + '</option>';
	
	}
	dynStr+='</select>';
	dynStr+='</td>';
	
	}
	catch(e)
	{
		alert("MRNException:"+e);
	}
	return dynStr;

}
//alert('C:014:@@@');
function melRagaNameList( name)
{

	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaNameList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var mel = new Mela();
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET0;
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	//dynStr+='<select '+name+'>';
	dynStr+='<select id="'+name+'MelNameId" nameid="'+name+'"  name="'+name+'MelNameName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

	for(var i=0; i<73; i++)
	{

	//	document.write(''+ i +'=' + eval('mel.raga'+i ) );
	dynStr+='<option value='+i+'>'+i +'-'+ eval('mel.raga'+i ) + '</option>'; /*@@@*/
/*[@@@@
	dynStr+='<option value='+i+'>'+i +'-'+ eval('mel.raga'+i ) + '</option>'; 
@@@]*/
	
	}
	dynStr+='</select>';
	dynStr+='</td>';



	
	}
	catch(e)
	{
		alert("MRNException:"+e);
	}
	return dynStr;
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
	var intVal=parseInt(inp)*1000000000000; // it will remove the decimel point
	var floatVal=inp*1000000000000; // it has the decimel point

      //  alert("intVal " +intVal);
        //alert("floatVal" +floatVal);
	if( intVal  <floatVal)
	{
		rtVal=parseInt(inp)+1;	
	}
	else
	{
		rtVal=parseInt(inp);	
	}
	

	return rtVal;
}
function swaraGanam(name)
{
	

	
//	alert('In melRagaMelammList ');
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:melRagaMelamList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var objSwarasName= new SwarasName();
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET6;
//	dynStr+='svara Format';
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	dynStr+='<select id="'+name+'SId"  readonly nameid="'+name+'"  name="'+name+'SName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );

			//S-0
			//R-0,12,18
			//G-0,6,12
			//M-0,36,
			//P-0
			//D-0,2,3
			//N-1,2,3

	dynStr+='<option value="0" >' +   eval('objSwarasName.S' ) + '</option>';
	
	dynStr+='</select>';
	dynStr+='<select id="'+name+'RId"  readonly nameid="'+name+'"  name="'+name+'RName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value="0" >' +   eval('objSwarasName.R1' ) + '</option>';
	dynStr+='<option value="12" >' +   eval('objSwarasName.R2' ) + '</option>';
	dynStr+='<option value="18" >' +   eval('objSwarasName.R3' ) + '</option>';
/*[
	dynStr+='<option value="1" >' +   eval('objSwarasName.R1' ) + '</option>';
	dynStr+='<option value="2" >' +   eval('objSwarasName.R2' ) + '</option>';
	dynStr+='<option value="3" >' +   eval('objSwarasName.R3' ) + '</option>';
]*/
	
	dynStr+='</select>';
	dynStr+='<select id="'+name+'GId"  readonly nameid="'+name+'"  name="'+name+'GName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value="0" >' +   eval('objSwarasName.G1' ) + '</option>';
	dynStr+='<option value="6" >' +   eval('objSwarasName.G2' ) + '</option>';
	dynStr+='<option value="12" >' +   eval('objSwarasName.G3' ) + '</option>';
/*[--
	dynStr+='<option value="1" >' +   eval('objSwarasName.G1' ) + '</option>';
	dynStr+='<option value="2" >' +   eval('objSwarasName.G2' ) + '</option>';
	dynStr+='<option value="3" >' +   eval('objSwarasName.G3' ) + '</option>';
--]*/
	
	dynStr+='</select>';
	dynStr+='<select id="'+name+'MId"  readonly nameid="'+name+'"  name="'+name+'MName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value="0" >' +   eval('objSwarasName.M1' ) + '</option>';
	dynStr+='<option value="36" >' +   eval('objSwarasName.M2' ) + '</option>';
/*[
	dynStr+='<option value="1" >' +   eval('objSwarasName.M1' ) + '</option>';
	dynStr+='<option value="2" >' +   eval('objSwarasName.M2' ) + '</option>';
]*/
	
	dynStr+='</select>';
	dynStr+='<select id="'+name+'PId"  readonly nameid="'+name+'"  name="'+name+'PName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value="0" >' +   eval('objSwarasName.P' ) + '</option>';
	
	dynStr+='</select>';
	dynStr+='<select id="'+name+'DId"  readonly nameid="'+name+'"  name="'+name+'DName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value="0" >' +   eval('objSwarasName.D1' ) + '</option>';
	dynStr+='<option value="2" >' +   eval('objSwarasName.D2' ) + '</option>';
	dynStr+='<option value="3" >' +   eval('objSwarasName.D3' ) + '</option>';
/*[
	dynStr+='<option value="1" >' +   eval('objSwarasName.D1' ) + '</option>';
	dynStr+='<option value="2" >' +   eval('objSwarasName.D2' ) + '</option>';
	dynStr+='<option value="3" >' +   eval('objSwarasName.D3' ) + '</option>';
]*/

	
	dynStr+='</select>';
	dynStr+='<select id="'+name+'NId"  readonly nameid="'+name+'"  name="'+name+'NName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

//x		document.write(''+ i +'=' + eval('chakaras.chakara'+i ) );
	dynStr+='<option value="1" >' +   eval('objSwarasName.N1' ) + '</option>';
	dynStr+='<option value="2" >' +   eval('objSwarasName.N2' ) + '</option>';
	dynStr+='<option value="3" >' +   eval('objSwarasName.N3' ) + '</option>';
/*[
	dynStr+='<option value="1" >' +   eval('objSwarasName.N1' ) + '</option>';
	dynStr+='<option value="2" >' +   eval('objSwarasName.N2' ) + '</option>';
	dynStr+='<option value="3" >' +   eval('objSwarasName.N3' ) + '</option>';
]*/
	
	dynStr+='</select>';
	dynStr+='</td>';
	
	}
	catch(e)
	{
		alert("MRNException:"+e);
	}
	return dynStr;

}

function ThalaJathiList( name)
{

	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:ThalaJathiList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		alert ('SYS:Name is Mandatory');
		return false;
	}
	var jathiName = new JathiName();
	var jathiArry = new Array(0,4,3,7,5,9);
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET7;
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	//dynStr+='<select '+name+'>';
	dynStr+='<select id="'+name+'JathiId" nameid="'+name+'"  name="'+name+'JathiName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

	for(var i=0; i<6; i++)
	{

	//	document.write(''+ i +'=' + eval('mel.raga'+i ) );
	dynStr+='<option value='+jathiArry[i]+'>'+jathiArry[i]+'-'+ eval('jathiName.jathi'+i ) + '</option>'; /*@@@*/
/*[@@@@
	dynStr+='<option value='+i+'>'+i +'-'+ eval('mel.raga'+i ) + '</option>'; 
@@@]*/
	
	}
	dynStr+='</select>';
	dynStr+='</td>';



	
	}
	catch(e)
	{
		alert("TJLException:"+e);
	}
	return dynStr;
}

function ThalaList( name)
{

	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:ThalaList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var talaName = new TalaName();
	var talaArry = new Array("","IOII", "IOI" , "OI"  , "IUO" , "IOO" , "IIOO","I");
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET8;
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	//dynStr+='<select '+name+'>';
	dynStr+='<select id="'+name+'TalaId" nameid="'+name+'"  name="'+name+'TakaName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

	for(var i=0; i<8; i++)
	{

	//	document.write(''+ i +'=' + eval('mel.raga'+i ) );
	dynStr+='<option value='+talaArry[i]+'>'+talaArry[i]+'-'+ eval('talaName.tala'+i ) + '</option>'; /*@@@*/
/*[@@@@
	dynStr+='<option value='+i+'>'+i +'-'+ eval('mel.raga'+i ) + '</option>'; 
@@@]*/
	
	}
	dynStr+='</select>';
	dynStr+='</td>';



	
	}
	catch(e)
	{
		alert("TJLException:"+e);
	}
	return dynStr;
}

function GovaiList( name)
{

	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:GovaiList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		alert ('SYS:Name is Mandatory');
		return false;
	}
	var govaiName = new GovaiName();
	var govaiArry = new Array("","SAMANMANDILAM", "VALIVIMANDALAM" , "MELIVUMANDILAM"  , "IRATTAIGOVAI" );
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET9;
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	//dynStr+='<select '+name+'>';
	dynStr+='<select id="'+name+'GovaiId" nameid="'+name+'"  name="'+name+'GovaiName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

	for(var i=0; i<5; i++)
	{

	//	document.write(''+ i +'=' + eval('mel.raga'+i ) );
	dynStr+='<option value="'+govaiArry[i] +'">'+govaiArry[i]+'-'+ eval('govaiName.govai'+i ) + '</option>'; /*@@@*/
/*[@@@@
	dynStr+='<option value='+i+'>'+i +'-'+ eval('mel.raga'+i ) + '</option>'; 
@@@]*/
	
	}
	dynStr+='</select>';
	dynStr+='</td>';
	
	}
	catch(e)
	{
		alert("GVLException:"+e);
	}
	return dynStr;
}


function ShowBasicClass( name)
{

	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:GovaiList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var govaiName = new GovaiName();
	var govaiArry = new Array("","SAMANMANDILAM", "VALIVIMANDALAM" , "MELIVUMANDILAM"  , "IRATTAIGOVAI" );
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
//	dynStr+=HMELCARNAMET9;
	dynStr+='<input type="button" class="cbutton"  id="'+name+'BasicClassId" nameid="'+name+'"  name="'+name+'BasicClassId"   value="Show">';
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	//dynStr+='<select '+name+'>';
	
	}
	catch(e)
	{
		alert("GVLException:"+e);
	}
	return dynStr;
}
function getJathiFormat(jathi,thala)
{
	var rtSt="";
	var thlformat="";
	var  spThala=thala.split(''); 
	for ( j=0;j<spThala.length;j++)
						{

							switch (spThala[j])
								{
									case 'I':
									thlformat =parseInt(jathi);
									break;
									case 'O':
									thlformat = 2;
									break;
									case 'U':
									thlformat = 1;
									break;
									default:
									thlformat="";
									break;

								}
						//	difAkah = difAkah + '|'+  thlfmt;
							rtSt	= rtSt +thlformat ;

						}

return rtSt;	
}

function getJathiFormatLength(jathi,thala)
{
	var rtSt=0;
	var thlformat=0;
	var  spThala=thala.split(''); 
	for ( j=0;j<spThala.length;j++)
						{

							switch (spThala[j])
								{
									case 'I':
									thlformat =parseInt(jathi);
									break;
									case 'O':
									thlformat = 2;
									break;
									case 'U':
									thlformat = 1;
									break;
									default:
									thlformat="";
									break;

								}
						//	difAkah = difAkah + '|'+  thlfmt;
							rtSt	= rtSt +thlformat ;

						}

return rtSt;	
}

function check(inp, val)
{
var i=0;
var str= inp.split('');
var ch1= -1;
var ch2= -1;
var ch3= -1;
var ch4= -1;
try
{

//	alert("str " +str);
if( str.length  <5 )
{
		if(str.length > 1)
		ch1= parseInt(str[0] );
		if(str.length > 2)
		ch2= parseInt(str[0] ) +  parseInt(str[1] );
		if(str.length > 3)
		ch3= parseInt(str[0] ) +  parseInt(str[1] ) +  parseInt(str[2] );
		if(str.length > 4)
		ch4= parseInt(str[0] ) +  parseInt(str[1] ) +  parseInt(str[2] )+  parseInt(str[3] );

//			alert("inp =" +inp+ "ch1 =" +ch1 + "ch2 =" +ch2 + "ch3 =" +ch3 + "ch4 =" +ch4 );

        if (ch1 == val || ch2 == val || ch3 == val || ch4 == val )
        return 1
}
}
catch(e)
{
        alert('check' +e);
}

        return 0;
}
/*[
function check(inp, val)
{
var i=0;
var str= inp.split('');
val = val;
if( val == 0 )
{
return 0;
}

	for ( i=0;i<str.length;i++)
	{
		if( str[i] == val)
		{	return 1;
		}
	}
	return 0;
}
]*/

function getOnePara(inpSwras,jathiTalam,jathiThalamLen,acharam)
{

var rtDyn="";
inpSwras=inpSwras.replace(/-/g,'');
inpSwras=inpSwras.replace(/|/g,'');
arrSwras=inpSwras.split('`');
acharam =parseInt(acharam);

//	getReqTimeToConcat(8, jathiThalamLen);

	var srlNo="";
	var rows="";
	rtDyn+= "<table border=2 class='wtable' border=2> " 

	for (var j=0; j<	arrSwras.length; j+=1)
	{
		var line=arrSwras[j]
		line=line.split('!');
	//<tr> <td class='ctext'> <center>Lesson :"+srlNo + "</center></td> </tr> </table>";

	//	alert('line len'+line.length);
	for (var i=0; i<line.length; i+=2)
	{
	//	alert(line);
		srlNo = line[i];
		rows  = line[i+1];
		arryRows = rows.split('');
	
	//	alert("srlNo" +srlNo);
	//	alert("rows" +rows);
//		alert(	doConcat(rows,getReqTimeToConcat(arryRows, jathiThalamLen)));

//		alert("dyn = <"+ framTable(doConcat(rows,getReqTimeToConcat(arryRows, jathiThalamLen)),1,jathiTalam,jathiThalamLen));

//		rtDyn+= framTable(doConcat(rows,getReqTimeToConcat(arryRows, jathiThalamLen)),1,jathiTalam,jathiThalamLen) ;
		//rtDyn+= doConcat(rows,getReqTimeToConcat(arryRows, jathiThalamLen)) ;
//		rtDyn+= doConcat(rows,1) ;
		//rtDyn+= getReqTimeToConcat(arryRows.length, jathiThalamLen)  + " len= " +jathiThalamLen; 

//		rtDyn+= "<table class='wtable'> <tr> <td class='ctext'> <center>Lesson :"+srlNo + "</center></td> </tr> </table>";
		//rtDyn+= "<tr><td class='ctext' colspan='64'> <center>Lesson :"+srlNo + "</center> </td> <td> <input type='text' id='Lesson "+srlNo +"' value="+ doConcat(rows,getReqTimeToConcat(parseInt(arryRows.length/acharam), jathiThalamLen)) +" > </td></tr> ";
		rtDyn+= "<tr><td class='ctext' colspan='64'> <table class='ctable'> <tr> <td> <center>Lesson :"+srlNo + "</center> </td> <td width=30%> <input type='hidden' id='Lesson"+srlNo +"' value="+ doConcat(rows,getReqTimeToConcat(parseInt(arryRows.length/acharam), jathiThalamLen)) +" >  	<input type='button' id='play' task='play' lesson='"+srlNo+"' value='play' onclick='javascript:onClick(this)'> <input type='button' id='pause' task='pause' lesson='"+srlNo+"' value='pause' onclick='javascript:onClick(this)'> <input type='button' id='stop' task='stop' value='stop' lesson='"+srlNo+"' onclick='javascript:onClick(this)'> </td></tr> </table> </td> </tr> ";

		if(acharam != 0)
		rtDyn+= framTable(doConcat(rows,getReqTimeToConcat(parseInt(arryRows.length/acharam), jathiThalamLen)),acharam,jathiTalam,jathiThalamLen) ;
		else
		rtDyn+= framTable(doConcat(rows,getReqTimeToConcat(arryRows.length, jathiThalamLen)),1,jathiTalam,jathiThalamLen) ;


	}
	}
	rtDyn+= "</table>"

return rtDyn;
	
}

function getReqTimeToConcat(n,d)
{
	var rtCount=0;
	var v=n;
//		alert("rtCount= "+rtCount + "n="+n +" d="+ d);

	while(v%d!= 0)
	{
		rtCount+=1;
		v = v +n;	
			if( rtCount > 64 )
			{
				alert("We can't end up with thalam properly");
				rtCount =0;
				break;

			}
//		alert("rtCount= "+rtCount + "n="+n  +" d="+ d +" n%d= " + n%d);
	}
	return rtCount;
}
function doConcat(inp,count)
{
	var rtVal=inp;
	for(var i=0; i<count; i++)	
	{
	rtVal+=inp;	
	}
	return rtVal;
}
function framTable(tblStr,vack,difAkah,thlfmt)
{
//var dy=st;
var dy="";
vack = parseInt(vack);
//alert('tblStr '+ tblStr)
tblStr=tblStr.split('');
endVal=thlfmt-1;
var swaraObj = new swara();
//	alert('tblStr .length ' +tblStr.length + 'vack=' +vack  + "difAkah ="+difAkah + "thlfmt" +thlfmt) ;
if( thlfmt != 0)
{
var thCount =0;
for ( i=0;i<tblStr.length;i+=vack, thCount ++)
{
//	alert('tblStr['+i+'] ' + tblStr[i] );

	if ( thCount%thlfmt == 0 )
	{

	dy = dy + sr;
	}

	if( check(difAkah , (thCount%thlfmt) ))
	{
		dy =dy+ sc;
		dy =dy + '|';
		dy =dy+ ed;
	}


	dy =dy+ sd;
	for ( l=0;l<vack;l++)
	{
		if( i+l < tblStr.length )
		{
			//alert(eval('swaraObj.'+ tblStr[i+l]));
			//dy =dy + tblStr[i+l];
			if(tblStr[i+l] != ',')
			dy =dy +eval('swaraObj.'+ tblStr[i+l]);
			else
			dy =dy + tblStr[i+l];
			
		}
	}

	dy =dy+ ed;
	if ( thCount%thlfmt ==  endVal)
	{
		dy =dy+ sc;
		dy =dy +  '||';
		dy =dy+ ed;
		dy = dy + er;
	}

}
//dy = dy + et;
}
return dy;

}


function AcharamList( name)
{

	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:ThalaJathiList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		alert ('SYS:Name is Mandatory');
		return false;
	}
//	var acharamName = new Acharam();
	var acharamArray = new Array(0,1,2,4,8,16);
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET10;
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	//dynStr+='<select '+name+'>';
	dynStr+='<select id="'+name+'AcharamId" nameid="'+name+'"  name="'+name+'AcharamName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

	for(var i=0; i<acharamArray.length; i++)
	{

	dynStr+='<option value='+acharamArray[i]+'>'+acharamArray[i]+ '</option>'; /*@@@*/
	
	}
	dynStr+='</select>';
	dynStr+='</td>';



	
	}
	catch(e)
	{
		alert("TJLException:"+e);
	}
	return dynStr;
}
function LangList(name)
{
	var dynStr="";
	try
	{	
		if(arguments.length< 1)
		{
			alert('SYS:ThalaJathiList:Argument is must for this function');
			return false;
		}

	if (name.length == 0)
	{
		alert ('SYS:Name is Mandatory');
		return false;
	}
//	var langName = new Array('','ENGLISH','TAMIL','TELEGU','KANADA','MALAYALAM','HINDI');
	var langArray = new Array('','ENG','TAM','TEL','KAN','MAL','HIN');
	var langName = new Array('','ENGLISH');
	var langArray = new Array('','ENG');
//	dynStr+='<td class="ctext">';
	dynStr+='<span>';
//	dynStr+='<label>';
	dynStr+=HMELCARNAMET11;
//	dynStr+='</label>';
//	dynStr+='</td>';
//	dynStr+='<td>';
	//dynStr+='<select '+name+'>';
	dynStr+='<select id="'+name+'LangId" nameid="'+name+'"  name="'+name+'LangName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

	for(var i=0; i<langArray.length; i++)
	{

	dynStr+='<option value='+langArray[i]+'>'+langName[i]+ '</option>'; /*@@@*/
	
	}
	dynStr+='</select>';
//	dynStr+='</td>';
	dynStr+='</span>';



	
	}
	catch(e)
	{
		alert("TJLException:"+e);
	}
	return dynStr;
	
}

function cust_post_onClick(obj)
{
	var statusId="statusId";
	var lessonId="lessonId";//id="lesson"
//	alert("postOnclick");	
	if (obj.id == "play")
	{
		var lesson= obj.getAttribute('lesson');
//		var valNId=document.getElementById(NId).value ;
//	alert("play");
		document.getElementById(lessonId).value	= lesson;
		document.getElementById(statusId).value	= "play";

		
		process();
	}
	else if  (obj.id == "pause")
	{
		document.getElementById(statusId).value	= "pause";
		process();
	}
	else if  (obj.id == "stop")
	{
		document.getElementById(statusId).value	= "stop";
		process();
	}
}
function cust_pre_onClick(obj)
{
//	alert("preOnclick");	
}
//setTimeout("process()",60);
function process()
{
	var clockId="clockId";
	var statusId="statusId";
	var offsetId="offsetId";
	var lessonId="lesson";//id="lesson"
		
		var nameid="name";
		var SId=nameid+"SId";
		var RId=nameid+"RId";
		var GId=nameid+"GId";
		var MId=nameid+"MId";
		var PId=nameid+"PId";
		var DId=nameid+"DId";
		var NId=nameid+"NId";
		 nameid="Lesson";
			var lessonId="lessonId";//id="lesson"

	var PlayNotes="";

	var valLessonId=document.getElementById(lessonId).value ;

	if(valLessonId.length != 0 )
	{	
	 document.getElementById("playNoteId").value=document.getElementById(nameid+valLessonId).value ;

	}
	 PlayNotes=document.getElementById("playNoteId").value ;

	var valSId=document.getElementById(SId).value ;
	var valRId=document.getElementById(RId).value ;
	var valGId=document.getElementById(GId).value ;
	var valMId=document.getElementById(MId).value ;
	var valPId=document.getElementById(PId).value ;
	var valDId=document.getElementById(DId).value ;
	var valNId=document.getElementById(NId).value ;

//	alert("test");
	if(	document.getElementById(statusId).value == 'play' )
	{
		document.getElementById(clockId).value = parseInt(document.getElementById(clockId).value) +1;

				
		var PlatNotesArry=PlayNotes.split('');	
		

		document.getElementById("noteId").value = PlatNotesArry[  parseInt(document.getElementById(clockId).value)% PlatNotesArry.length ];
		if (document.getElementById("noteId").value  != ',' )
		{
		document.getElementById(offsetId).value = parseInt(document.getElementById(clockId).value)% PlatNotesArry.length;
//play_multi_sound(PlatNotesArry[  parseInt(document.getElementById(clockId).value)% PlatNotesArry.length ] );
		var id =  mapSwaraToNote(document.getElementById("noteId").value+document.getElementById(eval(document.getElementById("noteId").value.toUpperCase()+"Id")).value,0);


		document.getElementById("noteCodeId").value= id;
		document.getElementById("noteWesternId").value= id.replace('_','#');
		play_multi_sound(	document.getElementById("noteCodeId").value);
		}

		setTimeout("process()",60*20);
	}
	else if (	document.getElementById(statusId).value == 'stop' )
	{
		document.getElementById(offsetId).value =  0;
		document.getElementById(clockId).value  =-1;
	}


}

function mapSwaraToNote(sra,pich)
{
	
var note = new Array( "G2","G_2", "A2", "A_2", "B2","C3", "C_3", "D3", "D_3", "E3", "F3", "F_3", "G3", "G_3", "A3", "A_3", "B3", "C4", "C_4", "D4", "D4", "D_4", "E4", "F4", "F_4", "G4")
//	alert(sra);
	rtStr=note[getSwarasThanam(sra)+5+pich]
	return	rtStr;
}

function getSwarasThanam(swaram)
{
	var rtInt=0;
	var lv_swaram=new Array( "s0","r0","r12","g0","r18","g6","g12","m0","m36","p0","D0","D2","N1","D3","N2","N3","S0");
	var lv_swaramThanam=new Array( 0,1,2,2,3,3,4,5,6,7,8,8,9,9,10,11,12);
	
	for(var i=0;i<lv_swaram.length;i++)
	{
	//	alert(" lv_swaram["+i+"]= " +lv_swaram[i] ); 
		if(lv_swaram[i] == swaram)
		{
			rtInt=lv_swaramThanam[i];
			break;
		}
	}
	
	return rtInt;
}
//alert('end cust.js');
