<?php

// Memanggil config
require_once '../../config/config.php';

// Memanggil header
include '../layouts/header.php';

?>

<div class="container mt-5">

    <h1>Daftar Kategori</h1>

    <!-- GAMBAR -->
   <div class="mt-4">
    <img src="/blogspot/public/img/banner.jpg"
         width="300"
         class="img-thumbnail">
</div>

    <button onclick="window.location.href='views/categories/create.php'">
    Tambah Kategori
</button>

    <!-- Tabel kategori -->
    <table class="table table-bordered">

        <thead class="table-dark">

            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
            </tr>

        </thead>

        <tbody>

            <?php

            // Contoh data kategori
            $categories = [
                ['id' => 1, 'name' => 'Teknologi'],
                ['id' => 2, 'name' => 'Gaming'],
                ['id' => 3, 'name' => 'Pendidikan']
            ];

            $no = 1;

            // Perulangan data kategori
            foreach($categories as $category) {

            ?>

            <tr>

                <td><?= $no++; ?></td>

                <td><?= $category['name']; ?></td>

            </tr>

            <?php } ?>

        </tbody>

    </table>

</div>

<?php

// Memanggil footer
include '../layouts/footer.php';

?>