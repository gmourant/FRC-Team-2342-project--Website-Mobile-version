<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html>
   <head>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
   </head>
   <body>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	  <p class="center">
	     <a href="http://www.facebook.com/GreaterNashuaRoboticsTeam2342" target="_blank"><img src="http://www.team2342.org/images/facebook.png"></a>&nbsp;
         <a href="http://www.twitter.com/team2342" target="_blank"><img src="http://www.team2342.org/images/twitter.png"></a>&nbsp;
         <a href="http://plus.google.com/+Team2342Org" target="_blank"><img src="http://www.team2342.org/images/googleplus.png"></a>&nbsp;
		 <a href="http://team2342.tumblr.com/" target="_blank"><img src="http://www.team2342.org/images/tumblr.png" alt="Tumblr Page" title="Tumblr Page"></a>&nbsp;
		 <a href="http://blog.team2342.org"><img src="http://www.team2342.org/images/blogger.png"></a>&nbsp;
	     <a href="http://www.youtube.com/team2342" target="_blank"><img src="http://www.team2342.org/images/youtube.png"></a>&nbsp;
		 <a href="http://blog.team2342.org/feeds/posts/default" target="_blank"><img src="http://www.team2342.org/images/rss.png"></a>
	  </p>
	  <span id="team-photo"><img src="/images/2015-team-photo-fun.jpg"></span>
	  <div id="links">
	     <ul>
			<li><a href="/events/">Upcoming Events</a></li>
			<li><a href="/sponsors/">Our Sponsors</a></li>
         </ul>
	  </div>
	  <p>Team 2342 is a group of students from the greater Nashua, New Hampshire area who participate in the FIRST Robotics Competition (FRC). Unlike most other FRC teams, we do not have a single school affiliation. We are known in the FRC world as a team with unique robots and have been awarded Creativity and Industrial Design Awards at Regional Competitions.</p>
	  	  <div id="links">
	     <ul>
			<li><a href="http://blog.team2342.org">Blog</a></li>
			<li><a href="/robot/">Our Robot</a></li>
			<li><a href="http://youtu.be/VqOKzoHJDjA" target="_blank">2016 Game Tutorial</a></li>
			<li><a href="http://eepurl.com/MC0m9">Subscribe to our Newsletter</a></li>
			<li><a href="/donate/">Donate</a></li>
         </ul>
	  </div>
   </body>
</html>