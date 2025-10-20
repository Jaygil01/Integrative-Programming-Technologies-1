<?php
$json_data = file_get_contents('php://input');
$response = ['error' => 'No JSON data received or invalid format.'];
$http_status = 400; 

$data = json_decode($json_data, true);

if ($data !== null && is_array($data)) {
$username = $data['username'] ?? 'N/A';
$password = $data['password'] ?? 'N/A';

$response = [
'status' => 'success',
'message' => 'Data received and decoded.',
'username' => $username,
'password' => $password ];
$http_status = 200; 
}
header('Content-Type: application/json', true, $http_status);
echo json_encode($response);
?>
