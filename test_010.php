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
            $max_width = 980;

            define("MAX_WIDTH", 980);
            echo MAX_WIDTH;
            echo "<br /><br />";

            //can't change the value
            //MAX_WIDTH = MAX_WIDTH+1;
            //echo MAX_WIDTH;

            define("MAX_WIDTH", 981);
            echo MAX_WIDTH;
            echo "<br /><br />";
        ?>
    </body>
</html>