<!DOCTYPE html>
<a href="RepairJobs.php">Return</a>


<?php
$jobID = $_REQUEST['jobID'];

$servername = "is3-dev.ict.ru.ac.za";
$username = "G20M4174";
$password = "G20M4174";
$database = "galacticsystemenforcers";

$conn = mysqli_connect($servername, $username, $password, $database)
    or die("Could not connect to database!");


$query = "INSERT INTO repairjobs (type, description, DateRecieved, DateEnded, cost, status, asignedItemsID, customerID, computerID, staffID) 
          SELECT type, description, DateRecieved, DateEnded, cost, asignedItemsID, customerID, computerID, staffID
          FROM repairjobs WHERE jobID = $jobID";


$result = mysqli_query($conn, $query)
    or die("Could not duplicate Repair Job");


mysqli_close($conn);

echo "<strong>Job Duplicated!</strong>";

header("Location: RepairJobs.php");
?>
<br>
<br>

</html>