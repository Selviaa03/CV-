<?php
// Konfigurasi database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_kontak";

// Buat koneksi ke database
$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Fungsi untuk mendapatkan semua data kontak dari database
function getContacts() {
    global $conn;
    $sql = "SELECT * FROM tb_kontak";
    $result = $conn->query($sql);
    $contacts = array();
    while ($row = $result->fetch_assoc()) {
        $contacts[] = $row;
    }
    return $contacts;
}
function readContact($id) {
    global $conn;
    $sql = "SELECT * FROM tb_kontak WHERE id = $id";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

function tambahKontak($nama, $email, $no_hp, $alamat) {
    global $conn;
    $sql = "INSERT INTO tb_kontak (nama, email, no_hp, alamat) VALUES ('$nama', '$email', '$no_hp', '$alamat')";
    return $conn->query($sql);
}

function updateKontak($id, $nama, $email, $no_hp, $alamat) {
    global $conn;
    $sql = "UPDATE tb_kontak SET nama='$nama', email='$email', no_hp='$no_hp', alamat='$alamat' WHERE id = $id";
    return $conn->query($sql);
}

function deleteKontak($id) {
    global $conn;
    $sql = "DELETE FROM tb_kontak WHERE id = $id";
    return $conn->query($sql);
}


// Fungsi untuk menutup koneksi database
function closeConnection() {
    global $conn;
    $conn->close();
}
?>
 