<!doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
    require_once("RepairJobs.php");

    $jobNum= $_REQUEST['jobID'];

    $servername = "is3-dev.ict.ru.ac.za";
    $username = "G20M4174";
    $password = "G20M4174";
    $database = "galacticsystemenforcers";

    $conn = mysqli_connect($servername, $username, $password, $database)
        or die("Could not connect to database!");

    $query = "SELECT * FROM repairjobs WHERE jobID = $jobNum";

    $result = mysqli_query($conn, $query)
        or die("Could not display repair job details");


    while ($row = mysqli_fetch_array($result)) {

        $repairType = $row['type'];
        $repairDetails = $row['description'];
        $dateRecieved = $row['DateRecieved'];
        $dateEnded = $row['DateEnded'];
        $cost = $row['cost'];
        $repairStatus = $row['status'];
        $customerID = $row['customerID'];
        $computerID = $row['computerID'];
        $technicianID = $row['staffID'];

    }

    mysqli_close($conn);

    ?>

    <form action="updateRepairJob.php" method="POST">
        <br>
        <br>
        <label for="type">Repair Type: </label><br>
        <input type="text" name="type" value="<?php echo $repairType ?>">
        <br>
        <label for="description">Repair Details: </label><br>
        <input type="text" name="description" value="<?php echo $repairDetails ?>">
        <br>
        <label for="DateRecieved">Date Recieved: </label><br>
        <input type="date" name="DateRecieved" value="<?php echo $dateRecieved ?>">
        <br>
        <label for="DateEnded">Date Ended: </label><br>
        <input type="date" name="DateEnded" value="<?php echo $dateEnded ?>">
        <br>
        <label for="cost">Cost: </label><br>
        <input type="number" name="cost" value="<?php echo $cost ?>">
        <br>
        <label for="status">Repair Status: </label><br>
        <input type="text" name="status" value="<?php echo $repairStatus ?>">
        <br>
        <label for="customerID">CustomerID: </label><br>
        <input type="number" name="customerID" value="<?php echo $customerID ?>">
        <br>
        <label for="computerID">ComputerID: </label><br>
        <input type="number" name="computerID" value="<?php echo $computerID ?>">
        <br>
        <label for="staffID">TechnicianID: </label><br>
        <input type="number" name="staffID" value="<?php echo $technicianID ?>">
        <br>
        <input type="hidden" name="jobID" id="jobID" value="<?php echo $jobNum ?>">
        <br>
        <input type="submit" value="Update Repair job">

    </form>
</body>

</html>