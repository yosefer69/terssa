
<?php
include 'connect.php';

$email = $_POST['email'];
$pw = $_POST['password'];
$pwlama = $_POST['password_lama'];

$sql = "UPDATE user SET password = '$pw' WHERE username = '$email' AND password = '$pwlama'";
$result = $conn->query($sql);

if ($result) {
    echo "update password berhasil";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

