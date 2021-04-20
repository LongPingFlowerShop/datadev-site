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
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
</head>

<body>

<!--Login Start-->
<!--		<div class="login">
		<div class="login-headimg">
			<h1> login </h1>
		</div>
		<div class="login-form">
			<div>
				<form action="includes/login.inc.php" method="post">
					<input type="text" name="uid" placeholder="username/email...">
					<input type="password" name="pwd" placeholder="password">
					<button type="submit" name="login-submit">Login</button>
				</form>
				<a href="signup.php">Signup</a>
				<form action="includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit"> Logout</button>
				</form>
			</div>
		</div>
	</div> -->
<!--Login End-->

<!--NavBar Start-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarresponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
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
            </div>
        </div>
    </nav>
	<!--NavBar End-->
	



 


    <div class="slider-container">
      <div class="left-slide">
        <div style="background-color: #928080">
          <h1>Want To Be A Musician?</h1>
          <p>The Time Is Now</p>
        </div>
        <div style="background-color: #2a86ba">
          <h1>Unlock Maximum Brain Power</h1>
          <p>Its Almost Too Good To Be True</p>
        </div>
        <div style="background-color: #252e33">
          <h1>Children Are Eligible As Well</h1>
          <p>Your Child Can Be A Prodigy</p>
        </div>
        <div style="background-color: #ffb866">
          <h1>Become a Karate Master</h1>
          <p>Within Days </p>
        </div>
      </div>
      <div class="right-slide">
        <div
          style="
            background-image: url('https://cdn.discordapp.com/attachments/824759283609501766/833834182617596014/karate.jpg');
          "
        ></div>
        <div
          style="
            background-image: url('https://s.abcnews.com/images/International/abc_aelita_5_er_160926_16x9_992.jpg');
          "
        ></div>
        <div
          style="
            background-image: url('https://cdn.discordapp.com/attachments/714297582645674005/833879886019035136/brain.jpg');
          "
        ></div>
        <div
          style="
            background-image: url('https://static.vecteezy.com/system/resources/previews/001/406/054/large_2x/person-playing-guitar-free-photo.jpeg');
          "
        ></div>
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

    <script src="script.js"></script>
  </body>
</html>
