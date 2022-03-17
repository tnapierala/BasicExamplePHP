<?php $t = "FloatPointNumbers"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $t ?> </title>
</head>

<body>

<h1> Lesson7 </h1> <br><br>

<?php
    $float = 3.14;
    echo $float . "<br />";
    echo $float + 7 . "<br />";
    echo 4/3 . "<br />";
    //echo 4/0
    echo "<br /><br />";

    echo "Round: " . round($float, 1) . "<br />";
    echo "Ceiling: " . ceil($float) . "<br />";
    echo "Floor: " . floor($float) . "<br /><br /><br />";

    $int = 3;
    echo "Is {$int} integer? " . is_int($int) . "<br />";
    echo "Is {$float} integer? " . is_int($float) . "<br /><br />";
    echo "Is {$int} float? " . is_float($int) . "<br />";
    echo "Is {$float} float? " . is_float($float) . "<br /><br />";
    echo "Is {$int} numeric? " . is_numeric($int) . "<br />";
    echo "Is {$int} numeric? " . is_numeric($float) . "<br /><br />";
?>
</body>
</html>