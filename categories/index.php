<?php

include 'config/database.php';

include 'header.php';

$query = mysqli_query(
    $koneksi,

    "SELECT * FROM kategori"
);

?>

<h1 class="mb-4">Data Kategori</h1>


<div class="card p-4 mb-4">

    <h4 class="mb-3">Tambah Kategori</h4>

    <form action="store.php" method="POST">

        <div class="mb-3">

            <label class="form-label">
                Nama Kategori
            </label>

            <input 
                type="text"
                name="nama_kategori"
                class="form-control"
                placeholder="Masukkan kategori"
            >

        </div>

        <button 
            type="submit"
            class="btn btn-primary"
        >
            Simpan Kategori
        </button>

    </form>

</div>



<table class="table table-bordered table-hover">

    <thead class="table-dark">

        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>

    </thead>

    <tbody>

        <?php
        $no = 1;

        while($data = mysqli_fetch_array($query)){
        ?>

        <tr>

            <td><?= $no++; ?></td>

            <td>
                <?= $data['nama_kategori']; ?>
            </td>

            <td>

                <a 
                    href="edit.php?id=<?= $data['id']; ?>"
                    class="btn btn-warning btn-sm"
                >
                    Edit
                </a>

                <a 
                    href="delete.php?id=<?= $data['id']; ?>"
                    class="btn btn-danger btn-sm"
                >
                    Hapus
                </a>

            </td>

        </tr>

        <?php } ?>

    </tbody>

</table>

<?php include 'footer.php'; ?>