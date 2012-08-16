<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>HelioPanel | Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Expand, contract, animate forms with jQuery wihtout leaving the page" />
        <meta name="keywords" content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
     <link rel="stylesheet" type="text/css" href="css/style.css" />
          <link rel="stylesheet" type="text/css" href="css/dropkick.css" />
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/ChunkFive_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h2',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h3',{ textShadow: '1px 1px #000'});
			Cufon.replace('.back');
		</script>
<?php

if (isset($_COOKIE['mobile']))
  {}
  else {
    echo '<script type="text/javascript">
    if (screen.width <= 699) {
    document.location = "/heliopanel/m/login.php";
    }
    </script>';}
?>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
		<style type="text/css">
		#buttonholder a{
         text-decoration: none;
}
.button {
   background-image: -webkit-linear-gradient(top, rgba(255,162,2,1) 0%,rgba(255,112,2,1) 100%);
   background-image:    -moz-linear-gradient(top, rgba(255,162,2,1) 0%,rgba(255,112,2,1) 100%);
   background-image:     -ms-linear-gradient(top, rgba(255,162,2,1) 0%,rgba(255,112,2,1) 100%);
   background-image:      -o-linear-gradient(top, rgba(255,162,2,1) 0%,rgba(255,112,2,1) 100%);
   background-image:         linear-gradient(top, rgba(255,162,2,1) 0%,rgba(255,112,2,1) 100%);
   -webkit-box-shadow: 0px 1px 0px 0px rgba(255,255,255,0.57)inset, 0px 20px 0px 0px rgba(255,255,255,0.18)inset, 0px 5px 0px 0px rgba(213,96,0,1), 0px -1px 0px 0px rgba(255,255,255,0.07)inset, 0px 5px 2px 0px rgba(0,0,0,0.46);
      -moz-box-shadow: 0px 1px 0px 0px rgba(255,255,255,0.57)inset, 0px 20px 0px 0px rgba(255,255,255,0.18)inset, 0px 5px 0px 0px rgba(213,96,0,1), 0px -1px 0px 0px rgba(255,255,255,0.07)inset, 0px 5px 2px 0px rgba(0,0,0,0.46);
           box-shadow: 0px 1px 0px 0px rgba(255,255,255,0.57)inset, 0px 20px 0px 0px rgba(255,255,255,0.18)inset, 0px 5px 0px 0px rgba(213,96,0,1), 0px -1px 0px 0px rgba(255,255,255,0.07)inset, 0px 5px 2px 0px rgba(0,0,0,0.46);
   border: solid 1px rgba(255,120,2,1);
   -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
           border-radius: 4px;
   padding: 10px 30px 10px 30px;
   display: inline-block;
   -webkit-transition: all 0.1s linear;
      -moz-transition: all 0.1s linear;
           transition: all 0.1s linear;
   font-size: 15px;
   color: rgba(255,255,255,1);
   font-weight: bold;
   text-shadow: 0px -1px 0px rgba(0,0,0,0.53)
}
.button:hover {
   background-image: -webkit-linear-gradient(top, rgba(255,175,3,1) 0%,rgba(255,112,2,1) 100%);
   background-image:    -moz-linear-gradient(top, rgba(255,175,3,1) 0%,rgba(255,112,2,1) 100%);
   background-image:     -ms-linear-gradient(top, rgba(255,175,3,1) 0%,rgba(255,112,2,1) 100%);
   background-image:      -o-linear-gradient(top, rgba(255,175,3,1) 0%,rgba(255,112,2,1) 100%);
   background-image:         linear-gradient(top, rgba(255,175,3,1) 0%,rgba(255,112,2,1) 100%);
}
.button:active {
   -webkit-box-shadow: 0px 1px 0px 0px rgba(255,255,255,0.57)inset, 0px 20px 0px 0px rgba(255,255,255,0.18)inset, 0px 1px 0px 0px rgba(213,96,0,1), 0px -1px 0px 0px rgba(255,255,255,0.07)inset, 0px 1px 2px 0px rgba(0,0,0,0.1);
      -moz-box-shadow: 0px 1px 0px 0px rgba(255,255,255,0.57)inset, 0px 20px 0px 0px rgba(255,255,255,0.18)inset, 0px 1px 0px 0px rgba(213,96,0,1), 0px -1px 0px 0px rgba(255,255,255,0.07)inset, 0px 1px 2px 0px rgba(0,0,0,0.1);
           box-shadow: 0px 1px 0px 0px rgba(255,255,255,0.57)inset, 0px 20px 0px 0px rgba(255,255,255,0.18)inset, 0px 1px 0px 0px rgba(213,96,0,1), 0px -1px 0px 0px rgba(255,255,255,0.07)inset, 0px 1px 2px 0px rgba(0,0,0,0.1);
   -webkit-transform: translateY(3px);
      -moz-transform: translateY(3px);
           transform: translateY(3px);
}
		
		</style>

    </head>
    <body>
	<div id="menu-wrapper">
		<div id="menu">
			<ul class="dropdown">
				<li><a href="http://www.heliohost.org/home/">HelioHost</a></li>
				<li class="current_page_item"><a href="./signup.php" target="_blank">Signup</a>
          <ul class="submenu">
            <li><a href="signup.php?plan=1">Stevie</a></li>
            <li><a href="signup.php?plan=9">Johnny</a></li>
          </ul>
				</li>
				<li><a href="./">Login to HelioPanel</a></li>
				<li><a href="/heliopanel/about.php">About HelioPanel</a></li>
				<li><a href="http://www.helionet.org/index/" target="_blank">HelioNet</a></li>
			</ul>
		</div>
		<!-- end #menu -->
	</div> 

		<div class="wrapper">
			<div class="content">
 <?php if (!isset ($_GET["plan"])) { ?>
			<h1>Welcome to HelioHost</h1>
          <h2>Server Selection</h2>
          <p>HelioHost owns two physical servers: Stevie and Charlie. While Stevie is configured to interface our system directly with hardware, Charlie is configured to host virtual servers that, in turn, allow multiple instances of our system to interface with hardware. Johnny is one such virtual server.</p><br />
<div class="serverload"><b>Server Load</b></div>
To prevent overcrowding on one server the load that both servers are currently experiencing is shown here. The lower the number the better it is. Unless you have a specific reason to choose one server over the other, such as your website will require the use of ASP.NET in which case your only choice is Johnny, it is generally better to sign up on whichever server has the lowest load.<br/>
<img src="http://www.heliohost.org/load/server_load_s.gif" height="47" width="291" border="0"><img src="http://www.heliohost.org/load/server_load_j.gif" height="47"width="291"  border="0">
<div class="serveruptime"><b>Server Uptime</b></div>
The server uptime below is calculated by checking both servers every minute of every day from several remote locations to see if the websites are being displayed correctly. This information is then compiled from the past seven days of performance and the total percentage of uptime is displayed.<br/>
<img src="http://www.heliohost.org/load/server_uptime_s.gif" height="47"width="291" border="0"><img src="http://www.heliohost.org/load/server_uptime_j.gif"height="47"width="291"  border="0">
<ul>
<li><b>Stevie</b><br/>
Stevie offers only a subset of HelioHost's features. Specifically, Stevie does not have Ruby on Rails, ASP.NET, or Java/JSP. However, as a result Stevie is significantly more stable than Johnny. If you don't need any of the above three scripting platforms, we suggest that you select Stevie. Sign up <a href="http://www.heliohost.org/home/signup/stevie">here</a>.</li>
<li><b>Johnny</b><br/>
Johnny is a virtual server on Charlie. As such, Johnny is more limited in terms of system resources. However, Johnny offers the full Heliohost feature set. While this may sometimes lead to instability, it allows HelioHost to isolate such instability to the customers that need it. <span style="color:red;">Please note that if you intend to use <b>Ruby on Rails, ASP.NET, or Java/JSP</b> you must sign up on Johnny because Stevie does not offer these services.</span> Sign up <a href="http://www.heliohost.org/home/signup/johnny">here</a>.
</li>
</ul>

<h1>Ready to get started?</h1>
<div id="buttonholder"><a class="button" href="signup.php?plan=1">Signup on Stevie</a>&nbsp;&nbsp;&nbsp;<a class="button" href="signup.php?plan=9">Signup on Johnny</a></div>
<?php }elseif ($_GET['plan'] == '1' || $_GET['plan'] == '9') { ?>

			<h1>HelioHost Signup</h1>
			<?php if ($_GET['plan'] == '1') { ?><h2>Stevie</h2><?php } elseif ($_GET['plan'] == '9') {?><h2>Johnny</h2><?php } ?>
<IFRAME src="http://www.heliohost.org/scripts/signup.php?plan=<?php echo $_GET['plan']; ?>" WIDTH="100%" HEIGHT="600" SCROLLING="no" FRAMEBORDER="0" BORDER="0">Your mobile device does not support this script.</IFRAME>
<h2>Change your mind?</h2>
<div id="buttonholder"><a class="button" href="signup.php">Change Servers</a></div>
<?php } else { ?>
<div id="buttonholder"><a class="button" href="signup.php">Signup</a>&nbsp;&nbsp;&nbsp;<a class="button" href="./">Login</a></div>
<?php } ?>
            </div>
      </div>
    </body>
</html>