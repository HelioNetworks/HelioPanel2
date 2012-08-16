	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li<?php if ($current=="home"){?> class="current_page_item"<?php ;}?>><a href="index.php">Home</a></li>
				<li<?php if ($current=="status"){?> class="current_page_item"<?php ;}?>><a href="status.php">Server Status</a></li>
				<li<?php if ($current=="scripts"){?> class="current_page_item"<?php ;}?>><a href="scripts.php">Account</a></li>
				<li<?php if ($current=="resources"){?> class="current_page_item"<?php ;}?>><a href="resources.php">Resources</a></li>
				<li><a href="http://<?php echo $_SESSION['server']; ?>.heliohost.org:2082" id="cpanel" target="_blank">cPanel</a></li>
				<li><a href="http://www.helionet.org/index/" target="_blank">Support</a></li>
				<li><a href="http://www.heliohost.org/home/" target="_blank">HelioHost</a></li>
			</ul>
		</div>
		<!-- end #menu -->
	</div>

