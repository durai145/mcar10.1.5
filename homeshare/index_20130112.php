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
		body
		{
		 font-size: 62.5%; 
		background-image:url('../img/hs.jpg');
		background-color:#cccccc;
		}
		
		label, input { display:block; }
		input.text { margin-bottom:12px; width:95%; padding: .4em; }
		fieldset { padding:0; border:0; margin-top:25px; }
		h1 { font-size: 1.2em; margin: .6em 0; }
		div#users-contain { width: 350px; margin: 20px 0; }
		div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
		div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
		.ui-dialog .ui-state-error { padding: .3em; }
		.validateTips { border: 1px solid transparent; padding: 0.3em; }
		.fm1validateTips { border: 1px solid transparent; padding: 0.3em; }

		.toggler { width: 100%; height: 100%; position: relative; }
		#button { padding: .5em 1em; text-decoration: none; }
		#effect {position: relative;  width: 40%;  padding: 1em; letter-spacing: 0; font-size: 1.2em; border: 1px solid #000; background: #eee; color: #333; }
		.newClass { text-indent: 40px; letter-spacing: .4em; width: 100%; height: 100%; padding: 30px; margin: 10px; font-size: 1.6em; }
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

		$("#dialog-form1").draggable();
		$( "#button" ).click(function() {
			$( "#effect" ).toggleClass( "newClass", 1000 );
			return false;
		});
		// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
		$( "#dialog:ui-dialog" ).dialog( "destroy" );
		
			var lname = $( "#lname" ),
			fname = $( "#fname" ),
			email = $( "#email" ),
			password = $( "#password" ),
			allFields = $( [] ).add( lname ).add(fname).add( email ).add( password ),
			tips = $( ".validateTips" );

			var 
			fm1email = $( "#myusername" ),
			fm1password = $( "#mypassword" ),
			fm1Fields = $( [] ).add(fm1email).add( fm1password ),
			fm1tips = $( ".fm1validateTips" );

		function updateTips( t ) {
			tips
				.text( t )
				.addClass( "ui-state-highlight" );
			setTimeout(function() {
				tips.removeClass( "ui-state-highlight", 1500 );
			}, 500 );
		}
		function updateTipsFm1( t ) {
			fm1tips
				.text( t )
				.addClass( "ui-state-highlight" );
			setTimeout(function() {
				fm1tips.removeClass( "ui-state-highlight", 1500 );
			}, 500 );
		}

		function updateTipsifm1( t ) {
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

		function checkLengthfm1( o, n, min, max ) {
//o- object n- name , min max
		//	alert("FM1");
			
			if ( o.val().length > max || o.val().length < min ) {
		//	alert("false");
				o.addClass( "ui-state-error" );
				updateTipsFm1( "Length of " + n + " must be between " +
					min + " and " + max + "." );
				return false;
			} else {
			//	alert("true");
				return true;
			}
		//	alert("FM2");
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
						$("#users-contain").show();
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
		$( "#login-user" )
			.button()
			.click(function() {
			var bValid= true;
			//	alert("test");
//				$( "#dialog-form" ).dialog( "open" );
				//	alert("A:###:000:"+ bValid);

					bValid = bValid && checkLengthfm1( fm1email, "Username", 6, 80 );
				//	alert("A:###:001:"+ bValid);
					bValid = bValid && checkLengthfm1( fm1password, "password", 6, 16 );
				//	alert("A:###:002:"+ Valid);
					if ( bValid )
					{
						document.forms[0].submit();
						return true;
					}
						return false;

				
			//	document.forms[0].submit();
			});
	});
	</script>
</head>
<body onload="onLoad()" bg>

<div class="demo">

<div id="dialog-form" title="Add New User">
	<p class="validateTips">All form fields are required.</p>

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
</div>



<div id="dialog-form1"  title="Login" class="ui-widget toggler">

<form name="form1" method="post" action="checklogin.php">

<div class="toggler">
	<div id="effect" class="newClass ui-corner-all">
		<img src="../img/facicon.png" width="30px" height="20px" />
			Heaerie's Home Space
	<fieldset>
		<table border=0
			<tr> 
			<td>
			<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" class="ui-widget-header"><strong>Member Login </strong></td>
</tr>
<tr>
<td colspan="3" >
	<center>
	<p class="fm1validateTips">All form fields are required.</p>
	</center>
</td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"   placeholder="someone@example.com"  class="text ui-widget-content ui-corner-all"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"  placeholder="Password"   class="text ui-widget-content ui-corner-all"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>
<button id="login-user" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover ui-state-active" role="button" aria-disabled="false"><span class="ui-button-text">Login</span></button>
</td>
</tr>
</table>
<td>
</tr>

		</table>
	</fieldset>
	</div>
</div>
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
<!--button id="create-user">Sign In</button-->
<button id="create-user">Sign In</button>

</div><!-- End demo -->

<!--a href="#" id="button" class="ui-state-default ui-corner-all">Run Effect</a-->
<div class="demo-description">
<p>
Note: If you sign up with heaerie space , your are agreed to terms and condition of Heaerie,GSL.
</p>
</div><!-- End demo-description -->

</body>
</html>
