<<<<<<< HEAD

<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$nip = $_GET['nip'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM wali WHERE nip=$nip");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
=======

<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$nip = $_GET['nip'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM wali WHERE nip=$nip");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
>>>>>>> ccc230692f6ccdc33e899aa9d9d026a776bfeb33
?>