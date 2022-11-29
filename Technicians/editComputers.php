<!doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
    require_once("Computers.php");

    $computerID = $_REQUEST['computerID'];

    $servername = "is3-dev.ict.ru.ac.za";
    $username = "G20M4174";
    $password = "G20M4174";
    $database = "galacticsystemenforcers";

    $conn = mysqli_connect($servername, $username, $password, $database)
        or die("Could not connect to database!");

    $query = "SELECT * FROM computers WHERE computerID = $computerID";

    $result = mysqli_query($conn, $query)
        or die("Could not display computer details");


    while ($row = mysqli_fetch_array($result)) {

        $serialNum = $row['serialNumber'];
        $make = $row['make'];
        $customerID = $row['customerID'];
    }

    mysqli_close($conn);

    ?>

    <form action="updateComputers.php" method="POST">
        <br>
        <br>
        <label for="SerialNum">Serial Number: </label><br>
        <input type="number" name="serialNumber" value="<?php echo $serialNum ?>">
        <br>
        <label for="Make">Make: </label><br>
        <input type="text" name="make" value="<?php echo $make ?>">
        <br>
        <label for="CustomerID">CustomerID: </label><br>
        <input type="number" name="customerID" value="<?php echo $customerID ?>">
        <br>
        <input type="hidden" name="computerID" id="computerID" value="<?php echo $computerID ?>">
        <br>
        <input type="submit" value="Update Computer Details">
    </form>
</body>

</html>