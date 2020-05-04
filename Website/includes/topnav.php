<?php
  include("includes/arrays.php");
  echo "<nav>";
  $root = "Login";
  $first = "<a ";
  $second = " href=\"";
  $third = "\">";
  $fourth = "</a>";
  $fifth = "class=\"idiot\"";
  foreach($HeaderItems as $key => $val){
  	if(!strcmp($root,$key)){
  		echo $first . $fifth . $second . $val . $third . $key . $fourth;
  	}
  	else{
  		echo $first . $second . $val . $third . $key . $fourth;
  	}
  }
?>

