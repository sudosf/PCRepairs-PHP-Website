<section class="container-fluid my-5">

<div class="container-fluid my-5">
    <div class="row justify-content-center">
    <div class="col-12 col-lg-6">
        <div class="card " style="border-radius: 1rem;">
        <div class="card-body text-dark p-5">
            <div class="text-center pt-1">
                <i class="fa-solid fa-basket-shopping fa-4x text-success"></i>
                <h1 class="fw-bold my-4 text-uppercase">Book A Service</h1>
            </div>

            <?php
            $row = $_SESSION['userData'];

            $fname = $row['firstname'];
            $lname = $row['lastname'];
            $email = $row['email'];
            $mobile = $row['mobile'];

            $jobID = ""; // set job ID for computers table

            ?>

            <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            
            <h5 class="m-2 p-2 fw-semibold text-center">Booking Details</h5>
            <section class="rounded mb-4">
                <div class="border d-flex justify-content-around">
                    <h6>Name</h6>
                    <h6>Email</h6>
                    <h6>Mobile</h6>
                </div>

                <div class="mt-2 mb-0 d-flex justify-content-around fw-semibold border border-top-0">
                    <p class="px-1"> <?php echo $fname." ".$lname; ?> </p>
                    <p class="px-1"> <?php echo $email; ?> </p>
                    <p class="px-1"> <?php echo $mobile; ?> </p>
                </div>
            </section>


            <div class="input-group mb-4">
                <span class="input-group-text fw-bol1d text-center">
                    Device Name
                    <i class="fa-solid fa-asterisk text-danger ms-2"></i>
                </span>
                <input id="pc_name" name="pc_name" class="form-control text-dark" value="" required>	
            </div>

            <div class="input-group mb-4">
                <span class="input-group-text fw-bold">Device Type</span>
                <select id="pc_type" name="pc_type" class="form-select form-control text-dark" aria-label="Default select example">
                    
                    <option value="laptop" selected>Laptop</option>
                    <option value="desktop">Desktop</option>
                </select>
            </div>


            <div class="input-group">
                <span class="input-group-text fw-bold">Type of Service</span>

                <select id="repair_type" name="repair_type" class="form-select form-control text-dark" aria-label="Default select example">
                    
                    <option value="Computer Repair" selected>Computer Repair</option>
                    <option value="Data Recovery">Data Recovery</option>
                    <option value="Parts and Accessories">Parts &amp; Accessories</option>
                    <option value="System Install and Upgrades">System Install &amp; Upgrades</option>
                    <option value="Virus Removal Services">Virus Removal Services</option>
                    <option value="Internet and WiFi">Internet &amp; WiFi</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <!-- Message input -->
            <p class="m-0 p-1 mt-4 fw-bold">
                Please provide further details of your computer issue
                <i class="fa-solid fa-asterisk text-danger"></i>
            </p>
            <div class="form-outline my-2">
                <textarea class="form-control text-dark border border-light" id="form6Example7" rows="4" name="description" value="" required></textarea>
            </div>

            <?php 
            if (isset($_POST['submit'])) {
                require('server/util.php');
                // utility functions
                $util = new Util();
                $conn = $util->conn;

                $userID = $row['id'];
                $status = "pending"; //"pending, started, finished

                $type = $util->strip($_POST['repair_type']);
                $description = $util->strip($_POST['description']);

                /* add to repair jobs table */
                $query = "INSERT INTO repair_jobs (type, description, status, userID)
                            VALUES ('$type', '$description', '$status', '$userID')";

                $result = mysqli_query($conn, $query);
                
                $jobID = (int) mysqli_insert_id($conn); // set job ID for computers table

                $error_code_job = $message_job = "";
                $error_code_pc = $message_pc = "";

                if ($result == false) {

                    // operation failed
                    $error_code_job = 1;
                    $message_job = "unable to book service, please try again later".$conn->error;

                    // echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                    // 	unable to book service, please try again later
                    // ".$conn->error."</div>";
                } else {

                    // operation successful
                    $error_code_job = 0;
                    $message_job = "Repair Job booked successfuly";

                    // echo "<div class='alert alert-success my-2 p-2 text-center' role='alert'>
                    // 	Repair Job booked successfuly, go to your portal to manage all your jobs:
                    // 	<div class='text-center'>
                    // 		<a href='dashboard.php' class='btn btn-primary px-4 py-2 text-light fw-bold'>GO to Portal</a>
                    // 	</div>
                    // </div>";
                    // // $util->sendEmail("nkunaf.sf@gmail.com", "test Email", "many Thanks");
                }

                /* add to computers table */

                $pc_name =  $util->strip($_POST['pc_name']);
                $pc_type = $util->strip($_POST['pc_type']);

                $query = "INSERT INTO computers (name, type, repair_jobID)
                            VALUES ('$pc_name', '$pc_type', '$jobID')";
                
                $result = mysqli_query($conn, $query);

                if ($result == false) {

                    // operation failed
                    $error_code_pc = 1;
                    $message_pc = "	unable to add <strong>device information</strong>, please try again later on your dashboard";

                    // echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                    // 	unable to add <strong>device information</strong>, please try again later on dashboard
                    // ".$conn->error."</div>";
                } else {

                    // operation successful
                    $error_code_pc = 0;
                    $message_pc = "device information added.";

                    // echo "<div class='alert alert-success my-2 p-2 text-center' role='alert'>
                    // 	device information added successfuly.
                    // </div>";
                    // // $util->sendEmail("nkunaf.sf@gmail.com", "test Email", "many Thanks");
                }

                // redirect to status.php
                echo "<script>location.replace('status.php?error_code_job=$error_code_job&message_job=$message_job&error_code_pc=$error_code_pc&message_pc=$message_pc'); </script>"; 
            }

            ?>

            <!-- Submit button -->
            <div class="text-center mt-4">
                <button class="btn btn-success btn-lg btn-rounded btn-block" name="submit" type="submit">Place Booking</button>
            </div>
            </form>

            <div class="text-center mt-4">
            <p class="mb-0">We offer a wide range of services: <a href="services.php" class="text-success fw-bold">VIEW LIST</a></p>
        </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section>