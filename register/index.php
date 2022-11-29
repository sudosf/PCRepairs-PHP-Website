<?php include("components/head.inc.php"); ?>

	<title>AZA Explorers: Register</title>

</head>

<style>
	@font-face {
		font-family: mochiyPopOneFont;
		src: url(css/fonts/MochiyPopOne-Regular.ttf);
	}

	html, body {
		font-family: mochiyPopOneFont;
	}
</style>

<body>
	<!-- Start your project here-->

    <section id="intro" >
        <div class="bg-image vh-100">
			<div class="intro-mask mask"></div>

			<div class="mt-5"></div>

            <div  class="mask d-flex flex-column align-items-center container my-5">
				<div class="d-flex flex-row align-items-center justify-content-center shadow-lg px-5 py-2">
					<img src="img/logo_1.png" class="img-fluid me-5" style="width: 100px; height: 100px;" alt="">
					<h1 class="deep-shadow fw-bold display-1 text-uppercase text-light text-center">
						<span style="color: #e9b310;">
							A<span style="color: yellow;">Z</span>A
						</span>
						Explorers
					</h1>
				</div>

                <div class="container my-5">
                  <div class="row justify-content-center">
                    <div class="col-12 col-lg-7">
                      <div class="card gradient-custom" style="border-radius: 1rem;">
                        <div class="card-body text-light p-5">
                            <div class="text-center pt-1">
								<img src="img/profile.png" class="img-fluid" width="100px"  alt="">
                                <h1 class="fw-bold my-4 text-uppercase">Create an Account</h1>
                            </div>

							<?php

								$fname = $lname = $username = "";
								$psw =$psw_repeat = "";

							if (isset($_POST['submit'])) {
								require('server/util.php');
								// utility functions
								$util = new Util();
								$conn = $util->conn;

								$fname = $util->strip($_POST['fname']);
								$lname = $util->strip($_POST['lname']);
								$username = $util->strip_username($_POST['username']);

								$grade = intval($_POST['grade']);

								$psw = mysqli_real_escape_string($conn, $_POST['psw']);
								$psw_repeat = mysqli_real_escape_string($conn, $_POST['psw2']);
							}
							?>

                          <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                              <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline bg-light">
                                  <input type="text" id="form6Example1" class="form-control bg-light text-dark" name="fname" value="<?php echo $lname; ?>" required/>
                                  <label class="form-label text-dark" for="form6Example1">Name</label>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                  <input type="text" id="form6Example2" class="form-control bg-light text-dark" name="lname" value="<?php echo $lname; ?>" required/>
                                  <label class="form-label text-dark" for="form6Example2">Surname</label>
                                </div>
                              </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                              <input type="text" id="form6Example5" class="form-control bg-light text-dark" name="username" placeholder="e.g ultimateGamerX" value="<?php echo $username; ?>" required/>
                              <label class="form-label text-dark" for="form6Example5">Username</label>
                            </div>

							<div class="d-flex flex-row">
								<p class="m-0 p-1 h4 fw-semibold">Grade:</p>

								<select id="grade" name="grade" class="form-select mb-4 bg-warning" aria-label="Default select example">
									<option value="5" selected>5</option>
									<option value="6">6</option>
									<option value="7">7</option>
								</select>
							</div>

							<div class="form-outline mb-4">
								<input type="password" id="psw" class="form-control bg-light text-dark form-control-lg" name="psw" value="<?php echo $psw; ?>" required/>
								<label class="form-label text-dark" for="typePassword">Password</label>
							</div>

							<div class="form-outline mb-4">
								<input type="password" id="psw_repeat" class="form-control bg-light text-dark form-control-lg" name="psw2" value="<?php echo $psw_repeat; ?>"  required/>
								<label class="form-label text-dark" for="typePassword">Repeat Password</label>
							</div>

							<?php 
							if (isset($_POST['submit'])) {
								if ($psw !== $psw_repeat) {
									echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
											<strong>passwords</strong> do not match, please try again.
										</div>";
								}
								elseif ( $util->usernameExists($username) ) {
									echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
											unable to register account, <strong>username</strong> already exists
										</div>";                                       
								}
								else {
									// hash the password to store
									$psw = password_hash($psw, PASSWORD_DEFAULT);
									$userID = uniqid("LNR-", true);


									$query = "INSERT INTO users (userID, name, surname, grade, username, password, type)
									 		VALUES ('$userID', '$fname', '$lname', '$grade', '$username', '$psw', 'learner');";
									$result = mysqli_query($conn, $query);

									if ($result == false) {
										echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
											unable to add account, please make sure all details are valid
										</div>";
									} else {
										echo "<div class='alert alert-success my-2 p-2 text-center' role='alert'>
											Account successfully created, you can now close the page and log in to the game.
										</div>";
										// $util->sendEmail("nkunaf.sf@gmail.com", "test Email", "many Thanks");
									}
								}
							}
							?>

                            <!-- Submit button -->
                            <div class="text-center mt-4">
                                <button class="btn btn-success btn-lg btn-rounded btn-block" name="submit" type="submit">register</button>
                            </div>
                          </form>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>

	<?php include("components/scripts.inc.php"); ?>
	<!-- End your project here-->


</body>
</html>
