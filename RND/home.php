<html>
<?php
session_start();
if(!session_is_registered('myusername')){
header("location:index.php");
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Heaerie Homespace </title>
<link rel="stylesheet" href="./css/apex.min.css" type="text/css">
<link rel="stylesheet" href="./css/jquery-ui.min.css" type="text/css">

<link rel="stylesheet" href="css/4_2.css" type="text/css">
<link rel="stylesheet" href="css/responsive_grid.css" type="text/css">



<script src="./css/desktop_all.min.js" type="text/javascript"></script>
<script src="./css/legacy.min.js" type="text/javascript"></script>
<script type="text/javascript" src="./css/modernizr.min.js"></script>
<script type="text/javascript" src="css/4_2.min.js"></script>
<link rel="stylesheet" href="css/ussmenu.css" type="text/css">
</head>
<body>
<!--[if lte IE 6]><div id="outdated-browser">You are using an outdated web browser. For a list of supported browsers, please reference the Oracle Application Express Installation Guide.</div><![endif]-->
<header id="uHeader">

  <div class="apex_grid_container clearfix">
    <div class="apex_cols apex_span_12">

      <div class="logoBar">
        <h1>
						<a href="" id="uLogo">
							<span>Heaerie's Homespace </span>
						</a>
					</h1>

        <div class="userBlock">
          <img src="css/f_spacer.gif" class="navIcon user" alt="">
          <a href="#"> <?php  echo	$_SESSION["myusername"] ?> </a>						
	  <a href="#">Mobile</a>
						<a href="#">Administration</a>
						<a href="#">Help</a>
						<a href="#" id="logout">logout</a>
		   </div>
      </div>
    </div>
  </div>
  <nav>
	<?php 
//	$_SESSION["USRID"]=41;
//	$_SESSION["PAGEGRPKEY"]="HOME";
	?>
	<?php include("getNavGrp.php") ?>
  </nav>
</header>
 <header id="uSubHeader">

<nav>
	<?php 

//	echo  "_SESSION" . $_SESSION[UserId];
	//	$_SESSION["USRID"]=41;
	//	$_SESSION["PAGEGRPKEY"]="HOME";
	//	$_SESSION["PAGEKEY"]="HOME";
	?>
	<?php include("getNavPage.php") ?>

</nav>

</header>
<body>


<pre>
<?php
	print_r($_SESSION);
?>
</pre>
	<?php include("portlets.php") ?>


</body>


