	<div id="menu-wrapper">
		<div id="menu">
			<ul class="dropdown">
				<li<?php if ($current=="home"){?> class="current_page_item"<?php ;}?>><a href="index.php">Home</a></li>
				<li<?php if ($current=="status"){?> class="current_page_item"<?php ;}?>><a href="status.php">Server Status</a></li>
				<li<?php if ($current=="scripts"){?> class="current_page_item"<?php ;}?>><a href="scripts.php">Account</a></li>
				<li<?php if ($current=="resources"){?> class="current_page_item"<?php ;}?>><a href="resources.php">Resources</a></li>
				<li><a href="http://<?php echo $_SESSION['server']; ?>.heliohost.org:2082" id="cpanel" target="_blank">cPanel</a>
            <ul class="sub_menu">
        			 <li><a href="https://<?php echo $_SESSION['server']; ?>.heliohost.org:2083" target="_blank">Secure Connection</a></li>
        		</ul>
        	</li>
				<li><a href="http://www.helionet.org/index/" target="_blank">Support</a>
				   <ul class="sub_menu">
                <li><a href="resources.php?go=faq">FAQ</a></li> 
        		    <li><a href="http://www.helionet.org/index/" target="_blank">Support Forums</a></li> 
        		    <li><a href="scripts.php">Account Scripts</a></li>
        		    <li><a href="http://wiki.helionet.org/" target="_blank">Wiki</a></li>
        		    <li><a href="http://www.heliohost.org/home/support/chat" target="_blank">IRC Live Chat</a></li>
        		</ul>
        	</li>
				<li><a href="http://www.heliohost.org/home/" target="_blank">HelioHost</a></li>
			</ul>
		</div>
		<!-- end #menu -->
	</div>