<?php
session_start();
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

$sql = "INSERT INTO `signup`(`Name`, `Email_ID`, `Username`, `Password`) VALUES ('$name','$email','$user','$pass')";
$conn->query($sql);
header('Location: '."documents.php");
$conn->close();
$_SESSION['username']=$user;
?>
