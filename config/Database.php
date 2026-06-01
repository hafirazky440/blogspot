<?php

define('BASEURL', 'http://localhost/blogspot/public');
class Database {

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "db_blogspot";

    public $conn;

    // Method koneksi database
    public function connect()
    {
        $this->conn = mysqli_connect(
            $this->host,
            $this->username,
            $this->password,
            $this->database
        );

        // Cek koneksi
        if (!$this->conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        return $this->conn;
    }
}
?>