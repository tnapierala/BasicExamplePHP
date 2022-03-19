<?php $t = "Function:DefaultArgument"; ?>

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

    function paint( $room="office", $color="red") {
        return "The color of the $room is $color. <br />";
    }

    echo paint();
    echo paint("bedroom", "blue");
    echo paint("bedroom", null);
    echo paint("bedroom", );
    echo paint("blue");
?>

</body>
</html>