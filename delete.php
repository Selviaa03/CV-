<?php
// Check if the ID parameter is provided in the URL
if (isset($_GET['id'])) {
    // Get the contact ID from the URL
    $id = $_GET['id'];

    // Call the deleteKontak() function from crud.php to delete the contact
    require_once('crud.php');
    $result = deleteKontak($id);

    // Check if the delete operation was successful
    if ($result) {
        // If successful, redirect to the main page
        header('Location: tampil.php');
        exit;
    } else {
        echo "Failed to delete the contact.";
    }
} else {
    echo "Contact ID not provided.";
}
?>
