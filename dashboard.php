<?php 
include("portal_components/head.inc.php");
include("server/secure.php");
?>

    <title>Portal - Dashboard</title>

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
            <li class="nav-item active">
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
            <li class="nav-item">
                <a class="nav-link" href="profile.php">
                    <i class="fas fa-user fa-sm fa-fw"></i>
                    Profile
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="container-fluid">

            <!-- Main Content -->
            <div id="content">
                <?php include("portal_components/navbar.content.inc.php"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class=" bg-gradient-warning d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fa-regular fa-eye me-1"></i>
                                Look up Job
                        </a>
                    </div>

                    <!-- Progress Variable -->
                    <?php 
                    require('server/util.php');
                    // utility functions
                    $util = new Util();
                    $conn = $util->conn;

                    $query = "SELECT * FROM repairjobs";
                    $result = $util->getTableData($query);

                    $pendingJobs = $assignedJobs = $completeJobs = 0;

                    while ($row = mysqli_fetch_array($result)) {

                        $status = $row['status'];
                        if ($status == "complete") $completeJobs++;
                        elseif ($status == "in-progress") $assignedJobs++;
                        elseif ($status == "pending") $pendingJobs++;
                    }    
                    ?>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Pending Requests Card-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Job Bookings</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $pendingJobs; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-dark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                currently Assigned</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $assignedJobs; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-solid fa-file-signature fa-2x text-dark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Completed</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $completeJobs; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-solid fa-circle-check fa-2x text-dark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Content Row -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

              <!-- Begin Page Content -->
              <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mt-5 mb-2 text-gray-800">View All Jobs</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">All Jobs</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Customer ID</th>
                                        <th>Job ID</th>
                                        <th>Type</th>
                                        <td>description</td>
                                        <th>Date Received</th>
                                        <th>Date Ended</th>
                                        <th>Cost</th>
                                        <th>Status</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                $query = "SELECT * FROM repairjobs";
                                $result = $util->getTableData($query);

                                if ($result != null) {
                                    // SESSION variable to allow...
                                    // access to delete page
                                    $_SESSION['allow_staff_update'] = "true";

                                    while ($row = mysqli_fetch_array($result)) {

                                        $status = $row['status'];

                                        $customerID = $row['customerID'];
                                        if ($customerID == null) $customerID = "none";

                                        $jobID = $row['jobID'];

                                        $description = $row['description'];

                                        $type = $row['type'];
                                        $dateRecieved = $row['DateRecieved'];

                                        $dateEnded = $row['DateEnded'];
                                        if ($dateEnded == null) $dateEnded = "incomplete";

                                        $cost = $row['cost'];
                                        if ($cost == null) $cost = "0.00";

                                        echo "<tr>";

                                        // set id for update page
                                        $_SESSION['id'] = $jobID;

                                        echo"<td>$customerID</td>
                                            <td>$jobID</td>
                                            <td>$type</td>
                                            <td class='w-10'>$description</td>
                                            <td>$dateRecieved</td>
                                            <td>$dateEnded</td>
                                            <td>$cost</td>
                                            <td>$status</td>
                                            <td>
                                                <a href=\"update_staff.php?id={$jobID}\" class='btn btn-sm btn-success'>Assign</a>

                                                <button type='button' class='btn btn-outline-danger btn-sm waves-effect waves-light' data-toggle='modal'
                                                data-target='#centralModalLg'>
                                                    Delete
                                                </button>
                                            </td>";    
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<div class='alert alert-warning my-2 p-2 text-center' role='alert'>
                                        no table data found".$this->conn->error."
                                    </div>";
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

            <?php include("portal_components/footer.inc.php"); ?>
            <?php include("portal_components/logout.modal.inc.php"); ?>
            <?php include("portal_components/scripts.inc.php"); ?>

                <!-- Central Modal Large -->
                <div class="modal fade" id="centralModalLg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header">
                        <h4 class="modal-title w-100" id="myModalLabel">Delete Job</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <!--Body-->
                        <div class="modal-body">
                                Are you sure you want to delete this record?
                                The operation can not be undone
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>

                        <?php
                            echo "<a href=\"delete.php?jobID={$jobID}\" class='btn btn-outline-danger'>Delete</a>";
                        ?>
                        </div>
                    </div>
                    <!--/.Content-->
                    </div>
                </div>
                <!-- Central Modal Large -->

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