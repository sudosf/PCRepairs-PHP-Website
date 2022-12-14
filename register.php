<?php include("components/head.inc.php"); ?>

	<title> PCRepairs - Sign up </title>
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
        		include('components/nav.login.inc.php');
			?>

		</div> <!-- container -->
		</nav> <!-- Navbar -->
	</header>

    <section id="intro" class="login_intro">
        <div class="bg-image vh-100" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg');">
			<div class="intro-mask mask"></div>

            <div  class="mask d-flex align-items-center  my-5 container">
                <div class="container">
                  <div class="row justify-content-center" >
                    <div class="col-12 col-lg-6">
                      <div class="card gradient-custom" style="border-radius: 1rem;">
                        <div class="card-body text-light p-5">
                            <div class="text-center pt-1">
                                <i class="fas fa-user-astronaut fa-3x"></i>
                                <h1 class="fw-bold my-4 text-uppercase">Create an Account</h1>
                            </div>

							<?php

								$fname = $lname = $mobile = "";
								$email = $psw =$psw_repeat = "";

							if (isset($_POST['submit'])) {
								require('server/util.php');
								// utility functions
								$util = new Util();
								$conn = $util->conn;

								$fname = $util->strip($_POST['fname']);
								$lname = $util->strip($_POST['lname']);
								$mobile = $util->strip($_POST['mobile']);

								$email = mysqli_real_escape_string($conn, $_POST['email']);
								$email = $util->strip_email($email);
								$psw = mysqli_real_escape_string($conn, $_POST['psw']);
								$psw_repeat = mysqli_real_escape_string($conn, $_POST['psw2']);
							}
							?>

                          <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                              <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                  <input type="text" id="form6Example1" class="form-control text-light" name="fname" value="<?php echo $lname; ?>" required/>
                                  <label class="form-label text-light" for="form6Example1">First name</label>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                  <input type="text" id="form6Example2" class="form-control text-light" name="lname" value="<?php echo $lname; ?>" required/>
                                  <label class="form-label text-light " for="form6Example2">Last name</label>
                                </div>
                              </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                              <input type="email" id="form6Example5" class="form-control text-light" name="email" placeholder="e.g user@gmail.com" value="<?php echo $email; ?>" required/>
                              <label class="form-label text-light " for="form6Example5">Email</label>
                            </div>

                            <!-- Number input -->
                            <div class="form-outline mb-4">
                              <input type="tel" id="form6Example6" class="form-control text-light" name="mobile"
							  pattern="[0-9]{10}" title="must be 10 digits in the foramt: e.g 0713334444"
							  placeholder="e.g 0724535531" value="<?php echo $mobile; ?>" required/>

                              <label class="form-label text-light" for="form6Example6">Phone</label>
                            </div>

							<div class="form-outline form-white mb-4">
								<input type="password" id="psw" class="form-control form-control-lg" name="psw" value="<?php echo $psw; ?>" required/>
								<label class="form-label" for="typePassword">Password</label>
							</div>
							<div class="form-outline form-white mb-4">
								<input type="password" id="psw_repeat" class="form-control form-control-lg" name="psw2" value="<?php echo $psw_repeat; ?>"  required/>
								<label class="form-label" for="typePassword">Repeat Password</label>
							</div>

							<?php 
							if (isset($_POST['submit'])) {
								if ($psw !== $psw_repeat) {
									echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
											<strong>passwords</strong> do not match, please try again.
										</div>";
								}
								elseif ( $util->emailExists($email) ) {
									echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
											unable to register account, <strong>user email</strong> already exists
										</div>";                                       
								}
								else {
									// hash the password to store
									$psw = password_hash($psw, PASSWORD_DEFAULT);

									$query = "INSERT INTO customers (lastname, firstname, email, mobile, password)
									VALUES ('$lname', '$fname', '$email', '$mobile', '$psw');";

									$result = mysqli_query($conn, $query);

									if ($result == false) {
										echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
											unable to add account, please make sure all details are valid
										</div>";
									} else {
										echo "<div class='alert alert-success my-2 p-2 text-center' role='alert'>
											Account successfully created, proceed to Sign in page:
											<div class='text-center'>
												<a href='login.php' class='btn btn-primary px-4 py-2 text-light fw-bold'>Sign in</a>
											</div>
										</div>";

										// $util->sendEmail("nkunaf.sf@gmail.com", "test Email", "many Thanks");
									}
								}
							}
							?>

                            <!-- Submit button -->
                            <div class="text-center mt-4">
                                <button class="btn btn-light btn-lg btn-rounded btn-block" name="submit" type="submit">Sign up</button>
                            </div>
                          </form>


                          <div class="text-center mt-4">
                            <p class="mb-0">Already have an account? <a href="login.php" class="text-light fw-bold">Sign in</a></p>
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
	<?php include("components/scripts.inc.php"); ?>
	<!-- End your project here-->


</body>
</html>
