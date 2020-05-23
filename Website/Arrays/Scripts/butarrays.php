<?php
  include("includes/subarrays.php");
    $first = " <button class=";
    #$second = "class=";
    $third = "\"dropbtn\"";
    $fourth = ">";
    $fifth = "</button> ";
    $one = "<a href=\"";
    #$two = " href=\"";
    $three = "\">";
    $four = "</a>";
    $life = "</div>";
    echo "<div class=\"dropdown linkbar\" id=\"droptainer\">";
    foreach($Buttons as $mkey => $nextval){
      echo $first . $third . $fourth . $mkey . $fifth;
      echo"<div class=\"dropdown-content\" id = \"Dropped\">";
        foreach($nextval as $key => $val){
          echo $one . $val . $three . $key . $four;
        }echo $life;
      }echo $life;
?>
