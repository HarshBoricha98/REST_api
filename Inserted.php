<?php

$conn = new mysqli("localhost", "root", "Password@123", "api");

$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];

$sql = "INSERT INTO `users` (`id`, `firstName`, `lastName`) VALUES (NULL, '$firstname', '$lastname')";

if ($conn->query($sql)) {
    $msg = array("msg" => "Your record inserted successfully");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$json = $msg;

header('content-type: application/json');
echo json_encode($json);


@mysqli_close($conn);
