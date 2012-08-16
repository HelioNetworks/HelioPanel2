				<div id="sidebar">
					<ul>
						<li>
							<h2>Latest Tweet</h2>
							<a href="https://twitter.com/heliohost" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @heliohost</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<table class="content" align="center"><tr>
<td valign="middle"><img src="/heliopanel/images/twitter.png"></td>
<td>

<?php 
function get_status($twitter_id, $hyperlinks = true) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://twitter.com/statuses/user_timeline/heliohost.xml?count=1");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $src = curl_exec($ch);
    curl_close($ch);
    preg_match('/<text>(.*)<\/text>/', $src, $m);
    $status = htmlentities($m[1]);
    if( $hyperlinks ) $status = ereg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]", "<a target=\"_parent\" href=\"\\0\">\\0</a>", $status);
    return($status);
}

echo get_status('Heliohost');
?>

</td>
</tr></table>
						</li>
										<?php if (isset($_SESSION['username'])) { ?><li><h2></h2><a class="super button orange" href="login/?act=Logout">Logout</a></li><?php } ?>
										<li><h2></h2><a href="about.php">About HelioPanel</a></li>
					</ul>
				</div>
				</div>
				</div>
				<!-- end #sidebar -->
