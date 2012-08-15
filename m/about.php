<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>HelioPanel Mobile</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="functions.js" type="text/javascript"></script>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<link rel="apple-touch-icon" href="images/icon.png"/>
<link href='http://fonts.googleapis.com/css?family=Dr+Sugiyama|Oswald' rel='stylesheet' type='text/css'>
<link href="images/startup.png" rel="apple-touch-startup-image" />
</head>
<body>
<div class="logo"><h1><a href="./">HelioPanel <span>Mobile</span></a></h1></div>

<h2 class="head">Welcome to HelioPanel Mobile</h2>
<div class="content">
<p>HelioPanel is a control panel offered to the user's of HelioHost's services, which allows them to easily take full control of their website without facing any problems. The aim of HelioPanel is to resolve any common issues that user's face every day, and to make website management much easier.  All users can access HelioPanel with their existing cPanel username and password.  HelioPanel Mobile is a version of HelioPanel optimized for mobile devices for making managing your web hosting easy on-the-go.</p>
</div>

<div class="content"><small>&copy;  Copyright Helio Networks 2012. All trademarks and copyrights are property of their respective owners.<br />Version 1.0.0</small></div>
<?php
if (isset($_SESSION['username'])) {
require 'menu.php';
require 'footer.php';
}

if (!isset($_SESSION['username'])) { ?>
<div class="menu">
    <a href="login.php">Login</a>
</div>
<div class="footer">
    <p>&copy; Copyright 2012 HelioHost.  All rights reserved.  <a href="http://www.heliohost.org/m/">HelioHost</a></p>
    <p><img src="images/rsz_hhlogo.png" alt="Logo" onClick="window.location.reload()" /></p>
</div>
</body>
</html>

<?php ;} ?>