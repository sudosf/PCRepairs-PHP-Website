<?php include("portal_components/head.inc.php") ?>

    <title>Portal - Update</title>

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

            <!-- Divider -->
            <hr class="sidebar-divider">

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
                    <div class="card gradient-custom-booking" style="border-radius: 1rem;">
                      <div class="card-body text-dark p-5">
                          <div class="text-center pt-1">
                              <i class="fa-solid fa-basket-shopping fa-4x text-success"></i>
                              <h1 class="fw-bold my-4 text-uppercase">Update Job</h1>
                          </div>

                        <form class="">
                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example1" class="form-control text-dark border" disabled/>
                                <label class="form-label text-dark" for="form6Example1">CustomerID</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example2" class="form-control text-dark border" disabled/>
                                <label class="form-label text-dark " for="form6Example2">JobID</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form6Example5" class="form-control text-dark border" disabled/>
                                <label class="form-label text-dark " for="form6Example5">Email</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example5" class="form-control text-dark border" value="<?php echo "it works"; ?>" disabled/>
                                <label class="form-label text-dark " for="form6Example5">Job Type</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example1" class="form-control text-dark border"/>
                                <label class="form-label text-dark" for="form6Example1">Computer Make</label>
                            </div>

                            
                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example1" class="form-control text-dark border"/>
                                <label class="form-label text-dark" for="form6Example1">Serial Number</label>
                            </div>

                            <p class="m-0 p-1 h6 fw-semibold">Job Status</p>
                            <select class="form-select mb-4" aria-label="Default select example">
                                <option value="1" selected>in-progress</option>
                                <option value="2">pending</option>
                                <option value="3">complete</option>
                            </select>

                            
                            <p class="m-0 p-1 h6 fw-semibold">Asign Part(s) to Job:</p>
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">GPU-1050ti(5)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">cooling-fan(4)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">laptop-screen(1)</label>
                                </div>

                            <!-- Message input -->
                            <p class="m-0 p-1 mt-4 h6 fw-semibold">Message to Front Desk:</p>
                            <div class="form-outline my-2">
                                <textarea class="form-control text-dark border" id="form6Example7" rows="4" required></textarea>
                                <label class="form-label text-dark" for="form6Example7">Description</label>
                            </div>

                            <!-- Submit button -->
                            <div class="text-center mt-4">
                                <button class="btn btn-success btn-lg btn-rounded btn-block" name="submit" type="submit">Update</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

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