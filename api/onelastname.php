<?php
$conn = new mysqli("localhost", "root", "Password@123", "api");

$lastName = $_GET['lastname'];

$sql = "SELECT `firstName` FROM `users` WHERE lastName='$lastName' LIMIT 1";


$qur = $conn->query($sql);
while ($r = mysqli_fetch_assoc($qur)) {
    $msg[] = array("First Name" => $r['firstName']);
}

$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);
