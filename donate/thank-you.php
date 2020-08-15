<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "donate/thank-you/";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html>
   <head>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
   </head>
   <body>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	  <p class="pageHead">Thank you for your donation!</p>
	  <p>We appreciate your gift. If you have any questions regarding your donation, please feel free to contact us at <a href="mailto:info@team2342.org">info@team2342.org</a> or call us at <a href="tel:1 (661) 418-7469">661-&#65279;418-&#65279;7469</a>.</p>
	  <p>As a Team 2342 sponsor, if you would like to stay informed about how your money is being spent, please check out our <a href="http://blog.team2342.org" target="_blank">blog</a> and <a href="http://eepurl.com/MC0m9">subscribe</a> to our newsletter.</p>
   </body>
</html>