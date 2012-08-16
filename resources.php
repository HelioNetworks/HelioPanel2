<?php $current="resources"; ?>
<?php include ("inc/header.php"); ?>
<?php include ("inc/menu.php"); ?>
<?php include ("inc/logo.php"); ?>
				<div id="content">
<?php if (!isset($_GET['go'])) {
?>
					<div class="post">
						<h2 class="title"><a href="#">Resources</a></h2>
						<div class="entry">
              <p>	
   <a href="resources.php?go=guide" class="button orange">HelioHost Guide &rarr;</a><br /><br />
	<a href="resources.php?go=faq" class="button orange">Frequently Asked Questions &rarr;</a><br /><br />
	<a href="resources.php?go=facts" class="button orange">Server Facts &rarr;</a><br /><br />
	<a href="http://heliohost.grd.net.pl/monitor/" class="button orange" target="_blank">Server Monitor &rarr;</a><br /><br />
	<a href="scripts.php?go=dns" class="button orange">DNS Checker &rarr;</a><br /><br />
	<a href="http://twitter.com/heliohost" class="button orange" target="_blank">Twitter &rarr;</a><br /><br />
	<a href="http://www.helionet.org/index/index.php?showtopic=7178" class="button orange" target="_blank">Common Support Questions &rarr;</a><br /><br />
	<a href="resources.php?go=terms" class="button orange">Terms of Service &rarr;</a><br /><br />
</p>
						</div>
					</div>
<?php
}elseif ($_GET['go']== 'terms') {
?>
   <a href="resources.php" class="button orange">&larr; Back</a><br /><br />
					<div class="post">
						<h2 class="title"><a href="http://wiki.helionet.org/Terms" target="_blank">Terms of Service</a></h2>
						<div class="entry">
            <p>By signing up with HelioHost for any service, you agree to the following Terms. Failure to comply with these terms may result in termination of your account.</p>
              <ol>
                <li>Your site will contain no illegal content.</li>
                <li>You may not infringe on any copyrights through your site.</li>
                <li>Your site will not be of a pornographic nature and will refrain from providing pictures and/or photographs of nude men and women.</li>
                <li>Your site will not email, personal message, instant message, or communicate any kind of "spam," or unsolicited bulk advertising of any kind.</li>
                <li>Everything displayed on your site will be your property. HelioHost assumes no responsibility for any content displayed by customers of our services.</li>
                <li>We will not be held responsible for loss of content, revenue, or traffic in the event of a systems failure</li>
                <li>We reserve the right to change the Terms of Service with or without prior notification.</li>
                <li>We reserve the right to delete, change, or edit your account or your content with or without prior notification, including, but not limited to cases arising from abuse of these Terms.</li>
                <li><strong>WE WILL NOT BE HELD RESPONSIBLE FOR ANY LOSSES THAT OCCUR IN ANY CONDITIONS THROUGH OR AS A RESULT OF OUR SERVICES</strong></li>
              </ol>
							</div>
					</div>
<?php
}elseif ($_GET['go'] == 'guide') {
?>
   <a href="resources.php" class="button orange">&larr; Back</a><br /><br />
					<div class="post">
						<h2 class="title"><a href="http://www.cl58services.co.cc/heliohost/v2/guide.html" target="_blank">Holistic HelioHost Guide</a></h2>
						<div class="entry">
	<div id="page-wrap">
	     <div id="guide">
					
    		<ul class="nav">
                <li class="nav-one"><a href="#heliohost" class="current">HelioHost</a></li>
                <li class="nav-two"><a href="#helionet">HelioNet</a></li>
                <li class="nav-three"><a href="#account">Account Scripts</a></li>
                <li class="nav-five last"><a href="#support">Support</a></li>
            </ul>
    		
    		<div class="list-wrap">
    		
    			<ul id="heliohost">
    			<h3>Hosting Features</h3>
    			<p>HelioHost offers a wide variety of features. Though this makes HelioHost the best free web host, it can be confusing at first. This will help you see exactly what we have to offer and how to access the features.</p>
    				<a href="http://www.heliohost.org/home/features" class="button orange" target="_blank">See all of our hosting features &rarr;</a><br />
    			<h3>About HelioHost</h3>
    			<p>Find out exactly what HelioHost is who runs this excellent service.</p>
    				<a href="http://www.heliohost.org/home/about" class="button orange" target="_blank">About HelioHost &rarr;</a><br />
    			<h3>Terms of Service</h3>
    			<p>Before using HelioHost, make sure you read and agree to the Terms of Service to prevent account suspension.</p>
    				<a href="resources.php?go=terms" class="button orange" target="_blank">Read the terms of service &rarr;</a><br />
    			</ul>
        		 
        		 <ul id="helionet" class="hide">
                <p>HelioNet is the forum through which support for HelioHost is conducted.  In addition to having a <a href="http://www.helionet.org/index/forum/56-general-discussion/">general discussion</a> forum, there are forums for asking <a href="http://www.helionet.org/index/forum/48-questions/" target="_blank">HelioHost-related questions</a> and <a href="http://www.helionet.org/index/forum/45-customer-service/" target="_blank">solving problems with your account</a>.  There is also a place to <a href="http://www.helionet.org/index/forum/4-contact-helionet/" target="_blank">contact the HelioHost team</a> about non-hosting questions.  Finally, HelioNet is home to the very important <a href="http://www.helionet.org/index/forum/1-news/" target="_blank">news forum</a>.  All news about HelioHost from downtime to new features to website competitions will be posted to that forum.  Follow us on twitter or check the News forum regularly to always know what is happening with HelioHost.</p>
        		 </ul>
        		 
        		 <ul id="account" class="hide">
                <p>Many of the common account tasks have been automated and are available through HelioPanel.  Go to the <a href="scripts.php">Scripts page</a>, or select an account script from the list below.</p><br />
        		    <li><a href="http://www.cl58services.co.cc/heliopanel/scripts.php?go=renew">Renew Inactive Account</a></li>
    				<li><a href="http://www.cl58services.co.cc/heliopanel/scripts.php?go=domain">Change Main Domain</a></li>
    				<li><a href="http://www.cl58services.co.cc/heliopanel/scripts.php?go=status">Check Status of a New Account</a></li>
    				<li><a href="http://www.cl58services.co.cc/heliopanel/scripts.php?go=status">Delete Account</a></li>
        		 </ul>
        		 
        		 <ul id="support" class="hide">
                <p>HelioHost support is done exclusively through the the following tools:</p>
        		    <li><a href="resources.php?go=faq">Frequently Asked Questions</a></li> 
        		    <li><a href="http://www.helionet.org/index/" target="_blank">Support Forums @ HelioNet</a></li> 
        		    <li><a href="scripts.php">Account Scripts</a></li>
        		    <li><a href="wiki.php">Wiki</a></li>
        		    <li><a href="http://www.heliohost.org/home/support/chat" target="_blank">IRC Live Chat</a></li>
        		    <p>HelioHost does not provide support via phone or email.</p>
        		 </ul>
        		 
    		 </div> <!-- END List Wrap -->
		 
		 </div> <!-- END Organic Tabs (Example One) -->
	
	</div>
						</div>
					</div>
<?php
}elseif ($_GET['go'] == 'facts') {
?>
   <a href="resources.php" class="button orange">&larr; Back</a><br /><br />
					<div class="post">
						<h2 class="title"><a href="#">Server Facts</a></h2>
						<div class="entry">
                <ol>
                  <li>Stevie and Johnny both host user accounts</li>
                  <li>Stevie hosts nameserver 1</li>
                  <li>Cody hosts HelioHost.org and HelioNet.org</li>
                  <li>Cody hosts nameserver 2</li>
                  <li>Stevie and Charlie are physical servers</li>
                  <li>Cody and Johnny are virtual servers</li>
                  <li>Cody and Johnny are hosted on Charlie</li>
                </ol>
						</div>
					</div>
<?php
}elseif ($_GET['go'] == 'faq') {
?>
   <a href="resources.php" class="button orange">&larr; Back</a><br /><br />
					<div class="post">
						<h2 class="title"><a href="http://www.cl58services.co.cc/heliohost/v2/faq.html" target="_blank">FAQs</a></h2>
						<div class="entry">
<div id="faqs">
		            <p>This FAQ will answer many questions that are asked often on HelioNet.  Please refer to this FAQ before posting on HelioNet to 					save yourself as well as the support admins/moderators some time.</p>
				<br />
				<p><strong>This FAQ addresses <u>specific</u> questions. For a more holistic guide to HelioHost, read the <a href="http://www.helionet.org/index/index.php?showtopic=7178" target="_blank">Commonly Asked Questions post</a> on HelioNet.</strong></p>
<span>Your homepage says "Professional-Grade Hosting", but your support sucks/isn't helping me/is run by 5 volunteers, what gives?</span>
			<div>
		            <p>There is a difference between "Professional-Grade Hosting" and "Professional-Grade Customer Support." Most people are used to having dedicated customer support staff that will answer every little question; this comes standard with paid hosting. However, we don't do that here. Among the five of us, we have the collective know
ledge and technical expertise of any other support staff, but in order for us to help you, we expect from you a certain competency. You must try to spell and use grammar correctly (to the best of your ability). You must provide necessary information (ex. username and domain name). You must be able to read instructions, and you must be able to follow instructions. We will treat you with respect and professionalism if you follow these guidelines. We will probably be very annoyed if u tyep liek thi5.</p>
			</div>
<span>I log in frequently but am still receiving inactivity emails, what gives?</span>
			<div>
		            <p>To ensure that your logins are logged, use the cPanel login form at the bottom of <a href="http://www.heliohost.org/home/" target="_blank">HelioHost.org</a> to login.</p>
			</div>

<span>Why must all posts on HelioNet be in English?</span>
			<div>
		            <p>The support staff is fluent and reliable only in English.</p>
			</div>
<span>How do I fix a problem with an addon domain?</span>
			<div>
		            <p>Refer to the following HelioNet post: <a href="http://www.helionet.org/index/index.php?showtopic=5553" target="_blank">http://www.helionet.org/index/index.php?showtopic=5553</a></p>
			</div>
<span>Why does HelioHost crash?</span>
			<div>
		            <p>Currently we are running about 20000 different accounts on one server, Stevie. Sometimes, that's a bit too much for Stevie or some user will abuse resources, both causing the server to crash. We try to fix this as quickly as we can. Since the server and cPanel are handling such a high volume of users, errors are bound to come up. We also try to fix these ASAP. Also, when djbob works on the server, he occasionally screws up, which also causes crashes <img src="http://www.helionet.org/index/style_emoticons/default/wink.gif" alt="wink emoticon">.</p>
			</div>
<span>Why don't you have more than one server?</span>
			<div>
		            <p>We now have two! Signup for the new one, Johnny, from the HelioHost website.</p>
			</div>
<span>Why was my account suspended?</span>
			<div>
		            <p>If you have not broken our <a href="resources.php?go=terms">Terms of Service</a>, then you probably were suspended for inactivity. Renew your account <a href="scripts.php?go=renew">here</a>.
If you have overused cron or have broken any of the other ToS, shame on you.</p><br />
<p>It is also possible that this was an error in our system.  If you suspect that this is the case, report the error in a new post <a href="http://www.helionet.org/index/index.php?showforum=81" target="_blank">here</a>.
			</div>
<span>Why does my new subdomain show a "Queued" page.</span>
			<div>
		            <p>All domain and subdomain changes take approximately one day to go into effect. Seeing the queued page is normal and only means the change hasn't taken effect yet.
<br />If you continuously see this page, try clearing your browser cache. Also see <a href="http://www.helionet.org/index/index.php?showtopic=8604" target="_blank">this HelioNet post</a></p>
			</div>
<span>Why can't I log in?</span>
			<div>
		            <p>If you just registered, please wait 48 hours for your cPanel account to become active. If you have waited that time and still see a Account Queued page, try refreshing your browser's cache.
If you are still experiencing problems, make sure you are entering your username in all lowercase letters, i.e. "wizard", not "Wizard" or "WIZARD". </p>
			</div>
<span>How do I keep my account active/from being suspended?</span>
			<div>
		            <p>Login to cPanel, HelioPanel, or HelioPanel Mobile at least once a month.</p>
		            <p>By using HelioPanel, your last login date has been set to the current time. Your account will remain active for another 30 days.</p>
			</div>
<span>What is a Daily Signup Limit and why is it stopping me from registering?</span>
			<div>
		            <p>Each server has a daily limit for sign-ups so that it doesn't crash from all the people wanting to use HelioHost. The sign-up limit resets each day at 12:00AM PST/8PM GMT.</p>
			</div>
<span>My account was deleted.  Can I get my data back?</span>
			<div>
		            <p>No. We do not keep backups of your data nor is it our responsibility to (See the <a href="resources.php?go=terms">Terms of Service</a>). You must backup your own data regularly.
However, if your HelioHost cPanel account was deleted due to inactivity, feel free to create a new account.</p>
			</div>
<span>Can I have more than one account?</span>
			<div>
		            <p>No.  It's one account per user.</p><br />
				<p>If you would like to have one account on Stevie and one on Johnny, you may do so by request only (post in the customer service forum on HelioNet).
			</div>
<span>How do I delete my hosting account?</span>
			<div>
		            <p><a href="scripts.php?go=del">Click here to delete your account via HelioPanel</a></p>
				<br />
				<p>*Note: To delete your HelioNet account, post a topic in the <a href="www.helionet.org/index/index.php?showforum=4" target="_blank">Contact HelioNet</a> forum.</p>
			</div>

<span>How do I change my main domain?</span>
			<div>
		            <p><a href="scripts.php?go=domain">Click here to change your main domain via HelioPanel.</a></p>
				<br />
				<p>*Note: As an alternative to changing your main domain, consider using parked, addon, and/or sub-domains.  See <a href="http://wiki.helionet.org/Parked,_Addon_and_Sub_Domains" target="_blank">this wiki article</a> for more information.
			</div>
<span>What are the nameservers for HelioHost?</span>
			<div>
				<ol>
					<li>ns1.heliohost.org</li>
					<li>ns2.heliohost.org</li>
				</ol>
			</div>
<span>Can I PM an administrator for help?</span>
			<div>
		            <p><strong>No</strong>, do not PM the administrators expecting support unless we explicitly tell you to. Please use the Customer Service forum instead.  Also, please <strong><u><em>provide your domain name, username, and server name up front</strong></u></em> so we don't have to waste time asking. Thank you.</p>
			</div>
<span>The server is slow/Feature XYZ doesn't work/Something's wrong with my account/etc.</span>
			<div>
		            <p>Please post the issue in the Customer Service forum and we will try to solve the problem.  Please <strong><u><em>provide your domain name, username, and server name up front</strong></u></em> so we don't have to waste time asking. Thank you.</p>
			</div>
<span>Can Feature XYZ be installed?</span>
			<div>
		            <ul>
				<li>If you need a system-wide feature installed, post your request on our <a href="http://www.google.com/moderator/#16/e=a5c91" target="_blank">Google Moderator page</a>.</li>
				<li>Stuff like phpBB and Wordpress can be installed via <a href="http://wiki.helionet.org/Softaculous" target="_blank">Softaculous</a>.</li>
			</ul>
			</div>
<span>Can I use SSH?</span>
			<div>
		            <p>No. We don't offer SSH for security reasons.</p>
			</div>
<span>I can't seem to install phpBB via source.</span>
			<div>
		            <p>Please see <a href="http://www.helionet.org/index/index.php?showtopic=5180&view=findpost&p=46062" target="_blank">this HelioNet thread</a>.</p>
			</div>
<span>Why don't my WordPress permalinks work?</span>
			<div>
		            <p>Please see <a href="http://wordpress.org/support/topic/356829#post-1462937" target="_blank">this thread</a> on the WordPress forums.</p>
			</div>
<span>Where is djbob?</span>
			<div>
		            <p>He's around.</p>
			</div>
<span>Your hosting SUCKS! So do YOU!!!</span>
			<div>
		            <p>Please see <a href="http://www.helionet.org/index/index.php?showtopic=4723&view=findpost&p=46231" target="_blank">this</a> and <a href="http://s3.zetaboards.com/The_Aftermath/topic/304216/1/" target="_blank">this</a>.</p>
			</div>
<span>I still have a question about Helio<u>host</u>.</span>
			<div>
		            <p>Post in the <a href="http://www.helionet.org/index/index.php?showforum=48" target="_blank">Questions</a> forum and we'll try to help you the best we can..</p>
			</div>
</div>						</div>
					</div>
<?php
}
?>




					
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
<?php include ("inc/sidebar.php"); ?>
<?php include ("inc/footer.php"); ?>