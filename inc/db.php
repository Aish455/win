<?php
// Database connection parameters

$conn = mysqli_connect('localhost','root', 'root','win',3307);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>