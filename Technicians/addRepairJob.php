<!DOCTYPE html>
<a href="RepairJobs.php">Return</a>


<form action="addRepairJob.php" method="POST">
    <br><br>
    <label for="type">Repair Type: </label><br>
    <input type="text" name="type">
    <br><br>
    <label for="description">Repair Details: </label><br>
    <input type="text" name="description">
    <br><br>
    <label for="status">Repair Status: </label><br>
    <input type="text" name="status">
    <br><br>
    <label for="cost">Cost: </label><br>
    <input type="number" name="cost">
    <br><br>
    <label for="customerID">CustomerID: </label><br>
    <input type="number" name="customerID">
    <br><br>
    <label for="computerID">ComputerID: </label><br>
    <input type="number" name="computerID">
    <br><br>
    <label for="staffID">TechnicianID: </label><br>
    <input type="number" name="staffID">
    <br><br>
    <input type="hidden" name="jobID" id="jobID">
    <br><br>
    <input type="submit" name= "add" value="Add Repair job">

</form>

<?php
if (isset($_REQUEST['add'])) {

    $jobNum= $_REQUEST['jobID'];
    $repairType = $_REQUEST['type'];
    $repairDetails = $_REQUEST['description'];
    $dateRecieved = date("Y-m-d");
    $dateEnded = '0001-01-01';
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


    $query = "INSERT INTO repairjobs (type, description, DateRecieved, DateEnded, cost, status, customerID, computerID, staffID) 
    VALUE ('$repairType', '$repairDetails', '$dateRecieved', '$dateEnded', '$cost', '$repairStatus', '$customerID', '$computerID', '$technicianID')";


    $result = mysqli_query($conn, $query)
        or die("Could not add new Repair Job");


    mysqli_close($conn);

    echo "<strong>New Repair job was added</strong>";
}

?>
<br>
<br>

</html>