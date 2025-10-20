<?php
$student = [
'name' => 'Maria',
'age' => 21,
'course' => 'IT'
];

$json_output = json_encode($student);

header('Content-Type: text/plain');
echo $json_output;
?>
