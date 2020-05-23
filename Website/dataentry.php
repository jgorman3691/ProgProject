<?php
  include("includes/header.php");
?>
<div class="about" id="about">
  <form name="information" id="information" action="/testphpdb.php" method="post">
    <fieldset form="information">
      <legend>Some Information Needed:</legend>
        <br />
        <br />
        <label for="given" id="fbox">First Name</label><br />
          <input type = "text" class="tbox" id="fname" name="fname" maxlength="50" value.initial="First Name" required/><br />
        <label for="middle" id="mbox">Middle Name (Optional)</label><br />
          <input type="text" class="tbox" id="mname" name="mname" maxlength="50" value.initial="Middle Name" /><br />
        <label for="surname" id="sbox">Last Name</label><br />
          <input type="text" class="tbox" id="sname" name="sname" maxlength="50" value.initial="Last Name" required/><br />
        <br />
        <br />
        <br />
        <br />
      <legend>Gender/Sex:</legend>
        <br />
        <br />
        <!-- Add tooltip about how messy sex and gender are and that we will get back to this ASAP!-->
        <input type="radio" id="male" name="male" value="male">
          <label for="male">Male</label><br />
        <input type="radio" id="female" name="female" value="female">
          <label for="female">Female</label><br />
        <input type="radio" id="other" name="other" value="other">
          <label for="other">Other</label><br />
        <br />
        <br />
        <br />
        <br />
      <legend>How can we get in touch with you?</legent>
        <br />
        <br />
        <label for="phone">Phone Number:</label><br />
          <input type="tel" class="tbox" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="123-456-1924" maxlength="10" /><br />
        <label for="email">E-mail Address:</label><br />
          <input type="email" class="tbox" id="email" name="email" value="johndoe@email.com" /><br />
      <button type="submit" form="information" class="submit" id="submit" value="Submit" formaction="/testphpdb.php" formethod="POST" formenctype"multipart/form-data" />
      <button type="reset" form="information" class="submit" id="reset" value="Reset" /><br />
    </fieldset>
  </form>
</div>





<?php
  include("includes/footer.php");
?>
