<?php
// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    // Panggil skrip PHP untuk operasi CRUD
    require_once('crud.php');

    // Update data kontak ke database
    $result = updateKontak($id, $nama, $email, $no_hp, $alamat);

    // Periksa apakah update kontak berhasil
    if ($result) {
        // Jika berhasil, arahkan kembali ke halaman utama
        header('Location: tampil.php');
        exit;
    } else {
        echo "Gagal mengupdate kontak.";
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
