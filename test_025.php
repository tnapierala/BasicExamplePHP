<?php $t = "Function:MultipleRet"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>
    </head>
    <body>
        <h1> Lesson25 </h1>

        <?php
            //function1
            echo "<h4> Example1 </h4>";
            $val1 = 7; $val2 = 2;
            function add_sub($val1,$val2) {
                $res1 = $val1 + $val2;
                $res2 = $val1 - $val2;
                return array($res1,$res2);
            }
            $result_arr = add_sub($val1,$val2);
            echo $result_arr[0] . "<br />";
            echo $result_arr[1] . "<br /><br />";


            echo "<h4> Example2 </h4>";
            function add_sub2($val1, $val2) {
                $add2 = $val1 + $val2;
                $sub2 = $val1 - $val2;
                return array($add2, $sub2);
            }
            $result_arr1 = add_sub2(10, 5);
            echo "Add: " . $result_arr1[0] . "<br />";
            echo "Sub: " . $result_arr1[1] . "<br /><br />";
        ?>
    </body>
</html>