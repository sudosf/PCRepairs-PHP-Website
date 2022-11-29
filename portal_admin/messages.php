<?php include("portal_components/head.inc.php") ?>

    <title>Portal - Messages</title>

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

            <!-- Nav Item - Tables(Previous) -->
            <li class="nav-item">
                <a class="nav-link" href="report.php">
                    <i class="fa fa-solid fa-chart-line"></i>
                    Reporting
                </a>
            </li>

            <!-- Nav Item - Tables(Previous) -->
            <li class="nav-item active">
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

                <div class="row d-flex flex-row justify-content-center">
                    <div class="col-lg-6">
                    <h5 class="card-title text-dark text-center h3 fw-light">new messages</h5>
                        <!-- Basic Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Elie Sudo</h6>
                            </div>
                            <div class="card-body">
                                Will my laptop be ready by Friday?
                            </div>
                        </div>

                        <h5 class="card-title text-dark text-center h3 fw-light">previous messages</h5>
                        <!-- Collapsable Card Example -->
                        <div class="card shadow mb-4">
                            <!-- Card Header - Accordion -->
                            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-primary">Dave's Screens</h6>
                            </a>
                            <!-- Card Content - Collapse -->
                            <div class="collapse" id="collapseCardExample">
                                <div class="card-body">
                                    Your last order of hp laptop screens has been sent for delivery. They should arrive by you in the next 3-5 working days.
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            <form class="container mt-5">
    		<h5 class="card-title text-dark text-center display-6 fw-light">Send a New Message</h5>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form6Example5" class="form-control text-dark border" placeholder="Recipient Email"/>
                <label class="form-label text-dark " for="form6Example5">To:</label>
              </div>

              <p class="m-0 p-1 h6 fw-semibold">User Type?</p>
              <select class="form-select" aria-label="Default select example">
                  <option value="1" selected>Customer</option>
                  <option value="2">Technicain</option>
              </select>

              <!-- Message input -->
              <p class="m-0 p-1 mt-4 h6 fw-semibold">Message Body</p>
              <div class="form-outline my-2">
                  <textarea class="form-control text-dark border" id="form6Example7" rows="4"></textarea>
                  <label class="form-label text-dark" for="form6Example7">Description</label>
              </div>

              <!-- Submit button -->
              <div class="text-center mt-4">
                  <button class="btn btn-success btn-lg btn-rounded btn-block" name="submit" type="submit">Send Message</button>
              </div>
            </form>
                
            <?php include("portal_components/footer.inc.php"); ?>
            <?php include("portal_components/logout.modal.inc.php"); ?>
            <?php include("portal_components/scripts.inc.php"); ?>

            </div>
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