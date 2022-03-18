<?php $t = "Loops: while"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>
    </head>
    <body>
        <h1> Lesson14 </h1>

        <?php
            echo "<h4>Example1</h4>";
            $count = 0;
            while($count <= 10) {
                if ($count == 5) {
                    echo " FIVE, ";
                } else {
                    echo $count . ", ";
                }
                $count++;
            }
            echo "<br /> Count: {$count} <br /><br />";
        
        
        // On your own exercise
            echo "<h4> Example2 </h4>";
            $count = 1;
            while($count < 20) {
                if ($count % 2 == 0) {
                    echo "{$count} is even <br />";
                } else {
                    echo "{$count} is odd <br />";
                }
                $count++;
            }
            echo "<br /> Count: {$count} <br />";
        
        ?>
    </body>
</html>