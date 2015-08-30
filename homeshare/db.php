<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Heaerie Home Space</title>
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
	<script>
	groupId="uss00000145";
		
	function onClick(inx)
	{
	//	alert("this.rowIndex" + inx.rowIndex);
//		$( "#users tbody" ).
		//$(" #users tbody tr:last").remove();
//deleteRow(0)
// not work		$(" #users tbody tr:eq("+inx+")").remove();
//		$(" #users tbody tr").eq( this.rowIndex).remove();
//		$(" #users tbody tr").eq( this.rowIndex).remove();
		$(inx).closest('tr').remove();
	}
	function onLoad()
	{
	//	alert("On Load");
		$("#users-contain").hide();

	}
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
		// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
		$( "#dialog:ui-dialog" ).dialog( "destroy" );
		
		var lname = $( "#lname" ),
			fname = $( "#fname" ),
			email = $( "#email" ),
			password = $( "#password" ),
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
		
		$( "#dialog-form" ).dialog({
		autoOpen: false,
	//		autoOpen: true,
			height: 400,
			width: 350,
			modal: true,
			buttons: {
				"Add User": function() {
					$("#users-contain").show();
					var bValid = true;
					allFields.removeClass( "ui-state-error" );

					bValid = bValid && checkLength( lname, "Last Name", 3, 30 );
					bValid = bValid && checkLength( fname, "First Name", 3, 30 );
					bValid = bValid && checkLength( email, "email", 6, 80 );
					bValid = bValid && checkLength( password, "password", 6, 16 );

					bValid = bValid && checkRegexp( fname, /^[a-z]([0-9a-z_])+$/i, "Username may consist of a-z, 0-9, underscores, begin with a letter." );
					// From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
					bValid = bValid && checkRegexp( email, /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i, "eg. ui@jquery.com" );
					bValid = bValid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );

					if ( bValid ) {

					
						$( "#users tbody" ).append( "<tr>" +
							"<td>" + fname.val() + "</td>" + 
							"<td>" + lname.val() + "</td>" + 
							"<td>" + email.val() + "</td>" + 
							"<td>" +  '<input type="password" readonly  value="'+ password.val()+ '" >' + "</td>" +
							"<td>" + '<input type="button" onclick="javascript:onClick(this)" value="remove" >' + "</td>"+
							"<td>" +   "<input type='button' onclick=\"javascript:sendMail(this,\' "+groupId+"\',\'"+fname.val() +"\',\'"+ lname.val()+"\',\'"+email.val()+"\',\'"+  password.val()+"\',\' india \')\" value='Activate' >"+  "</td>"+
						"</tr>" ); 
											//document.forms[0].action="signup_ac.php"
									//		document.forms[0].action="http://www.homespace.heaerie.com/mcar10.1.4/homeshare/signup_ac.php"
					///	document.forms[0].submit();
							$( this ).dialog( "close" );

					}
				},
				Cancel: function() {
					$( this ).dialog( "close" )
				}
			},
			close: function() {
				allFields.val( "" ).removeClass( "ui-state-error" );
			}
		});

		$( "#create-user" )
			.button()
			.click(function() {
				$( "#dialog-form" ).dialog( "open" );
			});
	});
	</script>
</head>
<body onload="onLoad()">

<div class="demo">

<div id="dialog-form" title="Add New User">
	<p class="validateTips">All form fields are required.</p>

	<form name="form1" method="post" action="signup_ac.php">
	<fieldset>
		<table border=0>
			<tr> 
			<td><label for="name">Last Name</label>
			</td>
			<td>
		<input type="text" name="lname" id="lname" placeholder="Last Name" class="text ui-widget-content ui-corner-all" />
		</td>
		</tr>
			<tr> 
			<td><label for="name">First Name</label>
			</td>
			<td>
		<input type="text" name="fname" id="fname"  placeholder="First Name"  class="text ui-widget-content ui-corner-all" />
		</td>
		</tr>
		<tr>
			<td>
		<label for="email">Email</label>
			</td>
			<td>
		<input type="text" name="email" id="email" value=""  placeholder="i.e. feedback@heaerie.com" class="text ui-widget-content ui-corner-all" />
		</td>
		</tr>
		<tr>
			<td>
		<label for="password">Password</label>
			</td>
			<td>
		<input type="password" name="password" id="password"   placeholder="********"  value="" class="text ui-widget-content ui-corner-all" />
		</td>
		</tr>
<!--
		<tr>
			<td colspan=1>
		 <input type="submit" name="Submit" value="Submit">
			</td>
			<td>
			<input type="reset" name="Reset" value="Reset">
		</td>
		</tr>
-->
		</table>
	</fieldset>
	</form>
</div>

<div id="dialog-form1" title="Login">

<form name="form1" method="post" action="checklogin.php">

	<fieldset>
		<table border=0>
			<tr> 
			<td>
			<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Member Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
<td>
</tr>

		</table>
	</fieldset>
	</form>
</div>

<div id="users-contain" class="ui-widget">
	<h1> Added Users:</h1>
	<table id="users" class="ui-widget ui-widget-content">
		<thead>
			<tr class="ui-widget-header ">
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
<button id="create-user">Sign In</button>

</div><!-- End demo -->



<div class="demo-description">
<p>
Note: If you sign up with heaerie space , your are agreed to terms and condition of Heaerie,GSL.
</p>
</div><!-- End demo-description -->

</body>
</html>
