
<?php
if (isset($_SESSION['user_access']) ) {
    include("components/avatar.style.inc.php");

    require('server/util.php');
    // utility functions
    $util = new Util();
    $conn = $util->conn;

    $row = $_SESSION['userData'];
    $userID = $row['id'];
    $username = $row['username'];

    $query = "SELECT * 
                FROM users
                WHERE id = '$userID'";
    $result = $util->getTableData($query);

    $curr_avatar = "";
    if ($result != false) {
        while ($row = mysqli_fetch_array($result)) {

            $curr_avatar = $row['avatar'];
        }    
    } else {
        // operation failed, avatar not found
        $curr_avatar = null;
    }

    echo"
    <ul class='navbar-nav d-flex flex-row text-center align-items-center'>
    
        <li class='me-3'>
            <a class='nav-link me-3 text-center rounded border border-2 border-dark' href='test.php'>
                Testing
            </a>
        </li>

        <li class='me-3'>
            <a class='nav-link me-3 text-center rounded border border-2 border-dark' href='dashboard.php'>
                <i class='fa-solid fa-arrow-up-right-from-square'></i>
                My Portal
            </a>
        </li>

        <li class='me-3 me-lg-0'>
            <a class='text-light px-0 me-2'>
                $username
            </a>
        </li>";
    
    // user has logged in (acess granted)
    // show avatar and profile options
    echo "<li class='nav-link dropdown d-flex align-items-center'>
                   
            <div class='thumbnail nav-link dropdown-toggle d-flex align-items-center 
                ratio ratio-1x1 rounded-circle overflow-hidden'
                id='navbarDropdownMenuLink'
                role='button'
                data-mdb-toggle='dropdown'
                aria-expanded='false'
            >";

            if ($curr_avatar == null) {
                echo "<i class='fa fa-solid fa-user-astronaut fa-2x'></i>";
            }
            else {
                echo "<img src='uploads/$curr_avatar' class='img-cover' alt='profile-picture'>";
            }

    echo    "</div>

            <i class='nav-link text-white dropdown-toggle' id='navbarDropdownMenuLink'
                role='button'
                data-mdb-toggle='dropdown'
                aria-expanded='false'
            '></i>

            <ul class='dropdown-menu text-center' aria-labelledby='navbarDropdownMenuLink'>
                <li>
                    <a class='dropdown-item p-2 text-danger' href='#' data-toggle='modal' data-target='#logoutModal'>
                        <i class='fa-solid fa-right-to-bracket'></i>
                        Logout
                    </a>
                </li>
            </ul>
            </li>
    </ul>";

} else {
    // user is not logged in (access restricted)
    // show avatar and profile options
    echo "<ul class='navbar-nav d-flex flex-row align-items-center'>
            <li class='me-3 me-lg-0'>
                <a class='nav-link me-3 px-0' href='dashboard.php'>
                    <i class='fa-solid fa-arrow-up-right-from-square'></i>
                    My Portal
                </a>
            </li>
            <li class='ms-3 me-lg-0'>
                <!-- Button trigger SIGN IN modal -->
                <a type='button' href='sign-in.php' class='btn btn-primary px-4 py-2'>
                    SIGN IN
                </a>
            </li>
            <li class='ms-3 me-lg-0'>
                <!-- Button trigger SIGN IN modal -->
                <a type='button' href='sign-up.php' class='btn btn-dark px-4 py-2'>
                    SIGN UP
                </a>
            </li>
        </ul>";
}
?>