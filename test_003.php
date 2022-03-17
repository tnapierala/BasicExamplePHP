<?php $t = "Type Juggling and Type Casting"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $t ?> </title>
</head>

<body>

<h1> Lesson3 </h1> <br><br>

<?php
    echo "Type Juggling <br /><br />";
    $count = "2 cats";
    echo "Type: " . gettype($count) . "<br />";

    $count += 3;
    echo "Type: " . gettype($count) . "<br /><br />";

    $cats = "I have " . $count . " cats. ";
    echo "Cats: " . gettype($cats) . "<br /><br />";

    echo "Type Casting <br /><br />";
    settype($count, "integer");
    echo "count: " . gettype($count) . "<br /><br />";

    $count2 = (string) $count;
    echo "count: " . gettype($count) . "<br />";
    echo "count2: " . gettype($count2) . "<br /><br />";

    $test1 = 3;
    $test2 = 3;

    settype($test1, "string");
    $test2 = (string)$test2;
    echo "test1: " . gettype($test1) . "<br />";
    echo "test2: " . gettype($test2) . "<br />";
?>
</body>
</html>