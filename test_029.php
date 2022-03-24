<?php $t = "Arrays Functions"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>
    </head>
    <body>
        <h1> Lesson29 </h1> <br>
        <?php
            echo "<h4> Example1 </h4>";
            $numbers = array(4,8,15,16,23,42);
            echo "Count: " . count($numbers) . "<br />";
            echo "Max val: " . Max($numbers) . "<br />";
            echo "Min val: " . min($numbers) . "<br /><br />";

            echo "<h4> Example2 </h4>";
        ?>
        <pre>
            <?php echo "Sort: "; sort($numbers); print_r($numbers); ?>
            <?php echo "Sort: "; rsort($numbers); print_r($numbers); ?>
        </pre><br/>
        <?php
            echo "<h4> Example3 </h4>";
            echo "Implode: " . $num_string = implode(" * ", $numbers) . "<br />";
            echo "Explode: "; print_r(explode(" * ", $num_string)); echo "<br />";


            echo "15 in array? Ans: ";
            echo in_array(15, $numbers); echo "<br />";
            // returns T or F? True

            echo "19 in array? Ans: ";
            echo in_array(19, $numbers); echo "<br />";
            // returns T or F? False

        ?>
    </body>
</html>