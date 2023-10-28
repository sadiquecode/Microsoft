<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "microsoft";
$number = $_POST['number'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE contect_us SET number_=$number WHERE id=1";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

$msg = "Number updated successfully.";
header("Location: addnumber.php?msg=" . urlencode($msg));

?>
