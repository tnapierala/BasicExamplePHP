<?php $t = "Continue"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>
    </head>
    <body>
        <h1> Lesson17 </h1>

        <?php
            echo "<h4> Example1 </h4>"; //for loop

            for ($count = 0; $count <= 10; $count++) {
                if ($count % 2 == 0 ) { continue; }
                echo $count . ", ";
            }

            // what's wrong with this? // Is not display a number 5, is skip
            echo "<h4> Example2 </h4>"; //while loop

            $count = 0;
            while($count <= 10) {
                if ($count == 5) {
                    $count++;
                    continue;
                }
                echo $count . ", ";
                $count++;
            }

            //loop inside a loop with continue
            echo "<h4> Example3 </h4>"; //continue loop

            for ($i = 0; $i <= 5; $i++) {
                if ($i % 2 == 0 ) { continue(1); }
                for ($k = 0; $k <= 10; $k++) {
                    if ($k == 3) { continue(2); }
                    echo $i . "-" . $k . "<br />";
                }
            }
        ?>

    </body>
</html>