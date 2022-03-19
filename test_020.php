<?php $t = "Function:Definding2"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $t ?> </title>
</head>

<body>

<h1> Lesson20 </h1>

<?php
    //function1
    echo "<h4> Example1 </h4>";
    function say_hello() {
        echo "Hello World! <br />";
    }
    say_hello();

    //function2
    echo "<h4> Example2 </h4>";
    function say_hello_to($world) {
        echo "Hello $world! <br />";
    }
    say_hello_to("Swiat!");
    say_hello_to("Everyone!");

    //function3
    echo "<h4> Example3 </h4>";
    say_hello_loudly();
    function say_hello_loudly() {
        echo "HELLO WORLD! <br />";
    }

    //function say_hello_loudly() {
    //  echo "We can't redefine a function.";
    //}
?>

</body>
</html>