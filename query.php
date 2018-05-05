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

$sql = "INSERT INTO `touchwithus`(`First Name`, `Last Name`, `Email`, `Mobile Number`, `Message`) VALUES ('$firstname','$lastname','$mail','$number','$message')";
$conn->query($sql);
?>
    <script type="text/javascript">
    alert("Thank you for getting in touch with us!"); 
    window.setTimeout(function() {
        window.location.href='homepage.html';
    }, 200);
</script>
<?php

?>
