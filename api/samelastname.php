<?php
$conn = new mysqli("localhost", "root", "Password@123", "api");

$lastName = $_GET['lastname'];

$sql = "SELECT * FROM users WHERE lastName='$lastName'";
$qur = $conn->query($sql);

while ($r = mysqli_fetch_assoc($qur)) {
    $msg[] = array("First Name" => $r['firstName'], "Last Name" => $r['lastName']);
}

$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);
