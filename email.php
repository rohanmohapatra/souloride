<?php
extract($_POST);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "souloride";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `subscribe`(`Email`) VALUES ('$subemail')";
$conn->query($sql);
$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");
//header('Location: '."");
$conn->close();

?>
