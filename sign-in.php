<?php include("components/head.inc.php"); ?>

<title> PCRepairs - Sign in </title>
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
                require_once('components/logo.inc.php');
                require_once('components/hamtoggler.php');
                require_once('components/nav.sign-in.inc.php');
                ?>

            </div> <!-- container -->
        </nav> <!-- Navbar -->
    </header>

    <section id="intro" class="login_intro">
        <div class="bg-image h-100">
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
                                        $username = $password = "";

                                        if (isset($_POST['submit'])) {
                                            require('server/util.php');
                                            // utility functions
                                            $util = new Util();
                                            $conn = $util->conn;

                                            $username = mysqli_real_escape_string($conn, $_POST['username']);
                                            $password = mysqli_real_escape_string($conn, $_POST['psw']);
                                            $username = $util->strip_email($username);
                                        }
                                        ?>

                                        <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                                            <div class="form mb-4">
                                            <label class="text-light" for="typeEmail">Username</label>
                                            <input type="text" id="typeEmail" name="username"
                                                    class="form-control form-control-lg"
                                                    value="<?php echo $username; ?>" required />
                                            </div>

                                            <div class="form mb-4">
                                            <label class="text-light" for="typePassword">Password</label>
                                                <input type="password" id="typePassword" name="psw"
                                                    class="form-control form-control-lg" requird />
                                            </div>

                                            <?php
                                            if (isset($_POST['submit'])) {
                                                $userData = $util->getUserLoginData($username, $password);

                                                // log in acess granted 
                                                // user data saved
                                                if ($userData != null) {
                                                    $_SESSION['user_access'] = 'true'; 
                                                    $_SESSION['userData'] = $userData; 

                                                    echo "<script> location.replace('dashboard.php'); </script>"; // redirect to home page
                                                } else { // user access denied
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
                                        <p class="mb-0">Don't have an account? <a href="sign-up.php"
                                                class="text-light fw-bold">Sign up</a></p>
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