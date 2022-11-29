<!doctype html>

<style>
    tr:nth-child(even) {
        background-color: lightgray;
    }

    table {
        width: 80%;
        border-collapse: collapse;
    }
</style>

<head>
    <meta charset="utf-8">
</head>

<body>
    <h2>Repair Jobs</h2>
    <a href="Technicianportal.html">Return</a>
    <br>
    <br>

    <form action="RepairJobs.php" method="POST">
    <button onclick="location.href= 'RepairJobs.php'" type="button">Refresh Table</button>
    <button onclick="location.href= 'addRepairJob.php'" type="button">Make New Repair Job</button>
    </form>
    <br>

    <?php
    require_once('Repairjobs.php');

    $servername = "is3-dev.ict.ru.ac.za";
    $username = "G20M4174";
    $password = "G20M4174";
    $database = "galacticsystemenforcers";

    $conn = mysqli_connect($servername, $username, $password, $database)
        or die("Could not connect to database!");

    $query = "SELECT * FROM repairjobs";

    $result = mysqli_query($conn, $query)
        or die("Could not display table");

    echo "<table>
    <tr style=\"background-color: orange;\">
        <td><strong>jobID</strong></td>
        <td><strong>Type</strong></td>
        <td><strong>Description</strong></td>
        <td><strong>DateRecieved</strong></td>
        <td><strong>DateEnded</strong></td>
        <td><strong>Cost</strong></td>
        <td><strong>Status</strong></td>
        <td><strong>ItemID</strong></td>
        <td><strong>CustomerID</strong></td>
        <td><strong>ComputerID</strong></td>
        <td><strong>TechnicianID</strong></td>
        <td><strong></strong></td>
        <td><strong></strong></td>
        <td><strong></strong></td>
    </tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['jobID'] . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['DateRecieved'] . "</td>";
        echo "<td>" . $row['DateEnded'] . "</td>";
        echo "<td>" . "R" . $row['cost'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td>" . $row['asignedItemsID'] . "</td>";
        echo "<td>" . $row['customerID'] . "</td>";
        echo "<td>" . $row['computerID'] . "</td>";
        echo "<td>" . $row['staffID'] . "</td>";
        //echo "<td><a href=\"assignPart.php?jobID={$row['jobID']}\"><input type=\"button\" value=\"Assign Part\"></a></td>";
        //echo "<td><a href=\"duplicateJob.php?jobID={$row['jobID']}\"><input type=\"button\" value=\"Duplicate\"></a></td>";
        echo "<td><a href=\"editRepairJobs.php?jobID={$row['jobID']}\"><input type=\"button\" value=\"Update Job\"></a></td>";
        echo "<td><a href=\"completeRepairJob.php?jobID={$row['jobID']}\"><input type=\"button\" value=\"Complete Job\"></a></td>";
        echo "<td><a href=\"deleteRepairJob.php?jobID={$row['jobID']}\"><input type=\"button\" value=\"Delete\"></a></td>";
        echo "</tr>";
    }

    echo "</table>";

    mysqli_close($conn);

    ?>

</body>

</html>