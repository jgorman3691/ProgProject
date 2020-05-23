<?php
  include("includes/navlinkarrays.php");
  echo "<div class=\"topbar\" id=\"linkbar\">";
  $first = "<button class=\"navlink\">";
  $second = "<a href=\"";
  $third = "\">";
  $fourth = "</a></button>";
  $kind = "class=\"";
  foreach($HeaderItems as $key => $val){
  		echo $first . $second . $val . $third . $key . $fourth;
  	}

?>
