<?php $t = "Function:Scope"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>
    </head>
    <body>
        <h1> Lesson21 </h1>
    
        <?php
            //function1
            echo "<h4> Example1 </h4>";
            function say_hello_to1($world) {
                echo "Hello $world! <br />";
            }
        
            $name = "John";
            say_hello_to1($name);
            echo "<br />";
        
            //function2
            echo "<h4> Example2 </h4>";
            function better_hello($greeting, $target, $point) {
                echo $greeting . " " . $target . $point . "<br />";
            }
            better_hello("Hello", $name,"!");
            better_hello("Greetings", $name,"!!!");
            better_hello("Greetings", $name,null);
        
            //function say_hello_loudly() {
            //  echo "We can't redefine a function.";
            //}
        ?>
    </body>
</html>