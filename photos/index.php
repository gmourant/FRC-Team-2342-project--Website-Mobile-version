<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "photos";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html>
   <head>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
   </head>
   <body>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	  <p class="pageHead">Photos</p>
	  <?php if($noscript == true) : ?><p>Photo viewer requires JavaScript, please <a href="http://www.enable-javascript.com" target="_blank">enable JavaScript</a>.</p><?php endif; ?>
	  <?php if($noscript == false) : ?>
	  <span>
	     <p class="hangingHead">2014 Season Photos</p>
		 <ul>
		    <li><a href="http://www.team2342.org/photos/2014/ptde/m.php">Pine Tree District Event</a></li>
		    <li><a href="http://www.team2342.org/photos/2014/gsde/m.php">Granite State District Event</a></li>
		    <li><a href="http://www.team2342.org/photos/2014/build-season/m.php">Build Season</a></li>
		    <li><a href="http://www.team2342.org/photos/2014/training/m.php">Training</a></li>
		    <li><a href="http://www.team2342.org/photos/2014/fll-tournament/m.php">FLL Tournament</a></li>
		 </ul>
		 <p class="hangingHead">2013 Season Photos</p>
		 <ul>
		    <li><a href="http://www.team2342.org/photos/2013/battlecry/m.php">BattleCry @ WPI Competition</a></li>
		    <li><a href="http://www.team2342.org/photos/2013/gsr/m.php">Granite State Regional Competition</a></li>
		    <li><a href="http://www.team2342.org/photos/2013/building-robot/m.php">Building Robot</a></li>
		    <li><a href="http://www.team2342.org/photos/2013/prototyping/m.php">Prototyping</a></li>
		    <li><a href="http://www.team2342.org/photos/2013/bn/m.php">Barnes & Noble Fundraiser</a></li>
		    <li><a href="http://www.team2342.org/photos/2013/fairgrounds-elementary/m.php">Fairgrounds Elementary Recruiting</a></li>
		    <li><a href="http://www.team2342.org/photos/2013/bake-sale/m.php">Bake Sale Fundraiser</a></li>
		 </ul>
	  </span>
	  <?php endif; ?>
   </body>
</html>