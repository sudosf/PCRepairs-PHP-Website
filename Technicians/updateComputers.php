<?php

require_once("Computers.php");

$ID = $_REQUEST['computerID'];
$serialNumber = $_REQUEST['serialNumber'];
$make = $_REQUEST['make'];
$customerID = $_REQUEST['customerID'];

$servername = "is3-dev.ict.ru.ac.za";
$username = "G20M4174";
$password = "G20M4174";
$database = "galacticsystemenforcers";

$conn = mysqli_connect($servername, $username, $password, $database)
    or die("Could not connect to database!");

$query = "UPDATE computers
          SET serialNumber = '$serialNumber', make = '$make', customerID = '$customerID'
          WHERE computerID = $ID";

$result = mysqli_query($conn, $query)
    or die("Could not update computer details!");

mysqli_close($conn);

echo "<p style=\"color: green;\"> The record was successfully updated!</p>";


?>
