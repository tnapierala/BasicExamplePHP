<?php $t = "Brake"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $t ?> </title>
</head>

<body>

<h1> Lesson18 </h1>

<?php
    echo "<h4> Example1 </h4>"; //for loop

    for ($count = 0; $count <= 10; $count++) {
        if ($count % 2 == 0 ) { break; }
        echo $count . ", ";
    }

    //loop inside a loop with continue
    echo "<h4> Example2 </h4>"; //continue loop

    for ($i = 0; $i <= 5; $i++) {
        if ($i % 2 == 0 ) { continue(1); }
        for ($k = 0; $k <= 10; $k++) {
            if ($k == 3) { break(2); }
            echo $i . "-" . $k . "<br />";
        }
    }
?>

</body>
</html>