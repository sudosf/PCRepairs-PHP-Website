<?php include("components/head.inc.php"); ?>

<title> PCRepairs - Sign in </title>
</head>

<body>
    <!-- Start your project here-->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0 p-0">
            <div class="container">
                <?php
                require_once('components/logo.inc.php');
                require_once('components/hamtoggler.php');
                require_once('components/nav.login.inc.php');
                ?>

            </div> <!-- container -->
        </nav> <!-- Navbar -->
    </header>

    <section id="intro" class="login_intro">
        <div class="bg-image h-100"
            style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg');">
            <div class="intro-mask mask"></div>

            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card gradient-custom" style="border-radius: 1rem;">
                                <div class="card-body p-5 text-white">

                                    <div class="my-md-4">

                                        <div class="text-center pt-1">
                                            <i class="fas fa-user-astronaut fa-3x"></i>
                                            <h1 class="fw-bold my-4 text-uppercase">Welcome</h1>
                                        </div>

                                        <!--Form Variables -->
                                        <?php
                                        $usernameEmail = $password = "";

                                        if (isset($_POST['submit'])) {
                                            require('server/util.php');
                                            // utility functions
                                            $util = new Util();
                                            $conn = $util->conn;

                                            $usernameEmail = mysqli_real_escape_string($conn, $_POST['username']);
                                            $password = mysqli_real_escape_string($conn, $_POST['psw']);
                                            $usernameEmail = $util->strip_email($usernameEmail);
                                        }
                                        ?>

                                        <form action="login.php" method="POST">
                                            <div class="form-outline form-white mb-4">
                                                <input type="email" id="typeEmail" name="username"
                                                    class="form-control form-control-lg"
                                                    placeholder="e.g user@gmail.com"
                                                    value="<?php echo $usernameEmail; ?>" required />
                                                <label class="form-label" for="typeEmail">Username/Email</label>
                                            </div>

                                            <div class="form-outline form-white mb-4">
                                                <input type="password" id="typePassword" name="psw"
                                                    class="form-control form-control-lg" requird />
                                                <label class="form-label" for="typePassword">Password</label>
                                            </div>

                                            <?php
                                            if (isset($_POST['submit'])) {
                                                $table = "customers";
                                                $userData = $util->getUserLoginData($usernameEmail, $password, $table);
                                                if ($userData != null) {
                                                    $_SESSION['customer_access'] = 'true';
                                                    $_SESSION['userData'] = $userData;

                                                    echo "<script> location.replace('index.php'); </script>";
                                                    // header('Location: index.php');
                                                } else {
                                                    echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                                            unable to sign in, <strong>username/password</strong> incorrect
                                        </div>";
                                                }
                                            }
                                            ?>

                                            <div class="text-center mt-4">
                                                <button class="btn btn-light btn-lg btn-rounded btn-block" name="submit"
                                                    type="submit">Sign in</button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="text-center">
                                        <p class="mb-0">Don't have an account? <a href="register.php"
                                                class="text-light fw-bold">Sign up</a></p>
                                    </div>

                                    <div class="text-center">
                                        <p class="mt-3 mb-0"><small class="me-2">I am a member of staff:</small><a
                                                href="portal_admin/login.php"
                                                class="btn btn-sm btn-grayish text-dark p-1">
                                                <small>admin sign in</small>
                                            </a></p>
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