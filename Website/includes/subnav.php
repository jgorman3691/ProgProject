<?php
  include("includes/subarrays.php");
  $begin = "<a href=\"";
  $middle = "\">";
  $end = "</a>";
  foreach($SubNavItems as $key => $val){
       echo $begin . $val . $middle . $key . $end;
  }

?>
