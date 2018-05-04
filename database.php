<?php
$servername = "your server name";
$username = "your username of mysql";
$password = "sql password";
$dbname = "database name";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
