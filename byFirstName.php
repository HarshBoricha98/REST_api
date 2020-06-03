<?php
$conn = new mysqli("localhost", "root", "Password@123", "api");

$firstName = $_GET['name'];
echo $firstName;

$getData = "SELECT * FROM users WHERE `firstName=`$firstName";
$qur = $conn->query($getData);

while ($r = mysqli_fetch_assoc($qur)) {
    $msg[] = array("name" => $r['name'], "email" => $r['email'], "status" => $r['status']);
}

$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);
?>