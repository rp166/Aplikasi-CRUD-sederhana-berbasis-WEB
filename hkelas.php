<<<<<<< HEAD

<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$kode_kelas = $_GET['kode_kelas'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM kelas WHERE kode_kelas=$kode_kelas");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:kelas.php");
=======

<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$kode_kelas = $_GET['kode_kelas'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM kelas WHERE kode_kelas=$kode_kelas");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:kelas.php");
>>>>>>> ccc230692f6ccdc33e899aa9d9d026a776bfeb33
?>