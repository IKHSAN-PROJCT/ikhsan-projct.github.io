<?php
// Simple authentication script for demonstration purposes
header('Content-Type: application/json');

// Replace with your own username and password
$valid_username = 'sanz';
$valid_password = 'sanz';

$username = $_POST['username'];
$password = $_POST['password'];

$response = array('success' => false);

if ($username === $valid_username && $password === $valid_password) {
    $response['success'] = true;
}

echo json_encode($response);
?>