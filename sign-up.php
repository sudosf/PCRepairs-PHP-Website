<?php include("components/head.inc.php"); ?>

	<title> PCRepairs - Sign up </title>
</head>

<style>
    .bg-image {
        background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg');
    }
</style>

<body>
	<!-- Start your project here-->

	<header>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0 p-0">
		<div class="container">
			<?php
				include('components/logo.inc.php');
			 	include('components/hamtoggler.php');
        		include('components/nav.sign-in.inc.php');
			?>

		</div> <!-- container -->
		</nav> <!-- Navbar -->
	</header>

    <section id="intro" class="login_intro">
        <div class="bg-image h-100">
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
								$username = $email = $psw = $psw_repeat = "";

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
								$username = $util->strip_email($_POST['username']);

								$psw = mysqli_real_escape_string($conn, $_POST['psw']);
								$psw_repeat = mysqli_real_escape_string($conn, $_POST['psw2']);
							}
							?>

                          <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                              <div class="col-12 col-md-6 mb-4">
                                <div class="form">
									<label class="form-label text-light" for="form6Example1">First name</label>
    	                            <input type="text" id="form6Example1" class="form-control" name="fname" value="<?php echo $lname; ?>" required/>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 mb-4">
                                <div class="form">
									<label class="form-label text-light " for="form6Example2">Last name</label>
                                  	<input type="text" id="form6Example2" class="form-control" name="lname" value="<?php echo $lname; ?>" required/>
                                </div>
                              </div>
                            </div>

							<!-- Username input -->
							<div class="form mb-4">
								<label class="form-label text-light " for="form6Example5">Username</label>
                              	<input type="text" id="form6Example5" class="form-control" name="username" placeholder="e.g user123" value="<?php echo $username; ?>" required/>
                            </div>

                            <!-- Email input -->
                            <div class="form mb-4">
								<label class="form-label text-light " for="form6Example5">Email</label>
                              	<input type="email" id="form6Example5" class="form-control" name="email" placeholder="e.g user@gmail.com" value="<?php echo $email; ?>" required/>
                            </div>

                            <!-- Number input -->
                            <div class="form mb-4">
								<label class="form-label text-light" for="form6Example6">Phone</label>
                              	<input type="tel" id="form6Example6" class="form-control" name="mobile"
							  		pattern="[0-9]{10}" title="must be 10 digits in the foramt: e.g 0713334444"
							  		placeholder="e.g 0724535531" value="<?php echo $mobile; ?>" required
								/>
                            </div>

							<div class="form form-white mb-4">
								<label class="form-label  text-light" for="typePassword">Password</label>
								<input type="password" id="psw" class="form-control form-control-lg" name="psw" value="<?php echo $psw; ?>" required/>
							</div>

							<div class="form form-white mb-4">
								<label class="form-label  text-light" for="typePassword">Repeat Password</label>
								<input type="password" id="psw_repeat" class="form-control form-control-lg" name="psw2" value="<?php echo $psw_repeat; ?>"  required/>
							</div>

							<?php 
							if (isset($_POST['submit'])) {
								if ($psw !== $psw_repeat) {
									echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
											the <strong>passwords</strong> do not match, please try again.
										</div>";
								}
								elseif ( $util->userExists($username) ) {
									echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
											username: <strong>$username</strong> has been taken, please try a different one.
										</div>";                                       
								}
								else {

									$customer_id = uniqid("cust-");
									 
									// hash the password to store
									$psw = password_hash($psw, PASSWORD_DEFAULT);

									//$query = "INSERT INTO customers (lastname, firstname, email, mobile, password)
									//VALUES ('$lname', '$fname', '$email', '$mobile', '$psw');";

									$query = "INSERT INTO users (id, firstname, lastname, email, mobile, password, type, username)
									VALUES ('$customer_id', '$fname', '$lname', '$email', '$mobile', '$psw', 'customer', '$username');";


									$result = mysqli_query($conn, $query);

									if ($result == false) {
										echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
											unable to add account, please make sure all details are valid
										</div>";
									} else {
										echo "<div class='alert alert-success my-2 p-2 text-center' role='alert'>
											Account successfully created, proceed to Sign in page:
											<div class='text-center'>
												<a href='sign-in.php' class='btn btn-primary px-4 py-2 text-light fw-bold'>Sign in</a>
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
                            <p class="mb-0">Already have an account? <a href="sign-in.php" class="text-light fw-bold">Sign in</a></p>
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
