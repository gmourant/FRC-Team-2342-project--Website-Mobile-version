<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $nav = $_REQUEST['nav'] ;
   
   if ($nav == "#" || $nav == "") {
   	  header("Location: /");
   } else {
   	  header("Location: $nav");
   }
} else {
header("Location: /");
}
?>