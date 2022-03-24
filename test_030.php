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
            $assoc = array( "first_name" => "Kevin", "last_name" => "Skoglund");

            echo $assoc["first_name"] . "<br />";
            echo $assoc["first_name"] . " " . $assoc["last_name"] . "<br /><br />";

            //echo $assoc[0] . "<br />";
            //In this way not read a value from associative arrays

            echo "<h4> Example2 </h4>";
            $numbers = array(4,8,15,16,23,42);
            $numbers = array(0=>4,1=>8,2=>15,3=>16,4=>23,5=>42);
            echo $numbers[0];

            echo "<h4> Example3 </h4>";
            $age = array();
            $age['Peter'] = "35";
            $age['Ben'] = "37";
            $age['Joe'] = "43";

            echo $age['Peter'];
        ?>
    </body>
</html>