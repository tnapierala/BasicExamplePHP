<?php $t = "Loops: foreach"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>
    </head>
    <body>
        <h1> Lesson16 </h1>

        <?php
            $ages = array(4,8,15,16,23,42);

            foreach ($ages as $age) {
                echo "Age: $age <br>";
            }

        // foreach using assoc. array
            echo "<h4> Example2 </h4>"; //for loop

            $person = array( "first_name" => "Kevin", "last_name" => "Skoglund",
                "addres" => "123 Main Street", "city" => "Beverly Hills",
                "state" => "CA", "zip_code" => "90210" );

            foreach ($person as $attribute => $data) {
                $attr_nice = ucwords(str_replace("_", "", $attribute));
                echo " $attr_nice: $data <br />";
            }

            echo "<h4> Example3 </h4>"; //for loop

            $prices = array( "Brand New Computer" => 2000, "1 month of Lynda.com" => 25,
                "Learning PHP" => null );

            foreach ($prices as $item => $price) {
                echo " $item: ";
                if (is_int($price)) {
                    echo "$" . $price;
                } else {
                    echo "priceless";
                }
                echo "<br />";
            }
        ?>
    </body>
</html>