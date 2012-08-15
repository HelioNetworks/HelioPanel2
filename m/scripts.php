<?php
require 'header.php';
echo "<br>";

if (!isset($_GET['go'])) {
	?>
	<h2 class="head">Account Scripts</h2>
	<div style="text-align:center;margin-top:15px;">
	<a href="scripts.php?go=renew" class="button">Account Renewal</a><br /><br />
	<a href="scripts.php?go=domain" class="button">Main Domain Change</a><br /><br />
	<a href="scripts.php?go=dns" class="button">DNS Record Lookup</a><br /><br />
	<a href="scripts.php?go=status" class="button">Creation Status</a><br /><br />
	<a href="scripts.php?go=delete" class="button">Delete Account</a><br /><br />
	</div>
	
		<?php
}elseif ($_GET['go']== 'renew') {
	?>
<h2 class="head">Renew Account</h2>
	<div class="menu">
    <a href="scripts.php">&larr; Choose Another Script</a>
   </div>
	<table class="content" style="background-color:#F5F1E5;" align="center"><tr><td>
	<IFRAME src="http://www.heliohost.org/scripts/renew.php" WIDTH="100%" HEIGHT="300" SCROLLING="no" FRAMEBORDER="0" BORDER="0">Your mobile device does not support this script.</IFRAME>
	</td></tr></table>
		
	<?php
;}

elseif ($_GET['go']== 'domain') {
	?>
<h2 class="head">Change Main Domain</h2>
	<div class="menu">
    <a href="scripts.php">&larr; Choose Another Script</a>
   </div>
	<table class="content" style="background-color:#F5F1E5;" align="center"><tr><td>
	<IFRAME src="http://www.heliohost.org/scripts/domain.php" WIDTH="100%" HEIGHT="300" SCROLLING="no" FRAMEBORDER="0" BORDER="0">Your mobile device does not support this script.</IFRAME>
	</td></tr></table>
		
	<?php
;}
elseif ($_GET['go']== 'status') {
	?>
<h2 class="head">Account Creation Status</h2>
	<div class="menu">
    <a href="scripts.php">&larr; Choose Another Script</a>
   </div>
	<table class="content" style="background-color:#F5F1E5;" align="center"><tr><td>
	<IFRAME src="http://www.heliohost.org/scripts/status.php" WIDTH="100%" HEIGHT="300" SCROLLING="no" FRAMEBORDER="0" BORDER="0">Your mobile device does not support this script.</IFRAME>
	</td></tr></table>
		
	<?php
;}

elseif ($_GET['go'] == 'dns') {
	?>
<h2 class="head">DNS Record Lookup</h2>
	<div class="menu">
    <a href="scripts.php">&larr; Choose Another Script</a>
   </div>
	<table class="content" align="center"><tr><td>
	<IFRAME src="http://byrondallas.heliohost.org/php/tools/dns_records.php" WIDTH="100%" HEIGHT="300" SCROLLING="no" FRAMEBORDER="0" BORDER="0">Your mobile device does not support this script.</IFRAME>
	</td></tr></table>
	
	<?php
}elseif ($_GET['go'] == 'delete') {
	?>
<h2 class="head">Delete Account</h2>
	<div class="menu">
    <a href="scripts.php">&larr; Choose Another Script</a>
   </div>
	<table class="content" align="center"><tr><td>
	Sorry, but we do not allow you to delete your account from your mobile.
	We believe that you should take deleting your account very seriously,
	therefore please perform this action from your computer. Thank you.
	</td></tr></table>

	<?php
}
require 'menu.php';
require 'footer.php';

?>
