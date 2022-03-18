<?php $t = "Comparison and Logical Operator"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>
    </head>
    <body>
        <h1> Lesson12 </h1> <br><br>

        <?php
            $a = 4;
            $b = 3;
            $c = 1;
            $d = 20;
            if (($a >= $b) || $c >= $d ) {
                echo "a is larger than b OR ";
                echo "c is larger than d";
            }
        
            echo "<br /><br />";
        
            $e = 100;
            if (!isset($e)) {
                $e = 200;
            }
            echo $e;
        
            echo "<br /><br />";
        
            //don't reject 0 or 0.0
            $quantity = "";
            if(empty($quantity) && !is_numeric($quantity)) {
                echo "You must enter a quantity.";
            }
        
        ?>
    </body>
</html>