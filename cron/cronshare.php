<?php
DS('http://www.vipvnn.xyz/cronjobs/tangshare.php');
DS('http://www.vipvnn.xyz/cronjobs/tangshare2.php');
DS('http://www.vipvnn.xyz/cronjobs/tangshare3.php');
DS('http://www.vipvnn.xyz/cronjobs/tangshare4.php');
DS('http://www.vipvnn.xyz/cronjobs/tangshare5.php');

function DS($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
?>