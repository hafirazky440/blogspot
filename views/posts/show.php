<?php

include '../config/Database.php';

$database = new Database();
$db = $database->connect();

$id = $_GET['id'];

$query = mysqli_query($db, "SELECT * FROM posts WHERE id='$id'");

$data = mysqli_fetch_array($query);

?>

<h1><?= $data['title']; ?></h1>

<p><?= $data['content']; ?></p>