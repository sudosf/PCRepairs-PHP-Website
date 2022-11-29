<?php
if ($_SESSION['HOD_access'] == "true") {
    echo "<!-- Nav Item - reporting -->
    <li class='nav-item'>
        <a class='nav-link' href='report.php'>
            <i class='fa fa-solid fa-chart-line'></i>
            Reporting
        </a>
    </li>";
}
?>