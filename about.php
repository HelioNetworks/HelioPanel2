<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>HelioPanel</title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dr+Sugiyama|Oswald' rel='stylesheet' type='text/css'>
<link href="/heliopanel/css/style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/heliopanel/css/buttons.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/heliopanel/css/tabs.css" rel="stylesheet" type="text/css" media="screen" />
<!-- BEGIN MOBILE DETECTION -->
<?php

if (isset($_COOKIE['mobile']))
  {}
  else {
    echo '<script type="text/javascript">
    if (screen.width <= 699) {
    document.location = "m/about.php";
    }
    </script>';}
?>
<!-- END MOBILE DETECTION -->
</head>
<body>
<?php if (isset($_SESSION['username'])) { 
  include ("inc/menu.php"); 
  include ("inc/logo.php"); 
 } else { ?>  
	<div id="menu-wrapper">
		<div id="menu">
			<ul class="dropdown">
				<li><a href="http://www.heliohost.org/home/">HelioHost</a></li>
				<li><a href="login/">Login to HelioPanel</a></li>
				<li class="current_page_item"><a href="about.php">About HelioPanel</a></li>
				<li><a href="http://www.helionet.org/index/">HelioNet</a></li>
				<li><a href="http://www.heliohost.org/home/" target="_blank">HelioHost</a></li>
			</ul>
		</div>
		<!-- end #menu -->
	</div> 
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="./">HelioPanel</a></h1>
				<p>From HelioHost</p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">			  <?php }  ?>
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#">About HelioPanel</a></h2>
						<div class="entry">
							<p>HelioPanel is a control panel offered to the user's of HelioHost's services, which allows them to easily take full control of their website without facing any problems. The aim of HelioPanel is to resolve any common issues that user's face every day, and to make website management much easier. All users can access HelioPanel with their existing cPanel username and password. HelioPanel Mobile is a version of HelioPanel optimized for mobile devices for making managing your web hosting easy on-the-go.</p>
							<p><small>&copy; Copyright Helio Networks 2012. All trademarks and copyrights are property of their respective owners.</small><p><small>Version 2.0.1</small></p>
						</div>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>

				<!-- end #content -->
<?php include ("inc/sidebar.php"); ?>
<?php include ("inc/footer.php"); ?>