<?php
include 'connect.php';

$email = $_POST['email'];
$pw = $_POST['password'];

$sql = "INSERT INTO user (username, password) VALUES ('$email', '$pw')";
$result = $conn->query($sql);

if ($result) {
    echo "daftar berhasil";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

