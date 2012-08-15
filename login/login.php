<?php
/*session_start();
error_reporting(0);

if (isset($_SESSION['username'])) {
	header("location:index.php");
}*/

error_reporting(E_ALL ^ E_NOTICE);

if (isset($_POST['username'])) {
	$post_data['user'] = $_POST['username'];
	$post_data['pass'] = $_POST['password'];
	$server = $_POST['server'];
	
	require 'cpanel.php';
	die;
}

if ($_GET['act'] == 'Logout') {
	session_start();
	session_destroy();
	setcookie ("Username", "", time() - 1209600); // Two Weeks
	setcookie ("Password", "", time() - 1209600); // Two Weeks
	setcookie ("Server", "", time() - 1209600); // Two Weeks
}

if (isset($_COOKIE['username']) || $_COOKIE['username'] != '') {
	$post_data['user'] = $_POST['username'];
	$post_data['pass'] = $_POST['password'];
	$server = $_POST['server'];
	
	require 'cpanel.php';
	die;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>HelioPanel Mobile | Login</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="functions.js" type="text/javascript"></script>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<link rel="apple-touch-icon" href="images/icon.png"/>
<link href='http://fonts.googleapis.com/css?family=Dr+Sugiyama|Oswald' rel='stylesheet' type='text/css'>
<link href="images/startup.png" rel="apple-touch-startup-image" />
<?php

if (isset($_COOKIE['mobile']))
  {}
  else {
    echo '<script type="text/javascript">
    if (screen.width <= 699) {
    document.location = "m/login.php";
    }
    </script>';}
?>

</head>
<body>
<div class="logo"><h1><a href="./login.php">HelioPanel <span>Mobile</span></a></h1></div>

<h2 class="head"><b>Login</b></h2>
<div class="content">
<?php 
if (isset($_GET['error'])) { ?>
<p class="error"><b>Login Attempt Failed</b></p>
<?php } ?>
<?php 
if ($_GET['act'] == 'Logout') { ?>
<p class="error"><b>You have logged out of HelioPanel Mobile</b></p>
<?php } ?>

<form method="post" action="login.php">
<table width="300" align="center">
<tr><td><div align="right">Username:</div><td><input type="text" name="username"></td></tr>
<tr><td><div align="right">Password:</div><td><input type="password" name="password"></td></tr>
<tr><td><div align="right">Server:</div><td><select name="server"><option value="stevie">Stevie</option><option value="johnny">Johnny</option></select></td></tr>
</table>
<div class="buttonHolder">

<input type="checkbox" name="remember" id="remember"><label for="remember">Remember Me</label>
<div class="buttonHolder">
<input type="submit" value="Login" style="font-weight:bold;font-size:18px;">
</div>
</form>

</div>
</div>
<br>

<div class="webapp">Install our web app by tapping <img src="images/shareicon.png"><br>and choose 'Add to Home Screen'.</div>
<div class="footer">
    <p>&copy; Copyright 2012 HelioHost.  All rights reserved.  <a href="http://www.heliohost.org/m/">HelioHost</a> | <a href="about.php">About</a></p>
    <p><img src="images/rsz_hhlogo.png" alt="Logo" onClick="window.location.reload()" /></p>
</div>
</body>
</html>