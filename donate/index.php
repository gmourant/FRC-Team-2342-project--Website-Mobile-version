<?php
  require_once("/nfs/c06/h04/mnt/157266/domains/www.team2342.org/html/structure/Mobile_Detect.php");
  $detect = new Mobile_Detect;
  $thispage = "donate/";
  include($_SERVER["DOCUMENT_ROOT"]."/structure/mobile-detection.php");
?>
<!DOCTYPE html>
<html>
   <head>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/head.php"); ?>
   </head>
   <body>
	  <?php include($_SERVER["DOCUMENT_ROOT"]."/structure/header.php"); ?>
	  <p class="pageHead">Donate/Sponsor Us</p>
	  <p class="hangingHead">Ways to Give:</p>
	  <p class="center b"><a href="/donate/online.php<?php echo $addnoscript ?>">Debit or Credit Card (PayPal)</a></p>
	  <p class="center b"><a href="http://www.team2342.org/files/Team2342%20Sponsorship%20Form.pdf" target="_blank">Cash or Check</a></p>
	  <p class="center b"><a href="https://www.coinbase.com/checkouts/0eb50e53773cc505c6a354af50c15f7f" target="_blank">Bitcoin</a></p>
	  <p class="center b"><a href="http://smile.amazon.com/ch/11-3814533" target="_blank">AmazonSmile</a></p>
	  <p class="hangingSubhead">Why We Need Sponsors</p>
	  <p>Running a FIRST robotics team requires more than just determination and knowledge. In order to run a successful FIRST team we need tools, space, food, raw materials, skilled mentors, and money. Without our sponsors, we wouldn't have the opportunity to participate in the FIRST programs which have been so valuable to our students. We are always looking for new sponsors!</p>
	  <p class="hangingSubhead">Why You Should Sponsor Us</p>
	  <p>We give high schoolers the opportunity to learn more about science and technology. Students who participate in the FIRST Robotics Competition are 55% more likely to major in science or engineering, and 41% more likely to major in engineering alone. Since the Greater Nashua FIRST Robotics Club is a non-profit 501(c)(3) organization (Tax ID: 113814533), all contributions are tax deductible. The names of all donors appear on our sponsors page (unless donor specifies otherwise). Please see our <a href="http://www.team2342.org/files/Team2342 Sponsor Letter.pdf" target="_blank" class="b">Sponsor Letter</a> and <a href="http://www.team2342.org/files/Team2342 Mentor Brochure.pdf" target="_blank" class="b">Mentor Brochure</a> or <a href="http://www.team2342.org/files/Team2342 Student Brochure.pdf" target="_blank" class="b">Student Brochure</a> for more information on our team.</p>
   </body>
</html>