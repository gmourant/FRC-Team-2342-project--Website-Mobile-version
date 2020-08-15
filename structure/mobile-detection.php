<?php
if ($photos == true) {
   $dest = "./";
} else {
   $dest = "http://www.team2342.org/$thispage";
}

if (!$detect->isMobile() || $detect->isTablet()) { header("Location: $dest"); }
?>