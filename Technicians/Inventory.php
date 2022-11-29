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
    <h2>Inventory</h2>
    <a href="Technicianportal.html">Return</a>
    <br>
    <br>
    <br>

    <?php
    require_once('Inventory.php');

        $servername = "is3-dev.ict.ru.ac.za";
        $username = "G20M4174";
        $password = "G20M4174";
        $database = "galacticsystemenforcers";

        $conn = mysqli_connect($servername, $username, $password, $database)
            or die("Could not connect to database!");

        $query = "SELECT * FROM items";

        $result = mysqli_query($conn, $query)
            or die("Could not display table");

        echo "<table>
        <tr style=\"background-color: orange;\">
        <td><strong>ItemID</strong></td>
        <td><strong>name</strong></td>
        <td><strong>stock</strong></td>
        <td><strong>Cost</strong></td>
        <td><strong></strong></td>
        </tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['itemID'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['stock'] . "</td>";
            echo "<td>" . "R" . $row['cost'] . "</td>";
            echo "<td><a href=\"deleteItem.php?itemID={$row['itemID']}\"><input type=\"button\" value=\"Delete\"></a></td>";
            echo "</tr>";
        }

        echo "</table>";

        mysqli_close($conn);



    ?>

</body>

</html>