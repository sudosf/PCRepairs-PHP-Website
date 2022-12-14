<?php

/**
 * Right navbar content for main page
 * @links: Portal, sign in, sign up
 */

if (isset($_SESSION['customer_access']) ) {
    echo "<ul class='navbar-nav d-flex flex-row align-items-center'>
    <li class='me-3 me-lg-0'>
        <a class='nav-link me-3 px-0' href='./portal_customer/customer_portal.php'>";

        // Show user name
        $row = $_SESSION['userData'];
        $firstname = $row['firstname'];
        echo ucfirst($firstname);

    echo "</a>
    </li>";
    
        // user has logged in (acess granted)
    // show avatar and profile options
    echo "<li class='nav-item dropdown'>
        <a
          class='nav-link dropdown-toggle d-flex align-items-center'
          href='#'
          id='navbarDropdownMenuLink'
          role='button'
          data-mdb-toggle='dropdown'
          aria-expanded='false'
        >
        <i class='fa-solid fa-user-astronaut fa-2x text-light'></i>
        </a>

        <ul class='dropdown-menu text-center' aria-labelledby='navbarDropdownMenuLink'>
            <li>
                <a class='dropdown-item pt-2 h5' href='./portal_admin/index.php'>
                    <i class='fa-solid fa-arrow-up-right-from-square'></i>
                    My Portal
                </a>
            </li>
            <li>
                <a class='dropdown-item pt-2 h5 text-danger' href='#' data-toggle='modal' data-target='#logoutModal'>
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
                <a class='nav-link me-3 px-0' href='./portal_customer/customer_portal.php'>
                    <i class='fa-solid fa-arrow-up-right-from-square'></i>
                    Portal
                </a>
            </li>
            <li class='ms-3 me-lg-0'>
                <!-- Button trigger SIGN IN modal -->
                <a type='button' href='./login.php' class='btn btn-primary px-4 py-2'>
                    SIGN IN
                </a>
            </li>
            <li class='ms-3 me-lg-0'>
                <!-- Button trigger SIGN IN modal -->
                <a type='button' href='./register.php' class='btn btn-dark px-4 py-2'>
                    SIGN UP
                </a>
            </li>
        </ul>";
}
?>