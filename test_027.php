<?php $t = "Pointers"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>
    </head>
    <body>
        <h1> Lesson28 </h1> <br><br>

        <?php
            $ages = array(4,8,15,16,23,42);

            //current: current pointer value
            echo "1: " . current($ages) . "<br />";

            //next: move the pointer forward
            //smilar to using 'continue' inside a loop

            next($ages);
            echo "2. " . current($ages) . "<br />";

            next($ages);
            next($ages);
            echo "3. " . current($ages) . "<br />";

            //prev: move the pointer backward
            prev($ages);
            echo "4. " . current($ages) . "<br />";

            //reset the pointer to the first elem
            reset($ages);
            echo "5. " . current($ages) . "<br />";

            //end: move the pointer to the last elem
            end($ages);
            echo "6. " . current($ages) . "<br />";

            next($ages);
            echo "7. " . current($ages) . "<br />";

            echo "<br /><br />";

            reset($ages);
            //while loop that moves the array pointer
            //smilar to foreach

            while ($age = current($ages)) {
                echo $age . ", ";
                next ($ages);
            }
        ?>
    </body>
</html>