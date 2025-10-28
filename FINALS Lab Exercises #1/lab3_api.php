<?php
header('Content-Type: application/json');
$user_data = [
'id' => 101,
'name' => 'Maria Santos',
'email' => 'maria@example.com',
'status' => 'active'
];
$json_response = json_encode($user_data);

echo $json_response;
?>
