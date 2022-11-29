<?php include("components/head.inc.php"); ?>

<title> PCRepairs - Services </title>
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
                        <li class="nav-item"><a class="nav-link active" href="services.php">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
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
            <div class="card bg-transparent text-center m-5">
                <div class="card-body mt-5">
                    <h5 class="card-title display-4 fw-bold mt-5">Our Reliable Services</h5>
                    <p class="card-text fw-light h1">
                        Your devices are in good Hands.
                    </p>
                </div>
            </div> <!-- Card -->
        </div> <!-- Intro Image -->
    </header>

    <main class="container-fluid">
        <div class="container px-4 py-5 text-center">

            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start px-3 my-3 h-100">
                    <div>
                        <i class="fa-solid fa-laptop fa-3x"></i>
                    </div>
                    <div>
                        <h2>Computer Repair</h2>
                        <p>
                            No matter the type of computer you have.
                            Bring in your laptop or desktop computer and where our friendly and expert computer
                            technicians will
                            provide a high-quality service to get your device back up and running.
                        </p>
                        <br>
                        <a href="book.php" class="btn btn-block btn-dark popup">
                            <i class="fa-solid fa-book me-2"></i>
                            Book Repair Job
                        </a>
                    </div>
                </div>
                <div class="col d-flex align-items-start px-3 my-3">
                    <div>
                        <i class="fa-solid fa-memory fa-3x text-warning"></i>
                    </div>
                    <div>
                        <h2>Data Recovery</h2>
                        <p>
                            Your data is the most important thing on your computer. Our technicians have the knowledge,
                            experience,
                            and software to recover a wide range of any failed mass storage devices.
                            We can also help you backup your important personal data to disk and the cloud.
                        </p>
                        <a href="book.php?selected=recovery" class="btn btn-block btn-warning popup">
                            <i class="fa-solid fa-book me-2"></i>
                            Book Recovery Job
                        </a>
                    </div>
                </div>
                <div class="col d-flex align-items-start px-3 my-3">
                    <div>
                        <i class="fa-solid fa-keyboard fa-3x"></i>
                    </div>
                    <div>
                        <h2>Parts and Accessories</h2>
                        <p>
                            <br>
                            We sell and supply extra computer parts for your desktops and laptops.
                            Such as charging cables, webcams, and monitors.
                            <br><br><br>
                        </p>

                        <a href="book.php" class="btn btn-block btn-dark popup">
                            <i class="fa-solid fa-book me-2"></i>
                            Book Installation Job
                        </a>
                    </div>
                </div>
            </div>

            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start px-3 my-3">
                    <div>
                        <i class="fa-solid fa-download fa-3x text-primary"></i>
                    </div>
                    <div>
                        <h2>System Install and Upgrades</h2>
                        <p>
                            PC Repairs can upgrade your Windows or Mac system to a new version and set everything up to
                            work properly with it.
                            Our upgrades can make your computer run smoother and give you the newest features of your
                            operating system.
                        </p>
                        <a href="book.php" class="btn btn-block btn-primary popup">
                            <i class="fa-solid fa-book me-2"></i>
                            Book Installation Job
                        </a>
                    </div>
                </div>

                <div class="col d-flex align-items-start px-3 my-3">
                    <div class="">
                        <i class="fa-solid fa-microchip fa-3x text-danger"></i>
                    </div>
                    <div>
                        <h2>Virus Removal Services</h2>
                        <p>
                            Most malware virus programs are designed to be hard to remove.
                            Malware often embeds itself in windows, hiding its files or modifying system files with its
                            own code.
                            This makes it difficult for the average user to remove; through years of experience, we can
                            remove the infestation without destroying your data.</p>
                        <a href="book.php" class="btn btn-block btn-danger popup">
                            <i class="fa-solid fa-book me-2"></i>
                            Book Removal Service
                        </a>
                    </div>
                </div>

                <div class="col d-flex align-items-start px-3 my-3">
                    <div>
                        <i class="fa-solid fa-satellite-dish fa-3x text-grayish"></i>
                    </div>
                    <div>
                        <h2>Internet and WiFi</h2>
                        <p>Online computer help saves you time, hassles, headaches, and money by fixing a slow computer,
                            fixing email and internet problems, or completing a computer tune-up.
                            Our trained technicians ooperate your keyboard and mouse to resolve your problems.
                        </p>
                        <br>
                        <a href="book.php" class="btn btn-block btn-grayish popup">
                            <i class="fa-solid fa-book me-2"></i>
                            Book Internet Services
                        </a>
                    </div>
                </div>
            </div>

            <!--Section: Design Block-->
            <section>
                <!-- Intro Image -->
                <div id="intro" class="bg-image text-center rounded mb-5 text-white ">
                    <div class=" mask mask-card"></div>
                    <!-- Section: Content -->
                    <section class="d-flex justify-content-center align-items-center h-100 mt-5">
                        <!-- Card -->
                        <div class="card bg-transparent text-center shadow-5-strong mask-card rounded-5 px-3 ">
                            <div class="card-body container">
                                <p class="card-title display-4 fw-bold">
                                    Reliable and Fast Service
                                </p>
                                <p class="card-text fw-light h1 mt-5">
                                    Our exports are standing by to fulfill your needs
                                </p>

                                <a type="button" href="book.php"
                                    class="btn btn-lg btn-block mt-5 py-4 display-1 btn-success popup">
                                    <i class="fa-solid fa-book me-2"></i>
                                    Book Now
                                </a>
                            </div>
                        </div> <!-- Card -->
                    </section> <!-- Section: Content -->
                </div> <!-- Intro Image -->
            </section>
            <!--Section: Design Block-->
        </div>
    </main>

    <?php include("components/footer.inc.php"); ?>
    <?php include("components/logout.modal.inc.php"); ?>
    <?php include("components/scripts.inc.php"); ?>

    <!-- End your project here-->

</body>

</html>