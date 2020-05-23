<?php
  include("includes/subarrays.php");
  $first = "<a ";
  $second = " href=\"";
  $third = "\">";
  $fourth = "</a>";
  $fifth = "class=\"idiot\"";
  echo"<div class=\"dropdown-content\" id = \"Dropped\">";

  foreach($SubButtons as $mkey => $mval){
    foreach($mval as $key => $val){

        echo $first . $second . $val . $third . $key . $fourth;
      }
    }

?>
