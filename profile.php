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
                <a class="nav-link" href="index.php">
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
                <a class="nav-link" href="book.php">
                    <i class="fa fa-solid fa-book"></i>
                    <span>Book New Job</span></a>
            </li>

            <?php include("portal_components/report.show.inc.php"); ?>

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
               

            <!-- Begin Page Content -->
            <div class="container-fluid">

            <section class="container" style="background-color: #eee;">
                <div class="container py-5">
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <i class='fa fa-solid fa-user-astronaut fa-5x text-dark'></i>

                                <h5 class="my-3">John Smith</h5>
                                <p class="text-muted mb-1">Full Stack Developer</p>
                                <p class="text-muted mb-4">Grahamstown, SA</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

    		<h5 class="card-title text-dark text-center display-6 fw-light">Update Details</h5>
                <div class=" container-fluid">
                        <div class="card mb-4">
                        <div class="card-body">
                            <form class="">
                                <div class="form-outline mb-4">
                                    <input type="text" id="form6Example1" class="form-control text-dark border"/>
                                    <label class="form-label text-dark" for="form6Example1">First name</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form6Example2" class="form-control text-dark border"/>
                                    <label class="form-label text-dark " for="form6Example2">Last name</label>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="form6Example5" class="form-control text-dark border"/>
                                    <label class="form-label text-dark " for="form6Example5">Email</label>
                                </div>

                                <!-- Number input -->
                                <div class="form-outline mb-4">
                                    <input type="tel" id="form6Example6" class="form-control text-dark border"/>
                                    <label class="form-label text-dark" for="form6Example6">Phone</label>
                                </div>

                                <div class="form-outline mb-4">
								<input type="password" id="psw" class="form-control text-dark border" name="psw" required/>
								<label class="form-label" for="typePassword">Password</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" id="psw_repeat" class="form-control text-dark border" name="psw2" required/>
                                    <label class="form-label" for="typePassword">Repeat Password</label>
                                </div>


                                <!-- Submit button -->
                                <div class="text-center mt-4">
                                    <button class="btn btn-success btn-lg btn-rounded btn-block" type="submit">Update</button>
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