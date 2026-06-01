<?php

class User {

    private $conn;
    private $table = "users";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Login user
    public function login($username, $password)
    {
        $query = "SELECT * FROM " . $this->table . "
                  WHERE username='$username'
                  AND password='$password'";

        $result = mysqli_query($this->conn, $query);

        return $result;
    }
}
?>