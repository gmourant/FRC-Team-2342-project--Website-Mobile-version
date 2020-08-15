<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "events";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html>
   <head>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
   </head>
   <body>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	  <p class="pageHead">Events</p>
      <?php include("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/events/processor.php"); ?>
	  <div id="events">
		 <?php events("m"); ?>
	  </div>
   </body>
</html>