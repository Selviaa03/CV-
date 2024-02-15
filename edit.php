<?php
// Periksa apakah ada parameter ID di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Panggil skrip PHP untuk operasi CRUD
    require_once('crud.php');

    // Dapatkan data kontak berdasarkan ID
    $contact = readContact($id);

    if ($contact) {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Edit Kontak</title>
        </head>
        <body>
            <h2>Edit Kontak</h2>
            <form action="process_edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $contact['id']; ?>">

                <label>Nama:</label>
                <input type="text" name="nama" value="<?php echo $contact['nama']; ?>" required><br>

                <label>Email:</label>
                <input type="email" name="email" value="<?php echo $contact['email']; ?>" required><br>

                <label>No HP:</label>
                <input type="text" name="no_hp" value="<?php echo $contact['no_hp']; ?>" required><br>

                <label>Alamat:</label>
                <textarea name="alamat" required><?php echo $contact['alamat']; ?></textarea><br>

                <input type="submit" value="Simpan">
            </form>
            <br>
            <a href="tampil.php">Kembali ke Daftar Kontak</a>
        </body>
        </html>
        <?php
    } else {
        echo "Kontak tidak ditemukan.";
    }
} else {
    echo "ID kontak tidak diberikan.";
}
?>
