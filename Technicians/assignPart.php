<!doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
    require_once("RepairJobs.php");

    $jobNum = $_REQUEST['JobNum'];

    $servername = "is3-dev.ict.ru.ac.za";
    $username = "G20M4174";
    $password = "G20M4174";
    $database = "galacticsystemenforcers";

    $conn = mysqli_connect($servername, $username, $password, $database)
        or die("Could not connect to database!");

    $query = "SELECT * FROM repairjobs WHERE JobNum = $jobNum";
  

    $result = mysqli_query($conn, $query)
        or die("Could not display repair job details");


    while ($row = mysqli_fetch_array($result)) {
        $itemID = $row['ItemID'];
    }


    mysqli_close($conn);

    ?>

    <form action="updateRepairPart.php" method="POST">
        <br>
        <br>
        <label for="ItemID">ItemID: </label><br>
        <input type="number" name="ItemID" value="<?php echo $itemID ?>">
        <br>
        <label for="ItemName">Item Name: </label><br>
        <input type="number" name="ItemName" value="<?php echo $itemName?>" readonly>
        <br>
        <label for="ItemCost">Item Cost: </label><br>
        <input type="number" name="ItemCost" value="<?php echo $itemCost?>" readonly>
        <br>
        <input type="hidden" name="JobNum" id="JobNum" value="<?php echo $jobNum ?>">
        <br>
        <input type="submit" value="Assign Part">

    </form>
</body>

</html>