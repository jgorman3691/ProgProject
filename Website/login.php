<?php
  include("includes/header.php");
?>

<div class="forminput" id="formtest">
<form class="text">

	<label for="first">First Input:</label><br />
	<input type="text" id="first" name="first"><br />
	<label for="second">Second Input:</label><br />
	<input type="text" id="second" name="second"><br />
	<input type="submit" value="Submit">
</form>

<form class="radio">
	<input type="radio" id="male" name="sex" value="male">
	<label for="male">Male:</label><br />
	<input type="radio" id="female" name="sex" value="female">
	<label for="female">Female:</label><br />
	<input type="radio" id="other" name="sex" value="other">
	<label for="other">Sex is a Spectrum, Dumbass!</label><br />
	<input type="radio" id="agender" name="sex" value="agender">
	<label for="agender">Agender:</label><br />
	<input type="submit" value="Submit">
</form>
</div>
<?php
	include("includes/footer.php");
?>
