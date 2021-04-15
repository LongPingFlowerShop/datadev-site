<?php
    include "header.php"
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>About</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
</head>
<body style="text-align:center; background-color:#22223B">
    <!--NavBar Start-->
	<div class="navc">
    <nav class="navbar navbar-expand-md navbar-light navc sticky-top navc">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="Img/logo.png"></a>
            <button class="navbar-toggler" ty[e="button" data-toggle="collapse"
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
                    <a class="nav-link" href="contact.php">Cantact Us</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="visualize.php">Visualize</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
	</div>
	<!--NavBar End-->
	
	<!--Cards Start-->
	<div style="align:center;" class="container-fluid padding margin">
		<h1 style="color: white;">About the Staff</h1>
		<div class="row padding">
			<div class="col-md-3">
				<div class="card cardWidth colColor">
					<img class="card-img-top/" src="img/max.png">
					<div class="card-body">
						<h4 class="card-title">Max Doumitt</h4>
						<p class="card-text">Co-Founder</p>
						<a href="max.html" class="btn btn-outline-secondary">See Profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card cardWidth colColor">
					<img class="card-img-top" src="img/raj.png">
					<div class="card-body">
						<h4 class="card-title">Raj Patel</h4>
						<p class="card-text">Co-Founder</p>
						<a href="raj.html" class="btn btn-outline-secondary">See Profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card cardWidth colColor">
					<img class="card-img-top" src="img/davis.png">
					<div class="card-body">
						<h4 class="card-title">Davis McLemore</h4>
						<p class="card-text">Chief Financial Officer</p>
						<a href="davis.html" class="btn btn-outline-secondary">See Profile</a>
					</div>
				</div>
			</div>
		</div>
		</div>
	<!--Cards End-->

	<!--About Us Paragraph Start-->
		<div class="aboutParagraph">
			<h1>
				THE FUTURE IS HERE
			</h1>
			<p>
				We at WLA are dedicated to bringing the future of learning and technological advancement straight to the people.<br>
				We whole heartedly believe that we can make the world a better place through technology and unlocking the potential inside everyone.<br>
				through completely reworking and revolutionizing education with our devices people can get out there and start their journey with the knowledge they need to be what they want.<br>	
			</p>
		</div>
	<!--About Us Paragraph End-->

	<!--Carousel Start-->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner"> 
		  <div class="carousel-item active">
			<img class="d-block w-100" src="#" alt="First slide">
		  </div>
		  <div class="carousel-item">
			<img class="d-block w-100" src="#" alt="Second slide">
		  </div>
		  <div class="carousel-item">
			<img class="d-block w-100" src="#" alt="Third slide">
		  </div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
	<!--Carousel End-->





	
<script src="/js/scripts.js"></script>

</body>
</html>
