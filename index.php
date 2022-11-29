<?php include("components/head.inc.php"); ?>

	<title> PCRepairs - Home </title>
</head>

<body>
	<!-- Start your project here-->

	<header>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0 p-0">
		<div class="container">
			<?php
				include('components/logo.inc.php');
			 	include('components/hamtoggler.php');
			?>

			<!-- Navbar items -->
			<div class="collapse navbar-collapse h5 fw-semibold"  id="navbarSupportedContent">
			<!-- Navbar Links -->
			<ul class="navbar-nav me-auto">
				<li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
				<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
				<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
			</ul> <!-- Navbar Links -->

			<?php include('components/nav.rightside.inc.php'); ?>

			</div> <!-- Navbar items -->
		</div> <!-- container -->
		</nav> <!-- Navbar -->

		<!--Section: Design Block-->
		<section>
			<!-- Intro Image -->
			<div id="intro" class="bg-image text-center rounded mb-5 text-light vh-100">
				<div class="intro-mask mask"></div>
				<!-- Section: Content -->
				<section class="d-flex justify-content-center align-items-center h-100 mt-5">
					<!-- Card -->
					<div class="card bg-transparent text-center shadow-5-strong mask-card rounded-5 my-5 px-3 py-5">
						<div  class="card-body container">
							<p class="card-title display-4 fw-bold"
							id="home_img_card_title">
								Computer Repair Services
							</p>
							<p class="card-text fw-light h1 mt-5">
								Bring in your laptop or desktop computer and our expert technicians will offer quick and high-quality services
								to get your device running back up.
							</p>

							<a type="button" href="book.php" class="btn btn-lg px-5 mt-5 py-3 display-1 btn-success popup">
								<i class="fa-solid fa-book me-2"></i>
								Book Now
							</a>
						</div>
					</div> <!-- Card -->
				</section> <!-- Section: Content -->
			</div> <!-- Intro Image -->
		</section><!--Section: Design Block-->
	</header>

	<main class="container-fluid">
		<h5 class="card-title text-dark text-center display-5 fw-bold">Our Services</h5>

		<!-- Carousel wrapper -->
		<div id="myCarousel" class="carousel carousel-fade slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
			  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
			  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img src="img/3.jpg" width="100%"class="img-fluid" alt="img.jpg">
		
				<div class="container">
				  <div class="carousel-caption">
					<h1>Computer Repair</h1>
					<p>Full diagnosis and repair of all hardware and software problems on your desktop or laptop computer.</p>
					<p><a class="btn btn-lg btn-primary" href="login.php">Sign up today</a></p>
				  </div>
				</div>
			  </div>
			  <div class="carousel-item">
				<img src="img/4.jpg" width="100%"class="img-fluid" alt="img.jpg">
		
				<div class="container">
				  <div class="carousel-caption">
					<h1>Data Recovery</h1>
					<p>Your data is the most important thing on your computer, we can recover your data and help you back it up to disk and cloud. </p>
					<p><a class="btn btn-lg btn-primary" href="services.php">Learn more</a></p>
				  </div>
				</div>
			  </div>
			  <div class="carousel-item">
				<img src="img/7.jpg" width="100%"class="img-fluid" alt="img.jpg">
				<div class="container">
				  <div class="carousel-caption">
					<h1>Virus Removal Services</h1>
					<p>Most malware virus programs are designed to be hard to remove. Through years of experience our technicians can remove the infestion without destroying your data.</p>
					<p><a class="btn btn-lg btn-primary" href="services.php">Learn More</a></p>
				  </div>
				</div>
			  </div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Next</span>
			</button>
		</div> <!-- Carousel wrapper -->

		<h5 class="card-title text-dark text-center display-5 mt-5 fw-bold">Why Choose US?</h5>

		<section class="container-fluid text-center">
			<div class="position-relative overflow-hidden mb-5 p-1 p-md-3 m-md-3 text-center bg-dark text-light d-flex align-items-center">

				<div class="product-device product-device-2-dark shadow-sm d-none d-lg-block"></div>
				<div class="col-md-3 p-lg-1 mx-auto py-5 px-2">
				<h1 class="display-4 fw-normal me-5">Experience</h1>
				<p class="lead fw-normal">Our technicians are the most helpful, courteous, experienced, knowledgeable and patient technicians available.</p>
				<a class="btn btn-outline-success" href="about.php">Learn More</a>
				</div>
				<div class="">
					<img class="img-fluid p-0 m-0 ms-5" src="img/Computer-Repair.jpg" alt="img.jpg">
				</div>
			</div>

			<div class="position-relative overflow-hidden mb-5 p-1 p-md-3 m-md-3 text-center bg-light text-dark d-flex align-items-center">

				<div>
					<img class="img-fluid w-100 p-0 m-0" src="img/6.jpg" alt="img.jpg">
				</div>

				<div class="product-device product-device-2-light shadow-sm d-none d-lg-block"></div>
				<div class="col-md-3 p-lg-1 mx-auto py-5 px-2">
				<h1 class="display-4 fw-normal">Fast Support</h1>
				<p class="lead fw-normal">Chat with one of our expert technicians either via phone or internet, send us an email. We can respond within 24hrs and we can even connect to your computer remotely.</p>
				<a class="btn btn-success" href="about.php">Learn More</a>
				</div>
			</div>
		</section>

		<h5 class="card-title text-dark text-center display-5 mt-5 fw-bold">Public Reviews of Our Services</h5>
		<div class="container-fluid bg-dark p-5 my-5">
			<section>
			  <div class="row">
				<div class="col-12 mt-3 mb-1 text-white text-center">
				  <h5 class="text-uppercase">Review Statistics</h5>
				  <p>A summary of why we are the best computer specialists money can buy</p>
				</div>
			  </div>
			  <div class="row">
				<div class="col-xl-6 col-md-12 mb-4">
				  <div class="card">
					<div class="card-body">
					  <div class="d-flex justify-content-between p-md-1">
						<div class="d-flex flex-row">
						  <div class="align-self-center">
							<i class="fa fa-duotone fa-calendar-days fa-3x text-info me-4"></i>
						  </div>
						  <div>
							<h4>2022</h4>
							<p class="mb-0 d-none d-md-block">Our services have been available for many years</p>
						  </div>
						</div>
						<div class="align-self-center">
						  <h2 class="h1 mb-0">+2 Years</h2>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="col-xl-6 col-md-12 mb-4">
				  <div class="card">
					<div class="card-body">
					  <div class="d-flex justify-content-between p-md-1">
						<div class="d-flex flex-row">
						  <div class="align-self-center">
							<i class="fa fa-comment-alt text-warning fa-3x me-4"></i>
						  </div>
						  <div>
							<h4>Total Reviews</h4>
							<p class="mb-0 d-none d-md-block">Don't take only our word for it, see the reviews form our customers themselves</p>
						  </div>
						</div>
						<div class="align-self-center">
						  <h2 class="h1 mb-0">1,215</h2>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-xl-6 col-md-12 mb-4">
				  <div class="card">
					<div class="card-body">
					  <div class="d-flex justify-content-between p-md-1">
						<div class="d-flex flex-row">
						  <div class="align-self-center">
							<h2 class="h1 mb-0 me-4">+10 000</h2>
						  </div>
						  <div>
							<h4>Total Repair Jobs</h4>
							<p class="mb-0 d-none d-md-block">We have served more clients and customers than we can count</p>
						  </div>
						</div>
						<div class="align-self-center">
						  <i class="fa-solid fa-laptop text-danger fa-3x"></i>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="col-xl-6 col-md-12 mb-4">
				  <div class="card">
					<div class="card-body">
					  <div class="d-flex justify-content-between p-md-1">
						<div class="d-flex flex-row">
						  <div class="align-self-center">
							<h2 class="h1 mb-0 me-4">87%</h2>
						  </div>
						  <div>
							<h4>Customer Satisfaction Ratings</h4>
							<p class="mb-0 d-none d-md-block">We provide the best services at affordable prices</p>
						  </div>
						</div>
						<div class="align-self-center">
						  <i class="fas fa-wallet text-success fa-3x"></i>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</section>
		</div>

	</main>

	<?php include("components/footer.inc.php"); ?>
	<?php include("components/logout.modal.inc.php"); ?>
	<?php include("components/scripts.inc.php"); ?>

	<!-- End your project here-->

</body>
</html>
