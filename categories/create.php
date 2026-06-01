<?php

include '../models/Post.php';

class PostController {

    private $post;

    public function __construct($db) {
        $this->post = new Post($db);
    }

    public function index() {
        return $this->post->getAllPosts();
    }

    public function show($id) {
        return $this->post->getPostById($id);
    }

    
    public function store($title, $content) {
        return $this->post->createPost($title, $content);
    }

    // Hapus artikel
    public function delete($id) {
        return $this->post->deletePost($id);
    }
}
?>