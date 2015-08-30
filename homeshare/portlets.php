<!DOCTYPE html>
<html lang="en">

<?php
ob_start(); 
// 461085
include('config.php');
session_start();
if(!session_is_registered('myusername')){
header("location:index.php");
}
?>

<head>
	<meta charset="utf-8">
	<title>Heaerie's Homespace Dashboard</title>
	<link rel="stylesheet" href="../themes/base/jquery.ui.all.css">
	<script src="../jquery-1.7.2.js"></script>
	<script src="../ui/jquery.ui.core.js"></script>
	<script src="../ui/jquery.ui.widget.js"></script>
	<script src="../ui/jquery.ui.mouse.js"></script>
	<script src="../ui/jquery.ui.sortable.js"></script>
	<script src="../ui/jquery.ui.button.js"></script>
	<script src="../ui/jquery.ui.draggable.js"></script>
	<script src="../ui/jquery.ui.position.js"></script>
	<script src="../ui/jquery.ui.resizable.js"></script>
	<script src="../ui/jquery.ui.dialog.js"></script>
	<script src="../ui/jquery.effects.core.js"></script>

	<script language="javascript" src="../javascript/field_02.js"> </script>
	<script language="javascript" src="../javascript/field_03.js"> </script>
	<script language="javascript" src="../javascript/dates.js"> </script>
	<script language="javascript" src="../javascript/xml.js"> </script>
	<script language="javascript" src="javascript/portlets_cust.js"> </script>
	<script language="javascript" src="../javascript/validate.js"> </script>
<script language="javascript" src="javascript/map.js"> </script>

<link rel="stylesheet" href="../css/demos.css"> </link>
	<style>
	.column { width: 170px; float: left; padding-bottom: 100px; }
	.column_acctdtl{ width: 80%; float: left; padding-bottom: 800px; }
	.column_queue { width: 80%; float: left; padding-bottom: 100px; }
	.portlet { margin: 0 1em 1em 0; }
	.portlet-header { margin: 0.3em; padding-bottom: 4px; padding-left: 0.2em; }
	.portlet-header .ui-icon { float: right; }
	.portlet-content { padding: 0.4em; }
	.ui-sortable-placeholder { border: 1px dotted black; visibility: visible !important; height: 50px !important; }
	.ui-sortable-placeholder * { visibility: hidden; }
	input.text { margin-bottom:12px; width:95%; padding: .4em; }
	fieldset { padding:0; border:0; margin-top:25px; }
	h1 { font-size: 1.2em; margin: .6em 0; }
	div#users-contain { width: 600px; margin: 20px 0; }
	div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
	div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
	.ui-dialog .ui-state-error { padding: .3em; }
	.validateTips { border: 1px solid transparent; padding: 0.3em; }

	</style>


<?php
/*[
echo("<pre>\n");
print_r($_POST);
echo("</pre>\n");

echo("<pre>\n");
print_r($_SESSION);
echo("</pre>\n");
]*/

?>

	<script>


var glGroupId    ="<?php echo $_SESSION['GroupId'] ?>"; 
var glUserId     ="<?php echo $_SESSION['UserId'] ?>"; 



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


	var div="UserDtl";
	var url="getUserDetail.php";
	var json={USRID:glUserId};
	onPostReq(url,json,div,'DIV');

	 div="GrpMember";
	 url="getGroupMember.php";
	 json={USRID:glUserId};
	onPostReq(url,json,div,'DIV');

	 div="txnDtl";
	 url="getUserTxn.php";
	 json={USRID:glUserId};

	onPostReq(url,json,div,'DIV');


div='StmtMonthDiv';
url='getStmtDescDb.php';
json={USRID:glUserId, GROUPID:glGroupId };
onPostReq(url,json,div,'DIV'); 





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

	$(function() {
groupId="uss00000145";

//variable declaration
	var lname         = $( "#lname" ),
		fname     = $( "#fname" ),
		email      = $( "#email" ),
		password  = $( "#password" ),
		allFields = $( [] ).add( lname ).add(fname).add( email ).add( password ),
		tips = $( ".validateTips" );



	function updateTips( t ) {
			tips
				.text( t )
				.addClass( "ui-state-highlight" );
			setTimeout(function() {
				tips.removeClass( "ui-state-highlight", 1500 );
			}, 500 );
		}

		function checkLength( o, n, min, max ) {
			if ( o.val().length > max || o.val().length < min ) {
				o.addClass( "ui-state-error" );
				updateTips( "Length of " + n + " must be between " +
					min + " and " + max + "." );
				return false;
			} else {
				return true;
			}
		}

		function checkRegexp( o, regexp, n ) {
			if ( !( regexp.test( o.val() ) ) ) {
				o.addClass( "ui-state-error" );
				updateTips( n );
				return false;
			} else {
				return true;
			}
		}


		$( ".column_acctdtl" ).sortable({
			connectWith: ".column"
		});
		$( ".column" ).sortable({
			connectWith: ".column"
		});
		$( ".column_queue" ).sortable({
			connectWith: ".column_queue"
		});

		$( ".portlet" ).addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
			.find( ".portlet-header" )
				.addClass( "ui-widget-header ui-corner-all" )
				.prepend( "<span class='ui-icon ui-icon-minusthick'></span>")
				.end()
			.find( ".portlet-content" );

		$( ".portlet-header .ui-icon" ).click(function() {
			$( this ).toggleClass( "ui-icon-minusthick" ).toggleClass( "ui-icon-plusthick" );
			$( this ).parents( ".portlet:first" ).find( ".portlet-content" ).toggle();
		});

		$( ".column" ).disableSelection();
		$( ".column_queue" ).disableSelection();
		$( ".column_acctdtl" ).disableSelection();

		$( "#dialog-form" ).dialog({
		autoOpen: false,
	//		autoOpen: true,
			height: 350,
			width: 613 ,
			modal: true,
			buttons: {
				Cancel: function() {
					$( this ).dialog( "close" )
				}
			},
			close: function() {
				allFields.val( "" ).removeClass( "ui-state-error" );
			}
		});
			$( "#logout" )
			.button()
			.click(function() {
			document.forms[0].action="index.php";
			document.forms[0].submit();	
			});
			$( "#Make-Trans" )
			.button()
			.click(function() {
			document.forms[0].action="hometran.php";
			document.forms[0].submit();	
			});

			$( "#create-user" )
			.button()
			.click(function() {
			document.forms[0].action="adduser.php";
			document.forms[0].submit();	
			//	alert("Add Roomate");
			//	$( "#dialog-form" ).dialog( "open" );
			});
	});

		function onLoad()
	{
	//	alert("On Load");
		$("#users-contain").hide();

	}
	
	function showTran(trn)
	{
	//	alert(trn);
		//$("#users-contain").show();
		$( "#dialog-form" ).dialog( "open" );

		div="UserTxnDtl";
		url="getUserTxnDtl.php";
		json={TBKTTXNID:trn};

		onPostReq(url,json,div,'DIV');




	}


	</script>
</head>
<body onload="javascript:onLoad()">





<div id="dialog-form" title="Transation Details" style="width: 80%; min-height: 0px; height: 80%;" >

	<div id="UserTxnDtl">
	</div>
</div>



<div class="demo">

<div class="column_queue">


	<div class="portlet">
		<div class="portlet-header">Login  Details </div>
		<div class="portlet-content" id="UserDtl"><img src="../img/load.gif"> </img></div>

	</div>

	<form>
			<button id="Make-Trans"> Make Transaction </button>
			<button id="create-user"> Add Member </button>
			<button id="logout"> logout </button>
			<!--a href="#" onclick="showTran(767);"> 767 </a-->
	</form>
	<!--div>

				<div id="users-contain" class="ui-widget">
					<h1> Added Users:</h1>
						<table id="users" class="ui-widget ui-widget-content">
							<thead>
							<tr class="ui-widget-header ">
								<th>Group Id</th>
								<th>User Id</th>
								<th>Last Name</th>
								<th>First Name</th>
								<th>Email</th>
								<th>Password</th>
								<th>Remove</th>
								<th>Activate</th>
							</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
				</div>

	</div-->


	<div class="portlet">
		<div class="portlet-header">Group Members </div>
		<div class="portlet-content" id="GrpMember"><img src="../img/load.gif"> </img></div>

	</div>
	<div class="portlet">


		<!--div id="StmtMonthDiv"> </div-->
		<div class="portlet-header">

  <table> <tr> <td>Transaction Details  </td> <td>  <div id="StmtMonthDiv"> </div> </td> </tr> </table> </div>
		<div class="portlet-content" id="txnDtl"><img src="../img/load.gif"> </img></div>

	</div>





</div><!-- End demo -->



<div class="demo-description">
<p>
	<per>Copyright 2013 &copy Heaerie,GSL.Vellore </per>
</p>
</div><!-- End demo-description -->


</body>
</html>
