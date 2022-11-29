<?php

require_once("RepairJobs.php");

$ID = $_REQUEST['jobID'];
$dateEnded = date("Y-m-d");


$servername = "is3-dev.ict.ru.ac.za";
$username = "G20M4174";
$password = "G20M4174";
$database = "galacticsystemenforcers";

$conn = mysqli_connect($servername, $username, $password, $database)
    or die("Could not connect to database!");

$query = "UPDATE repairjobs
          SET DateEnded = '$dateEnded', status = 'complete'
          WHERE jobID = $ID";

$result = mysqli_query($conn, $query)
    or die("Could not update repair status!");

mysqli_close($conn);

echo "<p style=\"color: green;\"> The record was successfully updated!</p>";


?>
