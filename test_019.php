<?php $t = "Function:Definding"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>
    </head>
    <body>
        <h1> Lesson19 </h1>

        <?php
            //function1
            echo "<h4> Example1 </h4>";
            function say_hello() {
                echo "Hello World! <br />";
            }
            say_hello();

            //function2
            echo "<h4> Example2 </h4>";
            function say_hello_two($world) {
                echo "Hello $world! <br />";
            }
            say_hello_two("Swiat!");

        ?>
    </body>
</html>