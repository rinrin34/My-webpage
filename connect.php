

<?php
$conn = mysqli_connect("127.0.0.1","root","root", "Freelance_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>