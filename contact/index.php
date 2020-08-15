<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "contact";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html>
   <head>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
   </head>
   <body>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	  <p class="pageHead">Contact Us</p>
	  <p class="hangingSubhead">Meeting Place</p>
	  <p>Daniel Webster College<br>(Daniel Webster Hall, downstairs)<br>20 University Dr.<br>Nashua, NH 03063</p>
	  <p class="hangingSubhead">Mailing Address</p>
	  <p>Greater Nashua FIRST Robotics Club<br>38 Wood St.<br>Nashua, NH 03064</p>
	  <p class="hangingSubhead">Email</p>
	  <p><a href="mailto:info@team2342.org">info@team2342.org</a></p>
	  <p class="hangingSubhead">Phone</p>
	  <p><a href="tel:1 (661) 418-7469">661-418-PHNX (7469)</a></p>
   </body>
</html>