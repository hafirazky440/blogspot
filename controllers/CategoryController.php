<?php

include '../models/Category.php';

class CategoryController {

    private $category;

    public function __construct($db) {
        $this->category = new Category($db);
    }

    // Ambil semua kategori
    public function index() {
        return $this->category->getAllCategories();
    }

    // Tambah kategori
    public function store($name) {
        return $this->category->createCategory($name);
    }
}
?>