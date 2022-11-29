<?php include("portal_components/head.inc.php") ?>

    <title>Portal - Reporting</title>

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
        <div id="content-wrapper" class="d-flex flex-column container-fluid">

                <!-- Main Content -->
            <div id="content">
                    <?php include("portal_components/navbar.content.inc.php"); ?>


                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                
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