<!doctype html>
<style>
  strong {
    color: blue;
  }
</style>

<?php

$lastName = $_REQUEST['LastName'];
$firstName = $_REQUEST['FirstName'];
$email = $_REQUEST['Email'];
$phone = $_REQUEST['Phone'];
$Htel = $_REQUEST['HomeTel'];


$servername = "is3-dev.ict.ru.ac.za";
$username = "G20M4174";
$password = "G20M4174";
$database = "galacticsystemenforcers";

$conn = mysqli_connect($servername, $username, $password, $database)
  or die("Could not connect to database!");

$query = "INSERT INTO technicians (LastName, FirstName, Email, Mobile, HTel)
VALUE ('$lastName', '$firstName', '$email', '$phone', '$Htel')";

$result = mysqli_query($conn, $query)
  or die("Could not add new Technician");

mysqli_close($conn);

echo "<strong>New Technician was added</strong>";


?>
<br>
<br>
<a href="Technicianportal.html">Return</a>

</html>