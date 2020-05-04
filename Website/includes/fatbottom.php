<?php
  include("includes/arrays.php");
  $begin = "<a href=\"";
  $middle = "\">";
  $end = "</a>";
  foreach($FooterItems as $key => $val){
      echo $begin . $val . $middle . $key . $end;
  }
?>

