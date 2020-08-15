<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "calendar";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html>
   <head>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
   </head>
   <body>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	  <p class="pageHead">Calendar</p>
	  <?php if($noscript == true) : ?><p>The calendar works far smoother if you <a href="http://www.enable-javascript.com" target="_blank">enable JavaScript</a>.</p><?php endif; ?>
	  <iframe src="https://www.google.com/calendar/<?php if($noscript == true) {echo 'html';} ?>embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=team2342.org_5of3nhfulu26b9ehnj31r55sao%40group.calendar.google.com&amp;color=%23B1440E&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%238D6F47&amp;ctz=America%2FNew_York" style="border-width:0" width="100%" height="400" frameborder="0" scrolling="no"></iframe>
   </body>
</html>