<?php $t = "Strings"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>
    </head>
    <body>
        <h1> Lesson4 </h1> <br><br>

        <?php
            echo "Hello World <br />";
            echo 'Hello World <br />';

            $greeting = "Hello";
            $target = "World";
            $phrase = $greeting . " " . $target;
            echo $phrase;

            echo "<br /><br />";
            echo "$phrase Again<br />";
            echo '$phrase Again<br />';
            echo "{$phrase} Again<br />";


        ?> 
    </body>
</html>