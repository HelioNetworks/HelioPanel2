<?php $current="status"; ?>
<?php include ("inc/header.php"); ?>
<?php include ("inc/menu.php"); ?>
<?php include ("inc/logo.php"); ?>
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#">Server Status</a></h2>
						<div class="entry">
							<p><?php
        if ($_SESSION['server'] == 'stevie'){
          $serverid = 2;
        }elseif ($_SESSION['server'] == 'johnny'){
          $serverid = 1;
        }
          
       
       ini_set("default_socket_timeout","05");
       $f=fopen("http://area5".$serverid.".heliohost.org/serverstatus/","r");
       $r=fread($f,1000);
       fclose($f);
       if(strlen($r)>1) {
         echo "<img src=images/online.png>HTTP";
       }else{
         echo "<img src=images/offline.png>HTTP";
       }
        
        $ftptest = ftp_connect('ftp.area5'.$serverid.'.heliohost.org');
        
        if (!$ftptest){
          echo "&nbsp; &nbsp; &nbsp; <img src=images/offline.png>FTP";
        }else{
          echo "&nbsp; &nbsp; &nbsp; <img src=images/online.png>FTP";
        }
        
        ini_set('mysql.connect_timeout', 5); 
        $mysqltest = mysql_connect($_SESSION["server"].'.heliohost.org', 'area5'.$serverid.'_mobile', 'test123');
        
        if (!$mysqltest){
          echo "&nbsp; &nbsp; &nbsp; <img src=images/offline.png>MySQL";
        }else{
          echo "&nbsp; &nbsp; &nbsp; <img src=images/online.png>MySQL";
        }
        
?></p>
<p><a class="large button orange" href="http://heliohost.grd.net.pl/monitor/" target="_blank">Server Monitor &rarr;</a></p>
						</div>
					</div>

					<div class="post">
						<h2 class="title"><a href="#">Server Load</a></h2>
						<div class="entry">
<p>
<?php
        if ($_SESSION['server'] == 'stevie')
            {echo "<img src='http://krydos.heliohost.org/load/images/server_load_stevie.gif' />";}
          elseif ($_SESSION['server'] == 'johnny'){
            echo "<img src='http://krydos.heliohost.org/load/images/server_load_johnny.gif' />";}
?>
</p>
<p>Ideal status is below 20.</p>
						</div>
					</div>

					<div class="post">
						<h2 class="title"><a href="#">Server Uptime</a></h2>
						<div class="entry">
<p><?php
        if ($_SESSION['server'] == 'stevie')
            {echo "<img src='http://krydos.heliohost.org/load/images/server_uptime_stevie.gif' />";}
          elseif ($_SESSION['server'] == 'johnny'){
            echo "<img src='http://krydos.heliohost.org/load/images/server_uptime_johnny.gif' />";}
?>
</p>
<p>Combined average from the past seven days.</p>
						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
<?php include ("inc/sidebar.php"); ?>
<?php include ("inc/footer.php"); ?>