<?php $t = "Function:Scope"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>
    </head>
    <body>
        <h1> Lesson22 </h1>

        <?php
            echo "<h4> Example1 </h4>";
            $bar = "outside"; //global scope

            //function1
            function foo() {
                global $bar;
                if (isset($bar)) {
                    echo "foo: " . $bar . "<br />";
                }
                $bar = "inside"; // local scope
            }

            echo "1: " . $bar . "<br />";
            foo();
            echo "2: " . $bar . "<br />";
        ?>
    </body>
</html>