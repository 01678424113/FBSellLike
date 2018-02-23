<?php
DS('http://www.vipvnn.xyz/cronjobs/tanglike.php');
DS('http://www.vipvnn.xyz/cronjobs/tanglike2.php');
DS('http://www.vipvnn.xyz/cronjobs/tanglike3.php');
DS('http://www.vipvnn.xyz/cronjobs/tanglike4.php');
DS('http://www.vipvnn.xyz/cronjobs/tanglike5.php');
DS('http://www.vipvnn.xyz/cronjobs/tanglike6.php');
function DS($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
?>