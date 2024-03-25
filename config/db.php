<?php
$conn = mysqli_connect("db:3306", "db", "db", "db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>