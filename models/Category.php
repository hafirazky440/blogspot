<?php

class Category {

    private $conn;
    private $table = "kategori";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getCategories()
    {
        $query = "SELECT * FROM " . $this->table;

        $result = mysqli_query($this->conn, $query);

        return $result;
    }
}
?>