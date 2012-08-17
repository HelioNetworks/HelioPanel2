<?php $current="scripts"; ?>
<?php include ("inc/header.php"); ?>
<?php include ("inc/menu.php"); ?>
<?php include ("inc/logo.php"); ?>
				<div id="content">
<?php if (!isset($_GET['go'])) {
?>
					<div class="post">
						<h2 class="title"><a href="#">Account Scripts</a></h2>
						<div class="entry">
              <p>	
   <a href="scripts.php?go=renew" class="button orange">Account Renewal &rarr;</a><br /><br />
	<a href="scripts.php?go=domain" class="button orange">Main Domain Change &rarr;</a><br /><br />
	<a href="scripts.php?go=status" class="button orange">Creation Status &rarr;</a><br /><br />
	<a href="scripts.php?go=del" class="button orange">Delete Account &rarr;</a><br /><br />
</p>
						</div>
					</div>
<?php
}elseif ($_GET['go'] != 'dns' && $_GET['go'] != 'del') {
?>
   <a href="scripts.php" class="button orange">&larr; Choose another script</a><br /><br />
					<div class="post">
						<div class="entry">
<IFRAME src="http://www.heliohost.org/scripts/<?php echo $_GET['go']; ?>.php" WIDTH="100%" HEIGHT="300" SCROLLING="no" FRAMEBORDER="0" BORDER="0">Your mobile device does not support this script.</IFRAME>
						</div>
					</div>
<?php
}elseif ($_GET['go'] == 'del') {
?>
					<div class="post">
						<div class="entry">
                <p style="color:red;font-size:15px;font-weight:bold;">Your account will be permanently deleted and cannot be recovered. Are you sure?</p>
                <p><a href="scripts.php?go=delete" class="button red large">YES, DELETE MY ACCOUNT</a> <a href="scripts.php" class="button green super">No, Go Back</a></p>
                <p>You will need to confirm your account details before deleting.</p>
						</div>
					</div>
<?php
}
?>




					
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
<?php include ("inc/sidebar.php"); ?>
<?php include ("inc/footer.php"); ?>