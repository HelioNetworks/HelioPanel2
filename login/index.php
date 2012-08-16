<?php
error_reporting(E_ALL ^ E_NOTICE);

if (isset($_POST['username'])) {
	$post_data['user'] = $_POST['username'];
	$post_data['pass'] = $_POST['password'];
	$server = $_POST['server'];
	
	require '../cpanel.php';
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
	
	require '../cpanel.php';
	die;
}
?>
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
    </head>
    <body>
    	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li><a href="http://www.heliohost.org/home/">HelioHost</a></li>
				<li class="current_page_item"><a href="./">Login to HelioPanel</a></li>
				<li><a href="../about.php">About HelioPanel</a></li>
				<li><a href="http://www.helionet.org/index/">HelioNet</a></li>
			</ul>
		</div>
		<!-- end #menu -->
	</div>

		<div class="wrapper">
			<h1>Welcome to HelioPanel</h1>
			<h2>Login with your <span>cPanel</span> account.</h2>
			<div class="content">
				<div id="form_wrapper" class="form_wrapper">


					<form class="login active" method="post" action="index.php">
						<h3>Login</h3>
						<?php 
if (isset($_GET['error'])) { ?>
<span class="error"><b>Login Attemt Failed</b></span>
<?php } ?>
<?php 
if ($_GET['act'] == 'Logout') { ?>
<span class="error"><b>You have logged out of HelioPanel</b></span>
<?php } ?>

						<div>
							<label for="user">Username:</label>
							<input type="text" name="username" id="user" />
							<span class="space">This is an error</span>
						</div>
						<div>
							<label for="pass">Password:</label>
							<input type="password" name="password" id="pass" />
							<span class="space">This is an error</span>
						</div>
						<div>
						 <select name="server" class="black">
						<option value="">Please choose your server</option>
						<option value="stevie">Stevie</option><option value="johnny">Johnny</option></select>
						<span class="space">This is an error</span>
						</div>	
						<div class="bottom">
							<div class="remember"><input type="checkbox" name="remember" /><span>Keep me logged in</span></div>
							<input type="submit" value="Login"></input>

							<div class="clear"></div>
						</div>
					</form>
						

		<!-- The JavaScript -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(function() {
					//the form wrapper (includes all forms)
				var $form_wrapper	= $('#form_wrapper'),
					//the current form is the one with class active
					$currentForm	= $form_wrapper.children('form.active'),
					//the change form links
					$linkform		= $form_wrapper.find('.linkform');
						
				//get width and height of each form and store them for later						
				$form_wrapper.children('form').each(function(i){
					var $theForm	= $(this);
					//solve the inline display none problem when using fadeIn fadeOut
					if(!$theForm.hasClass('active'))
						$theForm.hide();
					$theForm.data({
						width	: $theForm.width(),
						height	: $theForm.height()
					});
				});
				
				//set width and height of wrapper (same of current form)
				setWrapperWidth();
				
				/*
				clicking a link (change form event) in the form
				makes the current form hide.
				The wrapper animates its width and height to the 
				width and height of the new current form.
				After the animation, the new form is shown
				*/
				$linkform.bind('click',function(e){
					var $link	= $(this);
					var target	= $link.attr('rel');
					$currentForm.fadeOut(400,function(){
						//remove class active from current form
						$currentForm.removeClass('active');
						//new current form
						$currentForm= $form_wrapper.children('form.'+target);
						//animate the wrapper
						$form_wrapper.stop()
									 .animate({
										width	: $currentForm.data('width') + 'px',
										height	: $currentForm.data('height') + 'px'
									 },500,function(){
										//new form gets class active
										$currentForm.addClass('active');
										//show the new form
										$currentForm.fadeIn(400);
									 });
					});
					e.preventDefault();
				});
				
				function setWrapperWidth(){
					$form_wrapper.css({
						width	: $currentForm.data('width') + 'px',
						height	: $currentForm.data('height') + 'px'
					});
				}
				
			});
        </script>
             <script src="js/jquery.dropkick-1.0.0.js" type="text/javascript" charset="utf-8"></script>
               <script type="text/javascript" charset="utf-8">
    $(function () {


$('.black').dropkick({
  theme: 'orange',
});

    });
  </script>

    </body>
</html>