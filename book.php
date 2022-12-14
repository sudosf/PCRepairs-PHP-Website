<?php
	include("components/head.inc.php");
	require_once("server/secure.php");
?>

	<title> PCRepairs - Booking </title>
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
				<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
				<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
			</ul> <!-- Navbar Links -->

      <?php include('components/nav.rightside.inc.php'); ?>

			</div> <!-- Navbar items -->
		</div> <!-- container -->
		</nav> <!-- Navbar -->
	</header>

    <section id="intro" class="login_intro">
        <div class="bg-image h-100">
			<div class="intro-mask mask"></div>

            <div class="mask d-flex align-items-center v-100 mt-5">
                <div class="container-fluid my-5">
                  <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                      <div class="card gradient-custom-booking" style="border-radius: 1rem;">
                        <div class="card-body text-dark p-5">
                            <div class="text-center pt-1">
                                <i class="fa-solid fa-basket-shopping fa-4x text-success"></i>
                                <h1 class="fw-bold my-4 text-uppercase">Book A Service</h1>
                            </div>

							<?php
							$row = $_SESSION['userData'];

							$fname = $row['firstname'];
							$lname = $row['lastname'];
							$email = $row['email'];
							$mobile = $row['mobile'];

							?>

                          <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example1" class="form-control text-dark " value="<?php echo $fname; ?>"/>
                                <label class="form-label text-dark" for="form6Example1">First name</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example2" class="form-control text-dark" value="<?php echo $lname; ?>"/>
                                <label class="form-label text-dark " for="form6Example2">Last name</label>
                            </div>
          
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                              <input type="email" id="form6Example5" class="form-control text-dark" value="<?php echo $email; ?>"/>
                              <label class="form-label text-dark " for="form6Example5">Email</label>
                            </div>
          
                            <!-- Number input -->
                            <div class="form-outline mb-4">
                              <input type="tel" id="form6Example6" class="form-control text-dark" value="<?php echo $mobile; ?>"/>
                              <label class="form-label text-dark" for="form6Example6">Phone</label>
                            </div>

							<p class="m-0 p-1 h6 fw-semibold">Which of these best describes your problem?</p>
							<select id="repair_type" name="repair_type" class="form-select" aria-label="Default select example">
								
								<option value="Computer Repair" selected>Computer Repair</option>
								<option value="Data Recovery">Data Recovery</option>
								<option value="Parts and Accessories">Parts &amp; Accessories</option>
								<option value="System Install and Upgrades">System Install &amp; Upgrades</option>
								<option value="Virus Removal Services">Virus Removal Services</option>
								<option value="Internet and WiFi<">Internet &amp; WiFi</option>
								<option value="Other">Other</option>
							</select>

							<!-- Message input -->
							<p class="m-0 p-1 mt-4 h6 fw-semibold">Please provide further details on your problem if applicable</p>
							<div class="form-outline my-2">
								<textarea class="form-control text-dark" id="form6Example7" rows="4" name="description" required></textarea>
								<label class="form-label text-dark" for="form6Example7">Description</label>
							</div>

							<?php 
							if (isset($_POST['submit'])) {
								require('server/util.php');
								// utility functions
								$util = new Util();
								$conn = $util->conn;

								$customerID = $row['customerID'];
								$type = $_POST['repair_type'];
								$description = $_POST['description'];
								$date = date('Y-m-d');
								$status = "pending";

								$query = "INSERT INTO repairjobs (type, description, DateRecieved, status, customerID)
								 			VALUES ('$type', '$description', '$date', '$status', '$customerID')";

								$result = mysqli_query($conn, $query);

								if ($result == false) {
									echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
										unable to add account, please try again later
									".$conn->error."</div>";
								} else {
									echo "<div class='alert alert-success my-2 p-2 text-center' role='alert'>
										Repair Job booked successfuly, go to your portal to manage all your jobs:
										<div class='text-center'>
											<a href='portal_customer/index.php' class='btn btn-primary px-4 py-2 text-light fw-bold'>GO to Portal</a>
										</div>
									</div>";
									// $util->sendEmail("nkunaf.sf@gmail.com", "test Email", "many Thanks");
								}
							}

							?>

                            <!-- Submit button -->
                            <div class="text-center mt-4">
                                <button class="btn btn-success btn-lg btn-rounded btn-block" name="submit" type="submit">Place Order</button>
                            </div>
                          </form>

                          <div class="text-center mt-4">
                            <p class="mb-0">We offer a wide range of services: <a href="services.php" class="text-success fw-bold">VIEW LIST</a></p>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>

	<?php include("components/footer.inc.php"); ?>
	<?php include("components/logout.modal.inc.php"); ?>
	<?php include("components/scripts.inc.php"); ?>
	<!-- End your project here-->
</body>
</html>
