<?php
$servername = "166.62.6.78";
$username = "gulfamansari1515";
$password = "Gulfam@45683968";
$dbname = "DroidTechKnow";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
