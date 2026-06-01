<?php

include '../config/Database.php';
include '../models/Post.php';

$database = new Database();
$db = $database->connect();

$post = new Post($db);

$posts = $post->getAllPosts();

?>

<?php include '../views/layouts/header.php'; ?>

<h1>Daftar Artikel</h1>

<?php while($data = mysqli_fetch_array($posts)) { ?>

    <div class="card mb-3">
        <div class="card-body">

            <h3><?= $data['title']; ?></h3>

            <a href="show.php?id=<?= $data['id']; ?>"
               class="btn btn-primary">

               Baca

            </a>

        </div>
    </div>

<?php } ?>

<?php include '../views/layouts/footer.php'; ?>