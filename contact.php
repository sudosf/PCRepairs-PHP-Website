<?php include("components/head.inc.php"); ?>

	<title> PCRepairs - Contact </title>
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
				<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
				<li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
				<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
			</ul> <!-- Navbar Links -->

			<?php include('components/nav.rightside.inc.php'); ?>
			</div> <!-- Navbar items -->
		</div> <!-- container -->
		</nav> <!-- Navbar -->


			<!-- Intro Image -->
		<div id="intro" class="bg-image text-center rounded text-white">
			<div class="intro-mask mask"></div>
			<!-- Card -->
			<div class="card bg-transparent text-center my-5">
				<div class="card-body mt-5 ">
				<h5 class="card-title display-4 fw-bold mt-5">Contact US</h5>
				<p class="card-text fw-light h1 ">
					While we are good with smoke signals, 
                    there are simpler ways for us to get in touch and <br>
                    answer any questions you have.
				</p>
				</div>
			</div> <!-- Card -->
      </div> <!-- Intro Image -->
	</header>

	<main>
        <div class="container my-4">
            <!-- Section: Contact v.1 -->
            <section class="m-5">
                <!-- Section heading -->
				<h5 class="card-title text-dark display-4 mb-5 text-center">Get In Touch</h5>
                
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-lg-5 mb-lg-0 mb-4">

                        <section>
                            <!-- Intro Image -->
                        <div id="book_about" class="bg-image text-center rounded text-white ">
                            <div class="book-mask mask"></div>

                        <form class="">
                            <!-- Form with header -->
                            <div class="card border border-dark mask-card bg-transparent text-center mx-1 my-5">
                            <div class="card-body text-light">
                                <!-- Header -->
                                <div class="form-header">
                                    <h3 class="px-2 py-3 text-center bg-primary text-light"><i class="fas fa-envelope"></i> Write to us:</h3>
                                </div>
    
                                <!-- Body -->
                                <div class="form-outline mb-4 mt-3">
                                    <input type="text" id="formName" class="form-control text-light" />
                                    <label  class="form-label text-light" for="formNname">
                                        <i class="fas fa-user prefix"></i>
                                        Name
                                    </label>
                                </div>
                                
                                <div class="form-outline mb-4">
                                    <input type="text" id="form-email" class="form-control text-light">
                                    <label class="form-label text-light" for="form-email">
                                        <i class="fas fa-envelope prefix"></i>
                                        Your email
                                    </label>
                                </div>
    
                                <div class="form-outline mb-4">
                                    <input type="text" id="form-Subject" class="form-control text-light">
                                    <label class="form-label text-light" for="form-Subject">
                                        <i class="fas fa-tag prefix"></i>
                                        Subject
                                    </label>
                                </div>
    
                                <div class="form-outline mb-4">
                                    <textarea id="form-text" class="form-control md-textarea text-light" rows="3"></textarea>
                                    <label class="form-label text-light" for="form-text">
                                        <i class="fas fa-pencil-alt prefix"></i>
                                        Send message
                                    </label>
                                </div>
    
                                <div class="text-center">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            </div> <!-- Form with header -->
                            </form>
                        </div> <!-- Grid column -->
                      </div> <!-- Intro Image -->
                
                    <!-- Grid column -->
                    <div class="col-lg-7">
                        <!--Google map-->
                        <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
                            <iframe
                            src="https://maps.google.com/maps?q=rhodes%20university&t=&z=19&ie=UTF8&iwloc=&output=embed" 
                            frameborder="0"
                            style="border:0" allowfullscreen></iframe>
                        </div>
                        
                        <!-- Buttons-->
                        <div class="row text-center">
                            <div class="col-md-4">
                                <a class="btn-floating"><i class="fas fa-map-marker-alt"></i></a>
                                <p>Grahamstown, 6139</p>
                                <p class="mb-md-0">South Africa</p>
                            </div>
                            <div class="col-md-4">
                                <a class="btn-floating"><i class="fas fa-phone"></i></a>
                                <p>046 603 8111</p>
                                <p class="mb-md-0">Mon - Fri, 8:00-22:00</p>
                            </div>
                                <div class="col-md-4">
                                <a class="btn-floating"><i class="fas fa-envelope"></i></a>
                                <p>PCRepairs@gmail.com</p>
                                <p class="mb-0">PCsale@gmail.com</p>
                            </div>
                        </div>
                    </div> <!-- Grid column -->  
                </div> <!-- Grid row -->
        </section> <!-- Section: Contact v.1 -->
        </div>

		<h5 class="card-title text-dark display-4 text-center">Frequently Asked Questions (FAQ)</h5>
		<div class="accordion container mb-5" id="accordionExample">
			<div class="accordion-item">
			  <h2 class="accordion-header" id="headingOne">
				<button
				  class="accordion-button"
				  type="button"
				  data-mdb-toggle="collapse"
				  data-mdb-target="#collapseOne"
				  aria-expanded="true"
				  aria-controls="collapseOne"
				>
				What kind of parts do you use for repairs?
				</button>
			  </h2>
			  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-mdb-parent="#accordionExample">
				<div class="accordion-body">
				  <strong>We only use 100% genuine parts where possible. If original parts are not available, we will source the highest quality parts from our trusted suppliers.</strong> 
				</div>
			  </div>
			</div>
			<div class="accordion-item">
			  <h2 class="accordion-header" id="headingTwo">
				<button
				  class="accordion-button collapsed"
				  type="button"
				  data-mdb-toggle="collapse"
				  data-mdb-target="#collapseTwo"
				  aria-expanded="false"
				  aria-controls="collapseTwo"
				>
				Do you repair Apple and Windows desktop and laptop computers?
				</button>
			  </h2>
			  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-mdb-parent="#accordionExample">
				<div class="accordion-body">
				  <strong>Yes, we offer software and hardware repair for all brands of desktop and laptop computers.</strong> 
				</div>
			  </div>
			</div>
			<div class="accordion-item">
			  <h2 class="accordion-header" id="headingThree">
				<button
				  class="accordion-button collapsed"
				  type="button"
				  data-mdb-toggle="collapse"
				  data-mdb-target="#collapseThree"
				  aria-expanded="false"
				  aria-controls="collapseThree"
				>
				Can you recover data from my liquid damaged Mac?
				</button>
			  </h2>
			  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-mdb-parent="#accordionExample">
				<div class="accordion-body">
				  <strong>Yes. If your Mac has a removable hard drive, we can get the data directly from the drive. If the SSD chips are soldered to the logic board in your Mac, we need to repair the logic board first to access to your data. Some MacBook models have a “lifeboat” port to access to the SSD chips directly via a special data recovery tool.</strong> 
				</div>
			  </div>
			</div>
		</div>
	</main>

	<?php include("components/footer.inc.php"); ?>
	<?php include("components/logout.modal.inc.php"); ?>
	<?php include("components/scripts.inc.php"); ?>
	<!-- End your project here-->

</body>
</html>