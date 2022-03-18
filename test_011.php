<?php $t = "Logical"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $t ?> </title>
</head>

<body>

<h1> Lesson11 </h1> <br><br>

<?php
    $a = 3;
    $b = 4;

    if ($a > $b) {
        echo "a is larger than b";
    } elseif ($a < $b) {
        echo "a is smaller than b";
    } else {
        echo "a is equal to b";
    }

    echo "<br />";

    // Only welcome new users
    $new_user = true;
    if ($new_user) {
        echo "<h1> Welcome! </h1>";
        echo "<p> We are glad you decided to join us. </p>";
    }

    echo "<br />";

    // don't divide by zero
    $num = 20;
    $den = 0;
    $result = 0;
    if ($den > 0) {
        $result = $num / $den;
    }
    echo "Result: {$result} ";
?>

</body>
</html>