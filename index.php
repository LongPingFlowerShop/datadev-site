<?php
	require "header.php";
?>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="style.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>

<?php
  if (!isset($_SESSION["userId"])) {
    require "includes.php";
  }
  ?>
  <!--else {
    echo '<form action="includes/logout.inc.php" method="post"><button type="submit" name="logout-submit"> Logout</button></form>';
  } -->
 

<!--NavBar Start-->
<nav style="background-color: #6e84d2;" class="navbar navbar-expand-md navbar-light  sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://datadev.devcatalyst.com/~mahs_mdoumitt/index.php"><img src="img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarresponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div style="font-weight: bold;" class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>         
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="visualize.php">Visualize</a>
                </li>
            </ul>
            <form action="includes/logout.inc.php" method="post"><button style="background-color:#6e84d2; color:black;" type="submit" name="logout-submit"><b>Logout</b></button></form>
            </div>
        </div>
    </nav>
	<!--NavBar End-->


	
    <div class="slider-container">
      <div class="left-slide">
        <div style="background-color: #321925;">
          <h1>Want To Be A Musician?</h1>
          <p>The Time Is Now</p>
        </div>
        <div style="background-color: #00CED1">
          <h1>Unlock Maximum Brain Power</h1>
          <p>Its Almost Too Good To Be True</p>
        </div>
        <div style="background-color: #E388FF">
          <h1>Children Are Eligible As Well</h1>
          <p>Your Child Can Be A Prodigy</p>
        </div>
        <div style="background-color: #ffb866">
          <h1>Become a Karate Master</h1>
          <p>Within Days </p>
        </div>
      </div>
      <div class="right-slide">
        <div style="background-image: url('img/KARATE.png');"></div>
        <div style="background-image: url('img/paint.png');"></div>
        <div style="background-image: url('img/brain.png');"></div>
        <div style="background-image: url('img/guitar.png');"></div>
      </div>
      <div class="action-buttons">
        <button class="down-button">
          <i class="fas fa-arrow-down"></i>
        </button>
        <button class="up-button">
          <i class="fas fa-arrow-up"></i>
        </button>
      </div>
    </div>

    <script src="js/script.js"></script>
  </body>
</html>
