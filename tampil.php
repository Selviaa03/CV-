<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kontak</title>
    <style>
        /* CSS untuk mengatur tampilan tabel */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Daftar Kontak</h2>
    <?php
    // Panggil skrip PHP untuk operasi CRUD
    require_once('crud.php');

    // Ambil semua data kontak dari database
    $contacts = getContacts();

    if (count($contacts) > 0) {
        // Tampilkan data dalam tabel
        echo '<table>';
        echo '<tr><th>ID</th><th>Nama</th><th>Email</th><th>No HP</th><th>Alamat</th><th>Aksi</th></tr>';
        foreach ($contacts as $contact) {
            echo '<tr>';
            echo '<td>' . $contact['id'] . '</td>';
            echo '<td>' . $contact['nama'] . '</td>';
            echo '<td>' . $contact['email'] . '</td>';
            echo '<td>' . $contact['no_hp'] . '</td>';
            echo '<td>' . $contact['alamat'] . '</td>';
            echo '<td><a href="edit.php?id=' . $contact['id'] . '">Edit</a> | <a href="delete.php?id=' . $contact['id'] . '">Delete</a></td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Tidak ada data kontak.';
    }
    ?>
    <br>
    <a href="add.php">Tambah Kontak</a>
</body>
</html>
