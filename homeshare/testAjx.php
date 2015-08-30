<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Sortable - Portlets</title>
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

	<link rel="stylesheet" href="../css/demos.css">
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
	div#users-contain { width: 350px; margin: 20px 0; }
	div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
	div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
	.ui-dialog .ui-state-error { padding: .3em; }
	.validateTips { border: 1px solid transparent; padding: 0.3em; }
	.validateTips { border: 1px solid transparent; padding: 0.3em; }

	</style>
	<script>


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
					//bValid = bValid && checkLength( password, "password", 6, 16 );

					bValid = bValid && checkRegexp( fname, /^[a-z]([0-9a-z_])+$/i, "Username may consist of a-z, 0-9, underscores, begin with a letter." );
					// From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
					bValid = bValid && checkRegexp( email, /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i, "eg. ui@jquery.com" );
					bValid = bValid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );

					if ( bValid ) {

					
						$( "#users tbody" ).append( "<tr>" +
							"<td>" + fname.val() + "</td>" + 
							"<td>" + lname.val() + "</td>" + 
							"<td>" + email.val() + "</td>" + 
						//	"<td>" +  '<input type="password" readonly  value="'+ password.val()+ '" >' + "</td>" +
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
			//	alert("Add Roomate");
				$( "#dialog-form" ).dialog( "open" );
			});
	});

		function onLoad()
	{
	//	alert("On Load");
		$("#users-contain").hide();

	}
	


	</script>
</head>
<body onload="javascript:onLoad()">






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
		<!--tr>
			<td>
		<label for="password">Password</label>
			</td>
			<td>
		<input type="password" name="password" id="password"   placeholder="********"  value="" class="text ui-widget-content ui-corner-all" />
		</td>
		</tr-->
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



<div class="demo">

<div class="column_queue">


	<div class="portlet">
		<div class="portlet-header">Pending Queue</div>
		<div class="portlet-content">
		<table id="idPnfQue" class="ui-widget ui-widget-content">
		<thead>

			<tr class="ui-widget-header">
				<th>Tran Ref#
				</th>	
				<td>Descr
				</td>	
			</tr>
			</thead>

		</table>

		
		</div>
	</div>
	<div class="portlet">
		<div class="portlet-header">Approved Queue</div>
		<div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
	</div>
	<div class="portlet">
		<div class="portlet-header">My Details </div>
		<div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
		
	</div>
	<div class="portlet">
		<div class="portlet-header">My Group Details</div>
		<div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
		
	</div>
	<div class="portlet">
		<div class="portlet-header">Pending Transaction</div>
		<div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
	</div>
	<div class="portlet">
		<div class="portlet-header">Approved Queue</div>
		<div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
	</div>
	<div class="portlet">
		<div class="portlet-header">Room Member</div>
		<div class="portlet-content" >


		<div  id="users-contain"  class="ui-widget">
		<h1> Added Users:</h1>
		<table id="users" class="ui-widget ui-widget-content">
		<thead>
			<tr class="ui-widget-header ">
				<th>Last Name</th>
				<th>First Name</th>
				<th>Email</th>
			<!--	<th>Password</th>  -->
				<th>Remove</th>
				<th>Activate</th>
			</tr>
		</thead>
		<tbody>


		</tbody>
	</table>
	</div>

	<table>
			<tr>
				<td colspan=10>
					<button id="create-user">Sign Up for Your Roomat</button>

				</td>
			</tr>	
	</table>
	
	</div>
	</div>
	<div class="portlet">
		<div class="portlet-header">Transaction Activity</div>
		<div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
	</div>

</div>





</div><!-- End demo -->



<div class="demo-description">
<p>
	Enable portlets (styled divs) as sortables and use the <code>connectWith</code>
	option to allow sorting between columns.
</p>
</div><!-- End demo-description -->



</body>
</html>
