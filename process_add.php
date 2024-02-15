<?php
// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    // Panggil skrip PHP untuk operasi CRUD
    require_once('crud.php');

    // Tambahkan kontak baru ke database
    $result = tambahKontak($nama, $email, $no_hp, $alamat);

    // Periksa apakah tambah kontak berhasil
    if ($result) {
        // Jika berhasil, arahkan kembali ke halaman utama
        header('Location: tampil.php');
        exit;
    } else {
        echo "Gagal menambahkan kontak.";
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
