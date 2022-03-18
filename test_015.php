<?php $t = "Loops: for"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>
    </head>
    <body>
        <h1> Lesson15 </h1>

        <?php
            echo "<h4>Example1</h4>"; // while loop

            $count = 0;
            while($count <= 10) {
                echo $count . ", ";
                $count++;
            }
        
        // On your own exercise
            echo "<h4> Example2 </h4>"; //for loop
        
            for ($count = 0; $count <= 10; $count++) {
                echo $count . ", ";
            }
        
            echo "<h4> Example3 </h4>"; //for loop
        
            for ($count = 0; $count <= 10; $count++) {
                if ($count % 2 == 0 ) {
                    echo "$count is even. <br /> ";
                } else {
                    echo "$count is odd. <br />";
                }
            }
        ?>
    </body>
</html>