<?php

class Post {

    private $conn;
    private $table = "posts";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getAllPosts()
    {
        $query = "SELECT * FROM " . $this->table . " ORDER BY id DESC";

        $result = mysqli_query($this->conn, $query);

        return $result;
    }

}
?>