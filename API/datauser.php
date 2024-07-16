<?php
include 'connect.php';

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

$data = array();


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "0 hasil";
}


header('Content-Type: application/json');
echo json_encode($data);

$conn->close();
?>



