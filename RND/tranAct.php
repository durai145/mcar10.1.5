<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Heaerie Homespace </title>
<link rel="stylesheet" href="./css/apex.min.css" type="text/css">
<link rel="stylesheet" href="./css/jquery-ui.min.css" type="text/css">

<link rel="stylesheet" href="css/4_2.css" type="text/css">
<link rel="stylesheet" href="css/ussmenu.css" type="text/css">
<link rel="stylesheet" href="css/responsive_grid.css" type="text/css">

<script src="./css/desktop_all.min.js" type="text/javascript"></script>
<script src="./css/legacy.min.js" type="text/javascript"></script>
<script type="text/javascript" src="./css/modernizr.min.js"></script>
<script type="text/javascript" src="css/4_2.min.js"></script>
</head>
<body>
<!--[if lte IE 6]><div id="outdated-browser">You are using an outdated web browser. For a list of supported browsers, please reference the Oracle Application Express Installation Guide.</div><![endif]-->
<header id="uHeader">

  <div class="apex_grid_container clearfix">
    <div class="uss_cols apex_span_12">

      <div class="logoBar">
        <h1>
						<a href="" id="uLogo">
							<span>Heaerie's Homespace </span>
						</a>
					</h1>

        <div class="userBlock">
          <img src="css/f_spacer.gif" class="navIcon user" alt="">
          <span>DURAI145@HOTMAIL.COM</span>
						<a href="#">Mobile</a>
						<a href="#">Administration</a>
						<a href="#">Help</a>
						<a href="#">Logout</a>
						<a class="eLink" title="Edit" href="#">
		   </div>
      </div>
    </div>
  </div>
  <nav>
	<?php 
	$_SESSION["USRID"]=41;
	$_SESSION["PAGEGRPKEY"]="HOME";
	$_SESSION["PAGEKEY"]="TRAN_ACT";
	?>
	<?php include("getNavGrp.php") ?>
  </nav>
</header>
 <header id="uSubHeader">

<nav>
	<?php 
	$_SESSION["USRID"]=41;
	$_SESSION["PAGEGRPKEY"]="HOME";
	$_SESSION["PAGEKEY"]="TRAN_ACT";
	?>
	<?php include("getNavPage.php") ?>
  </nav>

</header>
<body>
	<?php include("hometran.php") ?>

</body>
