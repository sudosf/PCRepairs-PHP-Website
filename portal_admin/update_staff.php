<?php 
include("portal_components/head.inc.php");
include("server/secure.php");

if ($_SESSION['allow_staff_update'] == "true") 
    // do nothing, page will proceed operation
    ;
else header("Location: index.php");
?>

    <title>Portal - Details</title>

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
                              <h1 class="fw-bold my-4 text-uppercase">Assign Job</h1>
                          </div>

                        <!-- default Values -->
                        <?php 
                        $jobID = $_SESSION['id'] ;

                        require('../server/util.php');
                        // utility functions
                        $util = new Util();
                        $conn = $util->conn;

                        $msgError = $msgSuccess = "";
                        $isComplete = false;

                        $query = "SELECT * FROM repairjobs WHERE jobID = $jobID;";
                        $result = $conn->query($query);

                        $customerID; $type; $description; $status;
                        if ($result !== false) {
                            $row = mysqli_fetch_array($result);

                            $customerID = $row['customerID'];
                            $type = $row['type'];
                            $description = $row['description'];
                            $status = $row['status'];

                            $query = "SELECT * FROM customers WHERE customerID = $customerID;";
                            $customerData = $conn->query($query);
                            
                            $customerEmail;
                            if ($customerData !== false) {                           
                                $customerDataRow = mysqli_fetch_array($customerData);
                                $customerEmail = $customerDataRow['email'];
                                $isComplete = true;
                            }
                            else {
                                $isComplete = false;
                                $msgError .= "cannot get customer infomation<br>";
                            } 
                        }
                        else {
                            // operation failed
                            // Error Text
                            echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                                unable to get data
                            </div>".$conn->error;
                        } 
                        ?>

                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

                            <input type="hidden" name="id" id="id" value="<?php $_REQUEST['id']; ?>">

                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example1" class="form-control text-dark border" value="<?php echo $customerID; ?>" disabled/>
                                <label class="form-label text-dark" for="form6Example1">CustomerID</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form6Example5" class="form-control text-dark border" value="<?php echo $customerEmail; ?>" disabled/>
                                <label class="form-label text-dark " for="form6Example5">Email</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example5" class="form-control text-dark border" value="<?php echo $type; ?>" disabled/>
                                <label class="form-label text-dark " for="form6Example5">Job Type</label>
                            </div>

                            <!-- Message input -->
                            <p class="m-0 p-1 mt-4 h6 fw-semibold">Job Description:</p>
                            <div class="form-outline my-2">
                                <textarea class="form-control text-dark border" id="form6Example7" rows="4" disabled><?php echo $description; ?></textarea>
                                <label class="form-label text-dark" for="form6Example7">Description</label>
                            </div>

                            <?php

                            if ($status == "in-progress") {
                            echo 
                                "<p  class='m-0 p-1 h6 fw-semibold'>Job Status</p>
                                <select name='jobStatus' class='form-select mb-4' aria-label='Default select example'>
                                    <option value='in-progress' selected>in-progress</option>
                                    <option value='pending'>pending</option>
                                    <option value='complete'>complete</option>
                                </select>";
                            }
                            elseif ($status == "pending") {
                                echo 
                                "<p  class='m-0 p-1 h6 fw-semibold'>Job Status</p>
                                <select name='jobStatus' class='form-select mb-4' aria-label='Default select example'>
                                    <option value='in-progress' >in-progress</option>
                                    <option value='pending' selected>pending</option>
                                    <option value='complete'>complete</option>
                                </select>";
                            }
                            else {
                                echo 
                                "<p  class='m-0 p-1 h6 fw-semibold'>Job Status</p>
                                <select name='jobStatus' class='form-select mb-4' aria-label='Default select example'>
                                    <option value='in-progress'>in-progress</option>
                                    <option value='pending'>pending</option>
                                    <option value='complete' selected>complete</option>
                                </select>";
                            }
                            ?>

                            
                            <p class="m-0 p-1 h6 fw-semibold">Asign to Technician:</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="siya" type="checkbox" id="inlineCheckbox1" checked>
                                <label class="form-check-label" for="inlineCheckbox1">Siya Fortune</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="tester" type="checkbox" id="inlineCheckbox2">
                                <label class="form-check-label" for="inlineCheckbox2">Tester</label>
                            </div>
                            
                            <!-- Message input -->
                            <p class="m-0 p-1 mt-4 h6 fw-semibold">Message to Technician(s):</p>
                            <div class="form-outline my-2">
                                <textarea class="form-control text-dark border" name="techMSG" id="form6Example7" rows="4"></textarea>
                                <label class="form-label text-dark" for="form6Example7">Description</label>
                            </div>

                            <!-- Message input -->
                            <p class="m-0 p-1 mt-4 h6 fw-semibold">Message to Customer:</p>
                            <div class="form-outline my-2">
                                <textarea class="form-control text-dark border" name='customerMSG' id="form6Example7" rows="4"></textarea>
                                <label class="form-label text-dark" for="form6Example7">Description</label>
                            </div>

                            <?php 
                            if (isset($_POST['submit'])) {
                                $status_update = $_POST['jobStatus'];

                                $tech1 = $tech2 = "";
                                if (isset($_POST['siya'])) $tech1 = "techSF@pcrepairs.com";
                                if (isset($_POST['tester'])) $tech2 = "tester@pcrepairs.com";


                                if ($tech1 != "") {
                                    $query = "SELECT * FROM technicians WHERE email = '$tech1'";
                                    $tech1Result = $conn->query($query);
                                    if ($tech1Result !== false) {
                                        $row = mysqli_fetch_array($tech1Result);
                                        $tech1ID = $row['technicianID'];
                                        $isComplete = true;
                                    }
                                    else {
                                        $isComplete = false;
                                        $msgError .= "cannot assign job to technician: Siya<br>";
                                    } 
                                }

                                if ($tech2 != "") {
                                    $query = "SELECT * FROM technicians WHERE email = '$tech2'";
                                    $tech2Result = $conn->query($query);
                                    if ($tech2Result !== false) {
                                        $row = mysqli_fetch_array($tech2Result);
                                        $tech2ID = $row['technicianID'];
                                        $isComplete = true;
                                    }
                                    else {
                                        $isComplete = false;
                                        $msgError .= "cannot assign job to technician: Tester<br>";
                                    } 
                                }

                                // add data to database
                                if ($isComplete) {
                                    $canAssignTech;
                                    // assign technicians
                                    if ($tech1 != "") {
                                        $query = "SELECT * FROM technicianlist WHERE jobID='$jobID'";
                                        $result = $conn->query($query);
                                        if ($result !== false) {
                                            while($row = mysqli_fetch_array($result)){
                                                if ($row['technicianID'] == $tech1ID && $row['jobID'] == $jobID) {
                                                    $msgError .= "technician(Siya) already assigned<br>";
                                                    $canAssignTech = false;
                                                    break;
                                                } else {
                                                    $canAssignTech = true;
                                                }
                                            }   
                                        } else $canAssignTech = true; 
                                        
                                        if ($canAssignTech) {
                                            $query = "INSERT INTO technicianlist (technicianID, jobID)
                                                        VALUES ('$tech1ID', '$jobID');";
                                            $result = $conn->query($query);
                                            if ($result !== false) {
                                                $msgSuccess .= "assigned job to technician: Siya<br>";

                                                $msg = $_REQUEST['techMSG'];
                                                // send message
                                                $query = "INSERT INTO messages (details, technicianID)
                                                    VALUES ('$msg', '$tech1ID');";
                                                $result = $conn->query($query);
                                                if ($result !== false) {
                                                    $msgSuccess .= "message sent to technician: Siya<br>";
                                                }
                                                else {
                                                    $msgError .= "could not send message to technician: Siya<br>";
                                                } 

                                            }
                                            else {
                                                $isComplete = false;
                                                $msgError .= "cannot assign job to technician: Siya<br>";
                                            } 
                                        }
                                    }
                                        // assign technicians
                                        if ($tech2 != "") {
                                            $query = "SELECT * FROM technicianlist WHERE jobID='$jobID'";
                                            $result = $conn->query($query);
                                            if ($result !== false) {
                                                while($row = mysqli_fetch_array($result)){
                                                    if ($row['technicianID'] == $tech2ID && $row['jobID'] == $jobID) {
                                                        $msgError .= "technician(tester) already assigned<br>";
                                                        $canAssignTech = false;
                                                        break;
                                                    } else {
                                                        $canAssignTech = true;
                                                    }
                                                }   
                                            } else $canAssignTech = true; 
                                            
                                        if ($canAssignTech) {
                                            $query = "INSERT INTO technicianlist (technicianID, jobID)
                                                        VALUES ('$tech2ID', '$jobID');";
                                            $result = $conn->query($query);
                                            if ($result !== false) {
                                                $msgSuccess .= "assigned job to technician: Tester<br>";
                                                
                                                $msg = $_REQUEST['techMSG'];
                                                // send message
                                                $query = "INSERT INTO messages (details, technicianID)
                                                    VALUES ('$msg', '$tech2ID');";
                                                $result = $conn->query($query);
                                                if ($result !== false) {
                                                    $msgSuccess .= "message sent to technician: Tester<br>";
                                                }
                                                else {
                                                    $msgError .= "could not send message to technician: Tester<br>";
                                                } 

                                            }
                                            else {
                                                $isComplete = false;
                                                $msgError .= "cannot assign job to technician: Tester<br>";
                                            } 
                                        }
                                    }

                                    // update status
                                    $query = "UPDATE repairjobs SET status='$status_update' WHERE jobID='$jobID';";
                                    $result = $conn->query($query);
                                    if ($result !== false) {
                                        $msgSuccess .= "status updated successfuly!<br>";

                                        $msg = $_REQUEST['customerMSG'];
                                        // send message
                                        $query = "INSERT INTO messages (details, customerID)
                                            VALUES ('$msg', '$customerID');";
                                        $result = $conn->query($query);
                                        if ($result !== false) {
                                            $msgSuccess .= "message sent to customer<br>";
                                        }
                                        else {
                                            $msgError .= "could not send message customer<br>";
                                        } 
                                    }
                                    else {
                                        $isComplete = false;
                                        $msgError .= "cannot update status<br>";
                                    }

                                    if ($isComplete) {
                                        echo 
                                        "<div class='alert alert-success my-2 p-2 text-center' role='alert'>
                                        Job Update Success:<br>
                                        $msgSuccess
                                        </div>";
                                        if ($msgError != "") {
                                            echo 
                                            "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                                            $msgError
                                            </div>";
                                        }
                                    } else {
                                        echo 
                                        "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                                           Unable to update Job(1):<br>
                                           $msgError
                                        </div>";
                                    }

                                    // send message 


                                } else {
                                    echo 
                                    "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                                       Unable to update Job(2):
                                       $msgError
                                    </div>".$conn->error;
                                }
                            }
                            ?>

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