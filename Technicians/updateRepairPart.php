<?php

require_once("RepairJobs.php");

 $jobID = $_REQUEST['jobID'];

$servername = "is3-dev.ict.ru.ac.za";
$username = "G20M4174";
$password = "G20M4174";
$database = "galacticsystemenforcers";

$conn = mysqli_connect($servername, $username, $password, $database)
    or die("Could not connect to database!");

$query = "UPDATE repairjobs
          SET assignedItemsID = '$itemID'
          WHERE jobID =  $jobID";

$result = mysqli_query($conn, $query)
    or die("Could not update item details!");

mysqli_close($conn);

echo "<p style=\"color: green;\"> The record was successfully updated!</p>";