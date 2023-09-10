<?php 
include("portal_components/head.inc.php");
include("server/secure.php");

if ($_SESSION['allow_staff_update'] == "true") 
    // do nothing, page will proceed operation
    ;
else header("Location: index.php");
?>

    <title>Portal - Delete</title>

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

                <?php
                $jobID = $_REQUEST['jobID'];

                require('../server/util.php');
                // utility functions
                $util = new Util();
                $conn = $util->conn;

                $query = "SELECT * FROM technicianList WHERE jobID = $jobID";
                $result = $conn->query($query);

                while ($row = mysqli_fetch_array($result)) {
                    $query = "DELETE FROM technicianList WHERE jobID = $jobID";
                    $result = $conn->query($query);
                }

                $jobID = $row['customerID'];

                $query = "DELETE FROM repairjobs WHERE jobID = $jobID";
                $result = $conn->query($query);

                if ($result !== false) {
                    // operation successful
                    // success Text
                    echo"
                    <div class='text-center'>
                        <div class='mx-auto display-2 fw-bold text-success' >Success!</div>
                        <p class='lead text-gray-800 mb-5'>The record was deleted successfully!</p>
                        <p class='text-gray-500 mb-0'>this operation can not be undone...</p>
                        <a href='index.php'>&larr; Back to Dashboard</a>
                    </div>";

                }
                else {
                    // operation failed
                    // Error Text
                    echo "
                    <div class='text-center'>
                        <div class='error mx-auto' data-text='Error'>Error</div>
                        <p class='lead text-gray-800 mb-5'>Unable to delete, please contact system administrator</p>
                        <p class='text-gray-500 mb-0'>the operation was unsuccessful...</p>
                        <a href='index.php'>&larr; Back to Dashboard</a>
                    </div>".$conn->error;
                }
            ?>

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