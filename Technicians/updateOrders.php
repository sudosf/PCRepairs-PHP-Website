<?php

require_once("Orders.php");

$ID = $_REQUEST['orderID'];

$servername = "is3-dev.ict.ru.ac.za";
$username = "G20M4174";
$password = "G20M4174";
$database = "galacticsystemenforcers";

$conn = mysqli_connect($servername, $username, $password, $database)
    or die("Could not connect to database!");

$query = "UPDATE orders SET status = 'Released'
WHERE orderID = $ID;";

$result = mysqli_query($conn, $query)
    or die("Could not update order details");

mysqli_close($conn);

echo "<p style=\"color: green;\"> The record was successfully updated!</p>";


?>
