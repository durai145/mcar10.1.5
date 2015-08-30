
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Dialog - Modal form</title>
	<link rel="stylesheet" href="../themes/base/jquery.ui.all.css">
	<script src="../jquery-1.7.2.js"></script>
	<script src="../external/jquery.bgiframe-2.1.2.js"></script>
	<script src="../ui/jquery.ui.core.js"></script>
	<script src="../ui/jquery.ui.widget.js"></script>
	<script src="../ui/jquery.ui.mouse.js"></script>
	<script src="../ui/jquery.ui.button.js"></script>
	<script src="../ui/jquery.ui.draggable.js"></script>
	<script src="../ui/jquery.ui.position.js"></script>
	<script src="../ui/jquery.ui.resizable.js"></script>
	<script src="../ui/jquery.ui.dialog.js"></script>
	<script src="../ui/jquery.effects.core.js"></script>
	<link rel="stylesheet" href="../demos.css">
	<style>
		body { font-size: 62.5%; }
		label, input { display:block; }
		input.text { margin-bottom:12px; width:95%; padding: .4em; }
		fieldset { padding:0; border:0; margin-top:25px; }
		h1 { font-size: 1.2em; margin: .6em 0; }
		div#users-contain { width: 350px; margin: 20px 0; }
		div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
		div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
		.ui-dialog .ui-state-error { padding: .3em; }
		.validateTips { border: 1px solid transparent; padding: 0.3em; }
	</style>
<script type="text/javascript" 
   src="../jquery-1.3.2.min.js"></script>
   <script type="text/javascript" language="javascript">

	function sendMail(obj,groupid,lname,fname,email,password)
	{
//"http://www.homespace.heaerie.com/mcar10.1.4/homeshare/signup_ac.php",
          $.post( 
             "signupmail.php",
             { lname:lname, fname: fname,email:email,password:password },
             function(data) {
                //$('#stage').html(data);
		alert("Result:" + data);
		}
		)
		obj.disabled=true;
	}

	function getSeqVal(seqName)
	{
		var div="stage";
		var url="grpid.php";
		var json={seqname:"GROUPID"};
		
	}
	function onPostReq(url,json,id,type)
	{
		//alert(json.seqname);
		var rtVal="";
             $.post( 
             url,
             json,
             function(data) 
		{
	//	alert(data + "<" + type + ">");
		if(type == 'DIV')
		$("#"+id).html(data);
		else if( type == 'OBJ')
		{
	//	alert("OBJ");	
		document.getElementById(id).value= data;
		}

		}
          )

	}
	

	function onClick()
	{
	//	alert("ON");
		var div="groupid";
		var url="grpid.php";
	var json={seqname:"GROUPID"};
		onPostReq(url,json,div,'OBJ');

	}




</script>
</head>
<body>
<p>Click on the button to load result.html file:</p>
<div id="stage" style="background-color:blue;">
STAGE
</div>
<input type="input" id="groupid" value="" />
<input type="button" id="driver" value="Load Data" />
<input type="button" id="acctdtl" value="acctDtl" onclick="javascript:onClick()">
</body>
</html>

