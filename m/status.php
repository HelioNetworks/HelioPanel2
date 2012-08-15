<?php
require 'header.php';
?>
<h2 class="head">System Status</h2>
<div class="content">
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
        
?>
</p></div>
<h2 class="head">Server Load</h2>
<div class="content">
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
<h2 class="head">Server Uptime</h2>
<div class="content">
<p><?php
        if ($_SESSION['server'] == 'stevie')
            {echo "<img src='http://krydos.heliohost.org/load/images/server_uptime_stevie.gif' />";}
          elseif ($_SESSION['server'] == 'johnny'){
            echo "<img src='http://krydos.heliohost.org/load/images/server_uptime_johnny.gif' />";}
?>
</p>
<p>Combined average from the past seven days.</p>
</div>
<?php
require 'menu.php';
?>
<?php
require 'footer.php';
?>
