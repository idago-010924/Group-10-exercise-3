<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 10</title>
</head>
<body>

<?php
    echo file_get_contents("text.txt");
    echo "<br>";
    echo file_put_contents("text.txt","Idago, Alvarez, Valencia, Raygon");
    echo "<br>";
    echo file_exists("text.txt");
    echo "<br>";
    print_r(file("text.txt",));
?>

</body>
</html>