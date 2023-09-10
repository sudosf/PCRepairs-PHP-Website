<?php

    if ( !isset($_SESSION['user_access']) ) {
        header("Location: sign-in.php");
    }

?>