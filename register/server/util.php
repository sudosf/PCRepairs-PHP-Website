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
    public function strip_username($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
    
    /*** database retrieve data method(s) ***/
    public function usernameExists($username) {
        // get user info
        $query = "SELECT * FROM users
                    WHERE username = '{$username}'";
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
    public function getUserLoginData($username, $password) {
        // get user info
        $query = "SELECT * FROM users
                    WHERE username = $username";
        $row = $this->conn->query($query);

        $data = null;
        // if the $result is not False,
        // and contains at least one row
        $hash_password = "";
        if ($row !== false) {
            if ($row->num_rows > 0) {
                // user exists
                $data = mysqli_fetch_array($row);
                $hash_password = $data['password'];

                if (password_verify($password, $hash_password)) {
                    return $data;
                }
            }
        } else {
            echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                unable to sign in at the moment, please try again later.
            </div>";
            
            return null;
        }  
    }

}
?>