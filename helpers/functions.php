<?php

// Function untuk membatasi jumlah karakter
function limitText($text, $limit){

    // Mengambil sebagian text
    return substr($text, 0, $limit) . "...";
}

// Function untuk format tanggal
function formatTanggal($tanggal){

    // Mengubah format tanggal
    return date('d-m-Y', strtotime($tanggal));
}

// Function untuk membersihkan input
function cleanInput($data){

    // Menghapus spasi di awal dan akhir
    $data = trim($data);

    // Menghapus slash
    $data = stripslashes($data);

    // Mengubah karakter khusus menjadi aman
    $data = htmlspecialchars($data);

    return $data;
}

?>