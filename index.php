<?php

// Memanggil header
include 'views/layouts/header.php';

// Memanggil helper
include 'helpers/functions.php';

?>

<h1>HI! WELCOME TO MY BLOG</h1>

<p>
    this is my simple blogspot for anything about this world, so enjoy it.
</p>

<?php

// Contoh text artikel
$text = "what should we read now?";

// Menampilkan text yang dipotong
echo limitText($text, 30);

?>

<!-- Gambar -->
<div class="mt-4">

    <img
        src="public/img/banner.jpg"
        width="500"
        class="img-fluid">

</div>

<!-- Tombol JavaScript -->
<div class="mt-4">

    <button
        onclick="tampilPesan()"
        class="btn btn-primary">

        click
        

    </button>

</div>

<?php

// Memanggil footer
include 'views/layouts/footer.php';

?>