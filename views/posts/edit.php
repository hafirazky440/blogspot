<?php

include '../config/Database.php';

$database = new Database();
$db = $database->connect();

$id = $_GET['id'];

$query = mysqli_query($db,
    "SELECT * FROM posts WHERE id='$id'"
);

$data = mysqli_fetch_array($query);

?>

<form method="POST">

    <input
        type="text"
        name="judul"
        value="<?= $data['title']; ?>"
    >

    <br><br>

    <textarea name="isi"><?= $data['content']; ?></textarea>

    <br><br>

    <button type="submit" name="update">
        Update
    </button>

</form>