<?php $t = "Booleans"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>
    </head>
    <body>
        <h1> Lesson9 </h1> <br><br>

        <?php
        $result1 = true;
        $result2 = false;

        echo "Result1: " . $result1 . "<br />";
        echo "Result2: " . $result2 . "<br /><br />";

        echo "Result2 is boolean? " . is_bool($result2) . "<br /><br />";

        $number = 3.14;
        if(is_float($number)) {
            echo "It is a float. <br /><br />";
        }
        ?>
    </body>
</html>