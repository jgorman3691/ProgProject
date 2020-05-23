<?php
include("includes/header.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $fname = filter_var($_POST["fname"], FILTER_SANITIZE_STRING);
  $mname = filter_var($_POST["mname"], FILTER_SANITIZE_STRING);
  $sname = filter_var($_POST["sname"], FILTER_SANITIZE_STRING);
  $male = filter_var($_POST["male"]);
  $female = filter_var($_POST["female"]);
  $other = filter_var($_POST["other"]);
  $phone = filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

}
if(empty($fname) || empty($sname)){
   die("One of the name fields has not been filled.");
}

if(empty($male) && empty($female) && empty($other)){
  die("Please choose one of the above options.");

}

$mysqli = new mysqli("localhost","jed-xeno","Paniagua202!","project");
if($mysqli -> connect_errno){
  echo "Failed to connect to MariaDB..." . $mysqli -> connect_error;
  exit();
}

?>
