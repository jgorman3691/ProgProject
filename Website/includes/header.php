<!DOCTYPE html>
<html lang="en-US">
    <head>
      <link rel="stylesheet" href="navbar.css">
      <link rel="stylesheet" href="mainstyle.css">
      <link rel="stylesheet" href="footer.css">
      <link rel="stylesheet" href="dataforms.css">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="Jed S. Gorman">
      <meta name="description" content="Header Link File">
  </head>
<body>
  <header>
    <div class="topbar" id="linkbar">
      <?php include("includes/topnav.php"); ?>
      <div class="dropdown" id="cuntainer">
        <button class="dropbtn">See You!</button>
          <div class="dropdown-content" id = "Dropped">
            <?php include("includes/subnav.php"); ?>
          </div>
      </div>
    </div>
  </header>

