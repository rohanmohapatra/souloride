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

$sql = "SELECT `Name`, `Email_ID`, `Username`, `Password` FROM `signup` WHERE `Username`='$loginuser'";
$result=$conn->query($sql);
$row = $result->fetch_assoc();
$newURL1='homepage.html';
$newURL2='login.html';
if($row["Password"]==$loginpass)
    header('Location: '.$newURL1);
else
    ?>
    <script type="text/javascript">
    alert("Invalid Username or Password Entered!"); 
    window.setTimeout(function() {
        window.location.href='login.html';
    }, 200);
</script>
<?php

$conn->close();
?>


