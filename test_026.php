<?php $t = "Function:MultipleRet2"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>
    </head>
    <body>
        <h1> Lesson26 </h1>
    
        <?php
            echo "<h4> Example1 </h4>";
            function add_sub2($val1, $val2) {
                $add2 = $val1 + $val2;
                $sub2 = $val1 - $val2;
                return array($add2, $sub2);
            }
            $result_arr1 = add_sub2(10, 5);
            echo "Add: " . $result_arr1[0] . "<br />";
            echo "Sub: " . $result_arr1[1] . "<br /><br />";
        
            list($add_result, $sub_result) = add_sub2(20, 7);
            echo "Add: " . $add_result . "<br />";
            echo "Sub: " . $sub_result . "<br /><br />";
        ?>
    </body>
</html>