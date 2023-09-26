<?php include("portal_components/head.inc.php") ?>

    <title>Portal - Profile</title>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-grad-custom sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <?php include("portal_components/logo.inc.php") ?>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading mt-5">
                Options
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Charts(Previous) -->
            <li class="nav-item">
                <a class="nav-link" href="portal_book.php">
                    <i class="fa fa-solid fa-book"></i>
                    <span>Book New Job</span></a>
            </li>

            <!-- Nav Item - Tables(Previous) -->
            <li class="nav-item">
                <a class="nav-link" href="messages.php">
                    <i class="fa-solid fa-envelope"></i>
                    Messages
                </a>
            </li>

            <!-- Nav Item - Tables(Previous) -->
            <li class="nav-item active">
                <a class="nav-link" href="profile.php">
                    <i class="fas fa-user fa-sm fa-fw"></i>
                    Profile
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column container-fluid">

            <!-- Main Content -->
            <div id="content">
                <?php include("portal_components/navbar.content.inc.php"); ?>
               

                <?php
                // $ Util() clas already declared
                $conn = $util->conn;
        
                $session_row = $_SESSION['userData'];
                $userID = $session_row['id'];

                $fname = $lname = $username = $email = $mobile = "";

                $query = "SELECT * 
                            FROM users
                            WHERE id = '$userID'";
                $result = $util->getTableData($query);
        
                $curr_avatar = "";
                if ($result != false) {
                    while ($row = mysqli_fetch_array($result)) {
                        $curr_avatar = $row['avatar'];
                        $fname = $row['firstname'];
                        $lname = $row['lastname'];
                        $username = $row['username'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                    }    
                } else {
                    // operation failed, avatar not found
                    $curr_avatar = null;
                }                
                ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

            <section class="container" style="background-color: #eee;">
                <div class="container py-5 w-75 m-auto">
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body text-center">

                                <?php
                                // $curr_avatar = null;
                                if ($curr_avatar == null) {
                                    echo"
                                        <i class='fa fa-solid fa-user-astronaut fa-5x text-dark'></i>
                                    ";
                                }
                                else {
                                    echo "
                                    <div class='container w-25'>
                                        <div class='ratio ratio-1x1 rounded-circle overflow-hidden shadow-4-strong'>
                                            <img src='uploads/$curr_avatar' class='img-cover' alt='profile-picture'>
                                        </div>
                                    </div>";
                                }                            
                                ?>

                                <h5 class="mt-3">
                                    <?php echo ucfirst($fname)." ". ucfirst($lname)." (".$username.")"; ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

    		<h5 class="card-title text-dark text-center display-6 fw-light">Update Details</h5>
                <div class=" container-fluid">
                        <div class="card mb-4">
                        <div class="card-body">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                                <div class="input-group mb-4">
                                    <span class="input-group-text fw-bol1d text-center">
                                        First & Last Name
                                    </span>
                                    <input id="fname" name="fname" class="form-control text-dark" value="<?php echo $fname; ?>" required>	
                                    <input id="lname" name="lname" class="form-control text-dark" value="<?php echo $lname; ?>" required>	
                                </div>

                                <!-- usernamw input -->
                                <div class="input-group mb-4">
                                    <span class="input-group-text fw-bol1d text-center">
                                        Username
                                    </span>
                                    <input id="username" name="username" class="form-control text-dark" value="<?php echo $username; ?>" required>	
                                </div>
                                
                                <!-- Email input -->
                                <div class="input-group mb-4">
                                    <span class="input-group-text fw-bol1d text-center">
                                        Email
                                    </span>
                                    <input id="email" name="email" class="form-control text-dark" value="<?php echo $email; ?>" required>	
                                </div>

                                <!-- Number input -->
                                <div class="input-group">
                                    <span class="input-group-text fw-bol1d text-center">
                                        Mobile
                                    </span>
                                    <input type="tel" pattern="[0-9]{10}" title="must be 10 digits in the foramt: e.g 0713334444" id="mobile" name="mobile" class="form-control text-dark" value="<?php echo $mobile; ?>" required>	
                                </div>

                                <!--
                                <div class="input-group mb-4">
                                    <span class="input-group-text fw-bol1d text-center">
                                        Password
                                    </span>
                                    <input id="psw" name="psw" class="form-control text-dark" value="" required>	
                                </div>

                                <div class="input-group mb-4">
                                    <span class="input-group-text fw-bol1d text-center">
                                       Repeat Password
                                    </span>
                                    <input id="psw2" name="psw2" class="form-control text-dark" value="" required>	
                                </div>
                                -->

                                <?php

                                if (isset($_POST['submit'])) {

                                    $canUpdate = true;

                                    $fnameUpdate = $util->strip($_POST['fname']);
                                    $lnameUpdate = $util->strip($_POST['lname']);

                                    $mobileUpdate = $util->strip($_POST['mobile']);
                                    $mobileUpdate = str_replace(' ', '', $mobileUpdate);

                                    $emailUpdate = mysqli_real_escape_string($conn, $_POST['email']);
                                    $emailUpdate = $util->strip_email($emailUpdate);

                                    $usernameUpdate = mysqli_real_escape_string($conn, $_POST['username']);
                                    $usernameUpdate = $util->strip_email($usernameUpdate);

                                    // check if username exists
                                    $query = "SELECT * FROM users
                                            WHERE username = '{$usernameUpdate}'";
                                    $result = $conn->query($query);

                                    // if the $result is not False,
                                    // and contains at least one row
                                    if ($result !== false) {
                                        // username exists if more than 1 row is found
                                        // 1st row is the current username
                                        if ($result->num_rows > 0) {
                                            $curr_username = "";
                                            while ($row = mysqli_fetch_array($result)) {
                                                $curr_username = $row['username'];
                                            }  

                                            // if username already exists but for current user allow update
                                            // else don't update
                                            if ($username != $curr_username) {
                                                echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                                                    username: <strong>$curr_username</strong> has been taken, please try a different one.
                                                </div>";  
                                                $canUpdate = false;
                                            }    
                                        }
                                    }

                                    if ($canUpdate) {
                                        $query = "UPDATE users
                                                    SET firstname='$fnameUpdate', lastname='$lnameUpdate', username='$usernameUpdate', 
                                                        email='$emailUpdate', mobile='$mobileUpdate'
                                                    WHERE id='$userID'";

                                        $result = mysqli_query($conn, $query);

                                        if ($result == false) {
                                            // operation failed
                                            echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                                                unable to update details, please make sure all fields are valid
                                            </div>";
                                        } else {
                                            // operation successful
                                            // redirect to status.php
                                            $error_code = 0;
                                            $message = "Details updated successfully!";
                                            
                                            echo "<script>location.replace('status.php?error_code=$error_code&message=$message'); </script>";
                                        }
                                    }        
                                }
                                ?>
                                

                                <!-- Submit button -->
                                <div class="text-center mt-4">
                                    <button class="btn btn-success btn-lg btn-rounded btn-block" name='submit' type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
            </section>

            <?php include("portal_components/footer.inc.php"); ?>
            <?php include("portal_components/logout.modal.inc.php"); ?>
            <?php include("portal_components/scripts.inc.php"); ?>

        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

</body>

</html>