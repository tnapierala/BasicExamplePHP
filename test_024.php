<?php $t = "Function:ReturnValues"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>
    </head>
    <body>
    <h1> Lesson24 </h1>

    <?php
        //function1
        echo "<h4> Example1 </h4>";

        function add( $val1, $val2 ) {
            $res1 = $val1 + $val2;
            $res2 = $val1 - $val2;
            return array($res1,$res2);
        }
        $result1 = add(3, 4);
        $result2 = add(5, $result1);

        echo $result2 . "<br /><br />";

        //Chinese Zodiac as a function
        echo "<h4> Example2 </h4>";
        function chinese_zodiac($year) {
            switch (($year - 4) % 12) {
                case 0: return 'Rat';
                case 1: return 'Ox';
                case 2: return 'Tiger';
                case 3: return 'Rabbit';
                case 4: return 'Dragon';
                case 5: return 'Snake';
                case 6: return 'Horse';
                case 7: return 'Goat';
                case 8: return 'Monkey';
                case 9: return 'Rooster';
                case 10: return 'Dog';
                case 11: return 'Pig';
            }
            return 0;
        }
        $zodiac = chinese_zodiac(2013);
        echo "2013 is the year of the $zodiac. <br /><br />";

        echo "<h4> Example3 </h4>";
        function better_hello($greeting, $target, $point) {
            echo $greeting . " " . $target . $point . "<br />";
        }
        echo better_hello("Hello", "John Doe", "!");

        ?>
    </body>
</html>