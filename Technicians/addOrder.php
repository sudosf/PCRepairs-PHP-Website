<!DOCTYPE html>
<a href="Orders.php">Return</a>


<form action="addOrder.php" method="POST">
  <br>
  <label for="itemID">ItemID: </label>
  <br>
  <input type="number" name="itemID">
  <br>
  <br>
  <label for="technicianID">technicianID: </label>
  <br>
  <input type="number" name="technicianID">
  <br>
  <br>
  <input type="submit" name = "add" value="Submit">

</form>

<?php
if (isset($_REQUEST['add'])) {

$itemID = $_REQUEST['itemID'];
$technicianID = $_REQUEST['technicianID'];


$servername = "is3-dev.ict.ru.ac.za";
$username = "G20M4174";
$password = "G20M4174";
$database = "galacticsystemenforcers";

$conn = mysqli_connect($servername, $username, $password, $database)
  or die("Could not connect to database!");


$query = "INSERT INTO orders (itemID, status, technicianID)
VALUE ('$itemID', 'Pending', '$technicianID')";


$result = mysqli_query($conn, $query)
  or die("Could not add new Order");


mysqli_close($conn);

echo "<strong>New Order was added</strong>";


}

?>
<br>
<br>

</html>