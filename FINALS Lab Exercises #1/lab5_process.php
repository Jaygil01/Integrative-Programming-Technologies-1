<?php
header('Content-Type: application/json');

$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true);
$response = [
'status' => 'error',
'message' => 'Invalid request or data not found.'
];

if ($data !== null && isset($data['user_name'])) {
 $name = htmlspecialchars($data['user_name']); 
 $response = [
'status' => 'success',
'message' => "Welcome, $name!"
];
}
echo json_encode($response);
?>
