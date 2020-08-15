<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "sponsors";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html>
   <head>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
   </head>
   <body>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	  <p class="pageHead">2016 Sponsors</p>
	  <span id="sponsors">
	     <a href="http://www.dwc.edu/" target="_blank"><img src="/images/sponsor-logos/dwc.jpg"></a>
	     <a href="http://www.intel.com/" target="_blank"><img src="/images/sponsor-logos/intel.jpg"></a>
	     <a href="http://www.baesystems.com/" target="_blank"><img src="/images/sponsor-logos/bae-systems.jpg"></a>
	     <a href="http://www.raytheon.com/" target="_blank"><img src="/images/sponsor-logos/raytheon.jpg"></a>
	     <a href="http://www.amazonrobotics.com/" target="_blank"><img src="/images/sponsor-logos/amazon-robotics.jpg"></a>
	     <a href="http://www.kentico.com/" target="_blank"><img src="/images/sponsor-logos/kentico.jpg"></a>
	     <a href="http://www.solidworks.com/" target="_blank"><img src="/images/sponsor-logos/solidworks.jpg"></a>
	     <a href="http://rapidmanufacturing.com/rapid-sheet-metal/" target="_blank"><img src="/images/sponsor-logos/rapid-sheet-metal.png"></a>
	     <a href="http://www.solid-scape.com/" target="_blank"><img src="/images/sponsor-logos/solidscape.jpg"></a>
	  </span>
	  <span class="center" style="font-size:12pt">
	     <p>Tess Family</p>
		 <p>Integrated Device Technology, Inc.</p>
		 <p>Krishnan & Knutson Family</p>
		 <p>Williams Family</p>
		 <p>Staussberg Family</p>
		 <p>Karl Hanf</p>
	  </span>
   </body>
</html>