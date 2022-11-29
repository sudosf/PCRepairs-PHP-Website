<!DOCTYPE html>
<a href="Computers.php">Return</a>


<form action="addComputer.php" method="POST">
    <br>
    <br>
    <label for="serialNumber">Serial Number: </label><br>
    <input type="number" name="serialNumber">
    <br>
    <br>
    <label for="make">make: </label><br>
    <input type="text" name="make">
    <br>
    <br>
    <label for="customerID">customerID: </label><br>
    <input type="number" name="customerID">
    <br>
    <br>
    <input type="submit" name="add" value="Add new Computer">

</form>

<?php
if (isset($_REQUEST['add'])) {

    //$ID = $_REQUEST['ComputerID'];
    $serialNumber = $_REQUEST['serialNumber'];
    $make = $_REQUEST['make'];
    $customerID = $_REQUEST['customerID'];


    $servername = "is3-dev.ict.ru.ac.za";
    $username = "G20M4174";
    $password = "G20M4174";
    $database = "galacticsystemenforcers";

    $conn = mysqli_connect($servername, $username, $password, $database)
        or die("Could not connect to database!");


    $query = "INSERT INTO computers (serialNumber, make, customerID)
    VALUES ('$serialNumber', '$make', '$customerID')";


    $result = mysqli_query($conn, $query)
        or die("Could not add new computer");


    mysqli_close($conn);

    echo "<strong>New computer was added</strong>";

    
}

?>
<br>
<br>

</html>