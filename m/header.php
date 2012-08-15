<?php
session_start();
error_reporting(0);

if (!isset($_SESSION['username'])) {
	header("location:login.php");
}
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
