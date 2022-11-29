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
    <h2>Orders</h2>
    <a href="Technicianportal.html">Return</a>
    <br>
    <br>

    <form action="Orders.php" method="POST">
        <button onclick="location.href= 'Orders.php'" type="button">Refresh Table</button>
        <button onclick="location.href= 'addOrder.php'" type="button">Make New Order</button>
    </form>
    <br>

    <?php
    require_once('Orders.php');

        $servername = "is3-dev.ict.ru.ac.za";
        $username = "G20M4174";
        $password = "G20M4174";
        $database = "galacticsystemenforcers";

        $conn = mysqli_connect($servername, $username, $password, $database)
            or die("Could not connect to database!");

        $query = "SELECT * FROM orders";

        $result = mysqli_query($conn, $query)
            or die("Could not display table");

        echo "<table>
    <tr style=\"background-color: orange;\">
        <td><strong>orderID</strong></td>
        <td><strong>itemID</strong></td>
        <td><strong>status</strong></td>
        <td><strong>TechnicianID</strong></td>
        <td><strong></strong></td>
        <td><strong></strong></td>
    </tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['orderID'] . "</td>";
            echo "<td>" . $row['itemID'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td>" . $row['technicianID'] . "</td>";
            echo "<td><a href=\"updateOrders.php?orderID={$row['orderID']}\"><input type=\"button\" name = \"release\" value=\"Release Order\"></a></td>";
            echo "<td><a href=\"deleteOrder.php?orderID={$row['orderID']}\"><input type=\"button\" name = \"release\" value=\"Delete\"></a></td>";
            echo "</tr>";
        }

        echo "</table>";

        mysqli_close($conn);



    ?>

</body>

</html>