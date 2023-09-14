<?php include("portal_components/head.inc.php") ?>

    <title>Portal - Book</title>

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
            <li class="nav-item active">
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
            <li class="nav-item">
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
                    <div class="container-fluid my-5">
                        <div class="row justify-content-center">
                        <div class="col-12 col-lg-6">
                            <div class="card" style="border-radius: 1rem;">
                            <div class="card-body text-dark p-5">
                                <div class="text-center pt-1">
                                    <i class="fa-solid fa-basket-shopping fa-4x text-success"></i>
                                    <h1 class="fw-bold my-4 text-uppercase">Book A Service</h1>
                                </div>

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

                                <p class="m-0 p-1 h6 fw-semibold">Which of these best describes your problem?</p>
                                <select class="form-select" aria-label="Default select example">
                                <option value="1" selected>Computer Repair</option>
                                    <option value="2">Data Recovery</option>
                                    <option value="3">Parts &amp; Accessories</option>
                                    <option value="4">System Install &amp; Upgrades</option>
                                    <option value="5">Virus Removal Services</option>
                                    <option value="6">Internet &amp; WiFi</option>
                                    <option value="6">Other</option>
                                </select>

                                <!-- Message input -->
                                <p class="m-0 p-1 mt-4 h6 fw-semibold">Please provide further details on your problem if applicable</p>
                                <div class="form-outline my-2">
                                    <textarea class="form-control text-dark border" id="form6Example7" rows="4"></textarea>
                                    <label class="form-label text-dark" for="form6Example7">Description</label>
                                </div>

                                <!-- Submit button -->
                                <div class="text-center mt-4">
                                    <button class="btn btn-success btn-lg btn-rounded btn-block" type="submit">Place Order</button>
                                </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
                <!-- End of Main Content -->

                <?php include("portal_components/footer.inc.php"); ?>
                <?php include("portal_components/logout.modal.inc.php"); ?>
                <?php include("portal_components/scripts.inc.php"); ?>
            </div>          
        </div>
    </div>
    <!-- End of Content Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

</body>

</html>