<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>
<?php
    // Output strings, numbers, html, etc
    echo 123, 'Hello', 10.5;

    echo "<br>";
    // Works like echo (1 single argument)
    print 'Hello World';

    echo "<br>";
    // Print single values and arrays
    print_r([1,2,3]);

    echo "<br>";
    // Returns more info like data type and length
    var_dump('Hello');

    echo "<br>";
    // Similar to var_dump(). Outputs a string representation of a variable
    var_export('Hello');

    echo "<br>";
?>
</body>
</html>