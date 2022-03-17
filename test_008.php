<?php $t = "NULL"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $t ?> </title>
</head>

<body>

<h1> Lesson8 </h1> <br><br>

<?php
$var1 = null;
$var2 = "";
$var3 = "0";

echo "var1 null? " . is_null($var1) . "<br />";
echo "var2 null? " . is_null($var2) . "<br />";
echo "var3 null? " . is_null($var3) . "<br /><br />";

echo "var1 is set? " . isset($var1) . "<br />";
echo "var2 is set? " . isset($var2) . "<br />";
echo "var3 is set? " . isset($var3) . "<br /><br />";

//empty: "", null, 0, 0.0, "0", false, array()

echo "var1 epmty? " . empty($var1) . "<br />";
echo "var2 epmty? " . empty($var2) . "<br />";
echo "var3 epmty? " . empty($var3) . "<br />";
?>

</body>
</html>