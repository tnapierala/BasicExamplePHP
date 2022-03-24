<?php $t = "Arrays"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>
    </head>
    <body>
        <h1> Lesson28 </h1> <br>
        <?php
            echo "<h4> Example1 </h4>";
            $numbers = array(4,8,15,16,23,42);
            echo $numbers[0] . "<br /><br />";

            echo "<h4> Example2 </h4>";
            $mixed = array(6, "fox", "dog", array("x", "y", "z"));
            echo $mixed[2] . "<br /><br />";
            //echo $mixed[3] . "<br />";
            //echo $mixed . "<br />";

            echo $mixed[3][1] . "<br /><br />";

            $mixed[2] = "cat";
            $mixed[4] = "mouse";
            $mixed[] = "horse";

            echo print_r($mixed);
            echo "<br />";
            // PHP 5.4 added the short array syntax
            $array = [1,2,3];
        ?>
    </body>
</html>