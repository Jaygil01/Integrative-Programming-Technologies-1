<?php
$json_string = '{"name": "Maria", "age": 25, "email": "maria@example.com"}';
$php_object = json_decode($json_string);
$php_array = json_decode($json_string, true);
echo "--- PHP Object Output ---\n";
echo "Object: " . $php_object->name . "\n";
echo "Email: " . $php_object->email . "\n\n";

echo "--- PHP Array Output ---\n";
echo "Array: " . $php_array['name'] . "\n";
echo "Email: " . $php_array['email'] . "\n";
?>
