<?php require_once("config.php");

class Util {
    public $conn; // perform database queries

    function __construct() {
        // initiliaze database connetion
        $this->conn = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DATABASE)
        // display databse connection error
        or die("Database: Connection Falied!");
    }

    function __destruct() {
        //close connection
        mysqli_close($this->conn);
    }

    // get rid of spaces, new lines, unwanted characters etc.
    public function strip($data) {
        $data = preg_replace("@\n@", "", $data);
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
    public function strip_email($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
    
    /*** database retrieve data method(s) ***/
    public function emailExists($usernameEmail) {
        // get user info
        $query = "SELECT * FROM customers
                    WHERE email = '{$usernameEmail}'";
        $row = $this->conn->query($query);

        // if the $result is not False,
        // and contains at least one row
        if ($row !== false) {
            if ($row->num_rows > 0) {
                // user exists
                return true;
            }
        }
        return false;
    }

    /*** database retrieve data method(s) ***/
    public function getUserLoginData($usernameEmail, $passwordCheck, $table) {
        // get user info
        $query = "SELECT * FROM {$table}
                    WHERE email = '{$usernameEmail}'";
        $row = $this->conn->query($query);

        $data = null;
        // if the $result is not False,
        // and contains at least one row
        $usernameEmail = $hash_password = "";
        if ($row !== false) {
            if ($row->num_rows > 0) {
                // user exists
                $data = mysqli_fetch_array($row);
                $usernameEmail = $data['email'];
                $hash_password = $data['password'];
            }
        }
        else {
            echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                unable to sign in at the moment, please try again later.
                <a class='link-dark text-dark' href='../index.php'>Go to Home Page</a>
            </div>";
        }

        // check if all user details are correct
        if ($usernameEmail != "" && $hash_password != "") {
            if (password_verify($passwordCheck, $hash_password)) {
                return $data;
            }
        }
        return null;
    }

    /*** database retrieve data method(s) ***/
    public function getAdminLoginData($usernameEmail, $passwordCheck, $table) {
        // get user info
        $query = "SELECT * FROM {$table}
                    WHERE email = '{$usernameEmail}'";
        $row = $this->conn->query($query);

        $data = null;
        // if the $result is not False,
        // and contains at least one row
        $usernameEmail = $password = "";
        if ($row !== false) {
            if ($row->num_rows > 0) {
                // user exists
                $data = mysqli_fetch_array($row);
                $usernameEmail = $data['email'];
                $password = $data['password'];
            }
        }
        else {
            echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                unable to sign in at the moment, please try again later.
            </div>";
        }

        // check if all user details are correct
        if ($usernameEmail != "" && $password != "") {
            if ($passwordCheck == $password) {
                return $data;
            }
        }
        return null;
    }

    public function getTableData($query) {
        $row = $this->conn->query($query);

        // if the $result is not False,
        // and contains at least one row
        if ($row !== false) {
            if ($row->num_rows > 0)
                // data exists
                return $row;
        }
        else {
            echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                unable to get table data, please try again later".$this->conn->error."
            </div>";
        }

        return null;
    }
}
?>