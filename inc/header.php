<?php
session_start();
error_reporting(0);

if (!isset($_SESSION['username'])) {
	header("location:login/");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>HelioPanel</title>
<link href='http://fonts.googleapis.com/css?family=Dr+Sugiyama|Oswald|Italianno' rel='stylesheet' type='text/css'>
<link href="/heliopanel/css/style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/heliopanel/css/buttons.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/heliopanel/css/tabs.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="/heliopanel/js/jquery-1.3.1.min.js"></script>	
<script type="text/javascript" language="javascript" src="/heliopanel/js/hoverIntent.js"></script>
<script type="text/javascript" language="javascript" src="/heliopanel/js/jquery.dropdown.js"></script>

<!-- BEGIN MOBILE DETECTION -->
<?php

if (isset($_COOKIE['mobile']))
  {}
  else {
    echo '<script type="text/javascript">
    if (screen.width <= 699) {
    document.location = "m/";
    }
    </script>';}
?>
<!-- END MOBILE DETECTION -->
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js'></script>
    <script src="js/organictabs.jquery.js"></script>
    <script>
        $(function() {
                
            $("#guide").organicTabs({
                "speed": 200
            });
    
        });
    </script>
<script type="text/javascript">
$(document).ready(function() {
	$('#faqs span').each(function() {
		var tis = $(this), state = false, answer = tis.next('div').hide().css('height','auto').slideUp();
		tis.click(function() {
			state = !state;
			answer.slideToggle(state);
			tis.toggleClass('selected',state);
		});
	});
});

</script></head>
<body>
