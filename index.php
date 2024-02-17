<?php
header("Access-Control-Allow-Origin: *");
require __DIR__ . '/class.php';

$movie1 = new Movie(0);
var_dump($movie1);
$movie2 = new Movie(1);
var_dump($movie2);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

