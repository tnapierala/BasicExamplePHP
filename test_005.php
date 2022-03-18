<?php $t = "String Functions"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>
    </head>
    <body>
        <h1> Lesson5 </h1> <br><br>

        <?php
            $first = "The quick brown fox";
            $second = " jumped over the lazy dog.";

            $third = $first;
            $third .= $second;
            echo $third;

            echo "<br /><br />";

           echo "Lowercase: " . strtolower($third) . "<br />";
           echo "Uppercase: " . strtoupper($third) . "<br />";
           echo "Uppercase first: " . ucfirst($third) . "<br />";
           echo "Uppercase words: " . ucwords($third) . "<br />";
           echo "Lenght: " . strlen($third) . "<br />";
           echo "Trim: " . trim("B C D ") . "E" . "<br />";
           echo "Find: " . strstr($third, "brown") . "<br />";
           echo "Replace: " . str_replace("quick", "super-fast", $third) . "<br />";
           echo "Repeat: " . str_repeat($third,2) . "<br />";
           echo "Make substring: " . substr($third,5,10) . "<br />";
           echo "Find position: " . strpos($third, "brown") . "<br />";
           echo "Find character: " . strchr($third, "z") . "<br />";

        ?>
    </body>
</html>