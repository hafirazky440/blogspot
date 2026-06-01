<?php

include '../layouts/header.php';

?>

<h1>Tambah Kategori</h1>

<form action="" method="POST">

    <!-- Input nama kategori -->
    <div class="mb-3">

        <label class="form-label">
            Nama Kategori
        </label>

        <input
            type="text"
            name="name"
            class="form-control"
            placeholder="Masukkan kategori">

    </div>

    <!-- Tombol simpan -->
    <button type="submit" class="btn btn-success">

        Simpan

    </button>

    <!-- Tombol JavaScript -->
    <button
        type="button"
        onclick="tampilPesan()"
        class="btn btn-primary">

        Klik Saya

    </button>

</form>

<?php

include '../layouts/footer.php';

?>