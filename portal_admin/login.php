<?php include("portal_components/head.inc.php"); ?>
<title> Admin - Sign in </title>
</head>

<style>
html,
body,
.login_intro {
    height: 1300px;
}

#intro {
    background-image: url('img/bg-home.jpg');
    background-color: rgba(0, 23, 73, 0.253);
    background-size: cover;

}

#intro .intro-mask {
    background-color: rgba(0, 4, 29, 0.644);
}
</style>

<body>
    <!-- Start your project here-->
    <section id="intro" class="login_intro">
        <div class="bg-image h-100" style="background-image: url('img/bg-home.jpg');">
            <div class="intro-mask mask"></div>

            <div class="mask d-flex align-items-center vh-100">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card bg-grad-login" style="border-radius: 1rem;">
                                <div class="card-body p-5 text-white">

                                    <div class="my-md-4">

                                        <div class="text-center pt-1">
                                            <i class="fas fa-user-astronaut fa-3x"></i>
                                            <h1 class="fw-bold my-4 text-gradient-white">Admin</h1>
                                        </div>

                                        <!--Form Variables -->
                                        <?php
                                        $usernameEmail = $password = "";

                                        if (isset($_POST['submit'])) {
                                            require('../server/util.php');
                                            // utility functions
                                            $util = new Util();
                                            $conn = $util->conn;

                                            $usernameEmail = mysqli_real_escape_string($conn, $_POST['username']);
                                            $password = mysqli_real_escape_string($conn, $_POST['psw']);
                                            $usernameEmail = $util->strip_email($usernameEmail);
                                        }
                                        ?>

                                        <form action="login.php" method="POST">
                                            <label class="form-label text-light" for="typeEmail">Username/Email</label>
                                            <div class="form-outline form-white mb-4">
                                                <input type="email" id="typeEmail" name="username"
                                                    class="form-control form-control-lg border"
                                                    placeholder="e.g user@pcrepairs.com"
                                                    value="<?php echo $usernameEmail; ?>" required />
                                            </div>

                                            <label class="form-label text-light" for="typePassword">Password</label>
                                            <div class="form-outline form-white mb-4">
                                                <input type="password" id="typePassword" name="psw"
                                                    class="form-control form-control-lg border"
                                                    placeholder="enter password" requird />
                                            </div>

                                            <?php
                                            if (isset($_POST['submit'])) {
                                                $_SESSION['staff_access'] = "false";
                                                $_SESSION['HOD_access'] = "false";

                                                $table = "staff";
                                                $userData = $util->getAdminLoginData($usernameEmail, $password, $table);
                                                if ($userData != null) {
                                                    $role = $userData['role'];

                                                    if ($role == 'staff') {
                                                        $_SESSION['staff_access'] = "true";
                                                    } elseif ($role == 'HOD') {
                                                        $_SESSION['HOD_access'] = "true";
                                                    }

                                                    $_SESSION['userData'] = $userData;

                                                    echo "<script> location.replace('index.php'); </script>";
                                                    // header('Location: index.php');
                                                } else {
                                                    echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                                            Unable to sign in, <strong>username/password</strong> incorrect
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
                                        <p class="mb-0 mt-3">
                                            <a href="#!" class="text-white">Forgot <span
                                                    class="fw-bold">Password?</span></a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("portal_components/scripts.inc.php"); ?>
    <!-- End your project here-->
</body>

</html>