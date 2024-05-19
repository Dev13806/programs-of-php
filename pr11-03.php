<?php
$jsonString = '{
    "name": "John Doe",
    "age": 30,
    "city": "New York",
    "email": "johndoe@example.com"
}';

$assocArray = json_decode($jsonString, true);

echo 'JSON string:';
echo '<pre>';
print_r($jsonString);
echo '</pre>';

echo 'Associative Array:';
echo '<pre>';
print_r($assocArray);
echo '</pre>';
?>