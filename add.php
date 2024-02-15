<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kontak Baru</title>
</head>
<body>
    <h2>Tambah Kontak Baru</h2>
    <form action="process_add.php" method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>No HP:</label>
        <input type="text" name="no_hp" required><br>

        <label>Alamat:</label>
        <textarea name="alamat" required></textarea><br>

        <input type="submit" value="Simpan">
    </form>
    <br>
    <a href="tampil.php">Kembali ke Daftar Kontak</a>
</body>
</html>
