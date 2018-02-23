<?php
DS('http://www.vipvnn.xyz/cronjobs/camxuc.php');
DS('http://www.vipvnn.xyz/cronjobs/camxuc2.php');
DS('http://www.vipvnn.xyz/cronjobs/camxuc3.php');
DS('http://www.vipvnn.xyz/cronjobs/camxuc4.php');
DS('http://www.vipvnn.xyz/cronjobs/camxuc5.php');
DS('http://www.vipvnn.xyz/cronjobs/camxuc6.php');
function DS($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
?>