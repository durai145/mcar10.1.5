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
		Alert ('SYS:Name is Mandatory');
		return false;
	}
	var jathiName = new JathiName();
	var jathiArry = new Array(4,3,7,5,9);
	dynStr+='<td class="ctext">';
	dynStr+='<label>';
	dynStr+=HMELCARNAMET7;
	dynStr+='</label>';
	dynStr+='</td>';
	dynStr+='<td>';
	//dynStr+='<select '+name+'>';
	dynStr+='<select id="'+name+'JathiId" nameid="'+name+'"  name="'+name+'JathiName" dataType="OPTION"  onchange="javascript:onChange(this)" >';

	for(var i=0; i<5; i++)
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
