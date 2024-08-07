<?php
$conn = mysqli_connect('localhost', 'root', '', 'user_form');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>