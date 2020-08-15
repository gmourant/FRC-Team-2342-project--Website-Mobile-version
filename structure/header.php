<?php
if ($detect->isIphone()) {
    $subpage = "&gt;";
} else {
    $subpage = "&nbsp;&nbsp;&nbsp;&nbsp;";
}
?>
	  <div id="content">
	  <p id="pageTitle"><a href="/<?php echo $addnoscript ?>"><img src="/images/logo.png" id="logo"></a></p>
      <form id="menu" action="/structure/nav.php" method="post">
		 <select name="nav" <?php if($noscript == true) {echo "style='width:75%'";} else {echo "style='width:95%' onchange='window.location = this.options[selectedIndex].value'";} ?>>
		    <option value="#" selected disabled>Menu</option>
		    <option value="/<?php echo $addnoscript ?>">Home</option>
		    <option value="/robot/<?php echo $addnoscript ?>">Robot</option>
		    <option value="#" disabled>About</option>
		    <option value="/about/<?php echo $addnoscript ?>"><?php echo $subpage ?>About</option>
		    <option value="/first/<?php echo $addnoscript ?>"><?php echo $subpage ?>FIRST</option>
		    <option value="/history/<?php echo $addnoscript ?>"><?php echo $subpage ?>History</option>
		    <option value="#" disabled>Media</option>
		    <option value="/photos/<?php echo $addnoscript ?>"><?php echo $subpage ?>Photos</option>
		    <option value="/videos/<?php echo $addnoscript ?>"><?php echo $subpage ?>Videos</option>
		    <option value="/events/<?php echo $addnoscript ?>">Events</option>
		    <option value="/calendar/<?php echo $addnoscript ?>">Calendar</option>
		    <option value="/sponsors/<?php echo $addnoscript ?>">Sponsors</option>
		    <option value="/contact/<?php echo $addnoscript ?>">Contact</option>
			<option value="#" disabled>Members</option>
		    <option value="http://mail.team2342.org/"><?php echo $subpage ?>Mail</option>
		    <option value="http://drive.google.com/a/team2342.org"><?php echo $subpage ?>Drive</option>
		    <option value="http://wiki.team2342.org/"><?php echo $subpage ?>Wiki</option>
		    <option value="http://blog.team2342.org">Blog</option>
			<option value="/donate/">Donate</option>
	     </select>
		 <?php if($noscript == true) : ?><input type="submit" value="Go"><?php endif; ?>
	  </form>