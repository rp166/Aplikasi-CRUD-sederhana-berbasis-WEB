<<<<<<< HEAD

<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$nim = $_GET['nim'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM siswa WHERE nim=$nim");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:siswa.php");
=======

<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$nim = $_GET['nim'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM siswa WHERE nim=$nim");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:siswa.php");
>>>>>>> ccc230692f6ccdc33e899aa9d9d026a776bfeb33
?>