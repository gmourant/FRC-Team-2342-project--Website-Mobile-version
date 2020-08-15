<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "robot";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html>
   <head>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
   </head>
   <body>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	  <p class="pageHead">Our 2015 Robot</p>
	     <center><img src="/images/2015-robot-photo.png" id="robot-photo"></center>
		 <p class="pageHead">Name: Recyclone</p>
		 <p class="hangingHead">Features:</p>
		 <ul>
		    <li>Tote/container lifting mechanism</li>
		    <li>2 hooks for lifting mechanism</li>
		    <li>4 wheel mecanum drive train</li>
		    <li>4 drive train CIM motors</li>
		 </ul>
         <p class="hangingHead">Capabilities:</p>
		 <ul>
		    <li>Carry up to 5 totes</li>
		    <li>Carry 1 container & 2 totes</li>
		    <li>Place stack on both scoring platform and step</li>
		    <li>Move in any direction without turning (mecanum)</li>
		 </ul>
         <p class="hangingHead">Autonomous Modes:</p>
		 <ul>
		    <li>(Do nothing)</li>
			<li>Move into Auto Zone</li>
			<li>Pickup 1 tote, move foward into Auto Zone and place tote</li>
		    <li class="b">Pickup all 3 yellow totes and place stack in Auto Zone<br><a href="http://youtu.be/1xWx5X5SdVo" target="_blank">See it in Action! (Video)</a></li>
		 </ul>
   </body>
</html>