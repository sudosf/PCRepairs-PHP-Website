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
    <h2>Computers</h2>
    <a href="Technicianportal.html">Return</a>
    <br>
    <br>

    <form action="Computers.php" method="POST">
    <button onclick="location.href= 'Computers.php'" type="button">Refresh Table</button>
        <button onclick="location.href= 'addComputer.php'" type="button">Add New Computer</button>
    </form>
    <br>

    <?php
    require_once('Computers.php');

    $servername = "is3-dev.ict.ru.ac.za";
    $username = "G20M4174";
    $password = "G20M4174";
    $database = "galacticsystemenforcers";

    $conn = mysqli_connect($servername, $username, $password, $database)
        or die("Could not connect to database!");

    $query = "SELECT * FROM computers";

    $result = mysqli_query($conn, $query)
        or die("Could not display table");

    echo "<table>
    <tr style=\"background-color: orange;\">
        <td><strong>computerID</strong></td>
        <td><strong>serialNumbrr</strong></td>
        <td><strong>make</strong></td>
        <td><strong>customerID</strong></td>
        <td><strong></strong></td>
        <td><strong></strong></td>

    </tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['computerID'] . "</td>";
        echo "<td>" . $row['serialNumber'] . "</td>";
        echo "<td>" . $row['make'] . "</td>";
        echo "<td>" . $row['customerID'] . "</td>";
        echo "<td><a href=\"editComputers.php?computerID={$row['computerID']}\"><input type=\"button\" value=\"Update Computer\"></a></td>";
        echo "<td><a href=\"deleteComputers.php?computerID={$row['computerID']}\"><input type=\"button\" value=\"Delete\"></a></td>";
        echo "</tr>";
    }

    echo "</table>";

    mysqli_close($conn);


    ?>

</body>

</html>