<?php
$mysqli = new mysqli("localhost","jed-xeno","Paniagua202!","project");
if($mysqli -> connect_errno){
  echo "Failed to connect to MariaDB..." . $mysqli -> connect_error;
  exit();
}
echo $mysqli -> host_info();



$mysqli -> close();
?>
