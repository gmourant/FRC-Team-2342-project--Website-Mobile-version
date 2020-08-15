<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "first";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html>
   <head>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
   </head>
   <body>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	  <p class="pageHead">About FIRST</p>
	     <p class="hangingHead">FIRST Mission</p>
		    <p>FIRST aims to inspire young people to be science and technology leaders, by engaging them in exciting mentor-based programs that build science, engineering and technology skills, that inspire innovation, and that foster well-rounded life capabilities including self-confidence, communication, and leadership.</p>
		    <p class="indent"><i>"To transform our culture by creating a world where science and technology are celebrated and where young people dream of becoming science and technology leaders."</i><br>-Dean Kamen, Founder of FIRST</p>
		    <p id="frc">Described by its founder as "the varsity sport for the mind", the FIRST Robotics Competition (FRC) is the highest and most challenging of the FIRST Robotics programs. Teams of 20 or more students (and professional mentors) are challenged to not only build a robot to complete "the challenge", but also to market, fundraise and organize their teams - all in a six week time period. "It's as close to real-world engineering that the student can get", including all the constraints of a real-world engineering project.</p>
			<p class="hangingHead"><a href="http://youtu.be/hcS7M4sY0fQ" target="_blank">What's FRC? &ndash; Video</a></p>
         <p class="hangingHead">Advantages of FIRST for Students</p>
		    <ul>
		       <li>Learn from professional engineers (and other professions)</li>
			   <li>Build and compete with a robot of their own design</li>
			   <li>Learn and use sophisticated software and hardware</li>
			   <li>Compete and cooperate in alliances and tournaments</li>
			   <li>Earn a place in the World Championship</li>
			   <li>Qualify for nearly $14.8 million in college scholarships</li>
            </ul>
         <p class="hangingSubhead center">All of the FIRST programs are free for all students</p>
   </body>
</html>