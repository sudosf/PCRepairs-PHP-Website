<?php

require_once("RepairJobs.php");

$jobNum= $_REQUEST['jobID'];
$repairType = $_REQUEST['type'];
$repairDetails = $_REQUEST['description'];
$dateRecieved = $_REQUEST['DateRecieved'];
$dateEnded = $_REQUEST['DateEnded'];
$cost = $_REQUEST['cost'];
$repairStatus = $_REQUEST['status'];
$customerID = $_REQUEST['customerID'];
$computerID = $_REQUEST['computerID'];
$technicianID = $_REQUEST['staffID'];

$servername = "is3-dev.ict.ru.ac.za";
$username = "G20M4174";
$password = "G20M4174";
$database = "galacticsystemenforcers";

$conn = mysqli_connect($servername, $username, $password, $database)
    or die("Could not connect to database!");

$query = "UPDATE repairjobs
          SET type = '$repairType', description = '$repairDetails', DateRecieved = '$dateRecieved', DateEnded = '$dateEnded', cost = '$cost', status = '$repairStatus', customerID = '$customerID',
          computerID = '$computerID', staffID = '$technicianID'
          WHERE jobID = $jobNum";

$result = mysqli_query($conn, $query)
    or die("Could not update repair job details!");

mysqli_close($conn);

echo "<p style=\"color: green;\"> The record was successfully updated!</p>";

?>