<?php
require_once("RepairJobs.php");

$ID = $_REQUEST['jobID'];

$servername = "is3-dev.ict.ru.ac.za";
$username = "G20M4174";
$password = "G20M4174";
$database = "galacticsystemenforcers";

$conn = mysqli_connect($servername, $username, $password, $database)
    or die("Could not connect to database!");

$query = "DELETE FROM repairjobs WHERE jobID = $ID";

$result = mysqli_query($conn, $query)
    or die("Could not delete record!");

mysqli_close($conn);
    
echo "<script>location.replace('RepairJobs.php');</script>";
?>
