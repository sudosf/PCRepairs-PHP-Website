<?php include("components/head.inc.php"); ?>

<title> PCRepairs - About </title>
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
                <div class="collapse navbar-collapse h5 fw-semibold" id="navbarSupportedContent">
                    <!-- Navbar Links -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
                    </ul> <!-- Navbar Links -->

                    <?php include('components/nav.rightside.inc.php'); ?>
                </div> <!-- Navbar items -->
            </div> <!-- container -->
        </nav> <!-- Navbar -->

        <!-- Intro Image -->
        <div id="intro" class="bg-image text-center rounded text-white">
            <div class="intro-mask mask"></div>
            <!-- Card -->
            <div class="card bg-transparent text-center m-5">
                <div class="card-body mt-5">
                    <h5 class="card-title display-4 fw-bold mt-5">About PCRepairs</h5>
                    <p class="card-text fw-light h1">
                        Trust the Certified Professionals.
                    </p>
                </div>
            </div> <!-- Card -->
        </div> <!-- Intro Image -->
    </header>

    <main>
        <!-- Section: Devs cards-->
        <section class="bg-image about">

            <!-- Container: outer  -->
            <div class="mask d-flex align-items-center h-100">
                <!-- Container: inner  -->
                <div class="container-fluid text-center">

                    <h5 class="card-title text-dark display-5 mb-5">Our Developers:</h5>
                    <!-- row -->
                    <div class="row g-5 justify-content-center text-center">
                        <!-- Column: outer  -->
                        <div class="col-md-3 mb-4 mb-md-0">
                            <div class="card mask-about py-5 text-white popup">
                                <!-- Card  -->
                                <div class="card-body popup">
                                    <img class="rounded-circle shadow-2-strong mb-5" src="img/profile.png" alt="avatar"
                                        style="width: 150px; height: 150px;">

                                    <h5 class="mb-4">Siyabonga Fortune</h5>
                                    <p class="mb-4">Senior Web Developer</p>

                                    <!-- Social Links -->
                                    <a href="https://www.facebook.com/sprogrammer.sudo/" target="_blank" class="px-1"><i
                                            class="fab fa-facebook text-white fa-2x"></i></a>
                                    <a href="https://www.hackerearth.com/@nkunaf.sf" target="_blank" class="px-1"><i
                                            class="fab fa-brands fa-hackerrank text-white fa-2x"></i></i></a>
                                    <a href="https://twitter.com/?lang=en" target="_blank" class="px-1"><i
                                            class="fab fa-twitter text-white fa-2x"></i></a>
                                    <a href="https://linkedin.com/in/siyabonga-fortune-225819238" target="_blank"
                                        class="px-1"><i class="fab fa-linkedin-in text-white fa-2x"></i></a>

                                </div><!-- Card  -->
                            </div>
                        </div><!-- Column: outer  -->

                        <!-- Column: outer  -->
                        <div class="col-md-3 mb-4 mb-md-0">
                            <div class="card mask-about py-5 text-white popup">
                                <!-- Card  -->
                                <div class="card-body">
                                    <img class="rounded-circle shadow-2-strong mb-5" src="img/profile.png"
                                        alt="avatar" style="width: 150px; height: 150px;">

                                    <h5 class="mb-4">Cabe Morrison</h5>
                                    <p class="mb-4">Backend Developer</p>

                                    <!-- Social Links -->
                                    <a href="#!" class="px-1"><i class="fab fa-github text-white fa-2x"></i></a>
                                    <a href="#!" class="px-1"><i class="fab fa-twitter text-white fa-2x"></i></a>
                                    <a href="#!" class="px-1"><i class="fab fa-linkedin-in text-white fa-2x"></i></a>
                                </div><!-- Card  -->
                            </div>
                        </div><!-- Column: outer  -->

                        <!-- Container: outer  -->
                        <div class="col-md-3 mb-0">
                            <div class="card mask-about py-5 text-white popup">
                                <!-- Card  -->
                                <div class="card-body popup">
                                    <img class="rounded-circle shadow-2-strong mb-5" src="img/profile.png" alt="avatar"
                                        style="width: 150px; height: 150px;">

                                    <h5 class="mb-4">Benjamin Spies</h5>
                                    <p class="mb-4">Web Designer</p>

                                    <!-- Social Links -->
                                    <ul class="list-unstyled mb-0">
                                        <a href="#!" class="px-1"><i
                                                class="fab fa-linkedin-in text-white fa-2x"></i></a>
                                        <a href="#!" class="px-1"><i class="fab fa-instagram text-white fa-2x"></i></a>
                                    </ul>
                                </div> <!-- Card  -->
                            </div>
                        </div> <!-- Column: outer  -->

                        <!-- Container: outer  -->
                        <div class="col-md-3 mb-0">
                            <div class="card mask-about py-5 text-white popup">
                                <!-- Card  -->
                                <div class="card-body">
                                    <img class="rounded-circle shadow-2-strong mb-5" src="img/profile.png" alt="avatar"
                                        style="width: 150px; height: 150px;">

                                    <h5 class="mb-4">Unakho Ngumla</h5>
                                    <p class="mb-4">Web Content Writer</p>

                                    <!-- Social Links -->
                                    <ul class="list-unstyled mb-0">
                                        <a href="#!" class="px-1"><i
                                                class="fab fa-linkedin-in text-white fa-2x"></i></a>
                                        <a href="#!" class="px-1"><i class="fab fa-instagram text-white fa-2x"></i></a>
                                    </ul>
                                </div> <!-- Card  -->
                            </div>
                        </div> <!-- Column: outer  -->
                    </div> <!-- row -->
                </div> <!-- Container:inner -->
            </div> <!-- Container: outer  -->
        </section> <!-- Section: Devs cards-->

        <!-- Section: Description -->
        <section id="team" class="text-center bg-dark p-5">
            <!-- container -->
            <div class="container-fluid">
                <h5 class="card-title text-light display-5 m-5">The PCRepairs Standard: </h5>

                <!-- row -->
                <div class="row justify-content-center">
                    <!-- Column  -->
                    <div class="col-md-8 col-lg-5 col-xl-4">
                        <!-- Card  -->
                        <div class="card mb-3 h-90 popup" style="max-width: 540px; ">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="img/8.jpg" alt="..." class="img-fluid h-100" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Our Services</h5>
                                        <p class="card-text">
                                            Our services range from software and hardware repair to data recovery and
                                            selling extra computer parts and accessories. Our technicians are certified
                                            for any desktop and laptop computer repair.
                                            We pride ourselves on being the top computer repair service provider in
                                            Grahamstown.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Card  -->
                    </div><!-- Column: outer  -->

                    <!-- Column: outer  -->
                    <div class="col-md-6 col-lg-5 col-xl-4">
                        <!-- Card  -->
                        <div class="card mb-3 h-90 popup" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="img/ep.jpg" alt="..." class="img-fluid h-100" />
                                </div>

                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Our Clients</h5>
                                        <p class="card-text">
                                            Wood Street Academy Staff and Students are our primary customers, as well as
                                            local small businesses who all trust PC Repairs to solve their toughest
                                            computer issues. We are not just in the business of fixing computers;
                                            PC Repairs is focused on helping our customers. Our goal is your complete
                                            satisfaction.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Card  -->
                    </div><!-- Column: outer  -->

                    <!-- Column: outer  -->
                    <div class="col-md-6 col-lg-5 col-xl-4">
                        <!-- Card  -->
                        <div class="card mb-3 h-90 popup" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="img/5.jpg" alt="..." class="img-fluid h-100" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Our History</h5>
                                        <p class="card-text">
                                            PC Repairs is based on +2 years of experience of customer service. Our
                                            operations started
                                            as a small computer repair department for the Wood Street Academy staff and
                                            students and
                                            have grown to provide computer repair servies for the academty and local
                                            businesses. .
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Card  -->
                    </div><!-- Column: outer  -->
                </div><!-- row -->
            </div><!-- container -->
        </section> <!-- Section: Description -->

        <!--Section: Design Block-->
        <section class="my-5 container-fluid d-flex flex-column justify-content-center align-items-center">
            <!-- Intro Image -->
            <div id="book_about" class="bg-image text-center rounded-5 text-white m-auto">
                <div class="book-mask mask"></div>
                <!-- Section: Content -->
                <section class="d-flex justify-content-center align-items-center mx-3 my-3">
                    <!-- Card -->
                    <div
                        class="card border border-grayish bg-transparent text-center shadow-5-strong mask-card rounded-5 px-3 py-5">
                        <div class="card-body container">
                            <p class="card-title display-4 fw-bold">
                                Book Our Services Today
                            </p>

                            <p class="card-text fw-light h1 mt-5">
                                Our expert technicians are available 24/7 to get your devices. <br>
                                running up again
                            </p>

                            <a type="button" href="services.php"
                                class="btn text-light btn-lg px-4 mt-5 py-3 display-1 btn-success popup">
                                <i class="fa-solid fa-book me-2"></i>
                                Book Now
                            </a>
                        </div>
                    </div> <!-- Card -->
                </section> <!-- Section: Content -->
            </div> <!-- Intro Image -->
        </section>
        <!--Section: Design Block-->
    </main>

    <?php include("components/footer.inc.php"); ?>
    <?php include("components/logout.modal.inc.php"); ?>
    <?php include("components/scripts.inc.php"); ?>

    <!-- End your project here-->
</body>

</html>