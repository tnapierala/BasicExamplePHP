<?php

$t = "HASH";
 // php > 7.0
//$passwd = $_POST["pass"] ?? '';
$pass = $_POST["pass"] ?? "test123";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $t ?> </title>

        <style>
            form {
                background-color: gray;
                padding: 10px;
            }
            #lb {
                color: white;
                font-size: 36px;
                float:left;
                margin-right:15px;
                margin-left: 20%;
            }
            input[type=text], select {
                width: 50%;
                padding: 8px 8px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
                font-size: 20px;
            }
        
            input[type=submit] {
                width: 50%;
                background-color: #4CAF50;
                color: white;
                padding: 10px 10px;
                margin: 5px 0 0 25%;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
        
            input[type=submit]:hover {
                background-color: #45a049;
            }
            p {
                font-size: 20px;
                margin-left: 20px;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <label id="lb"> Password: </label>
            <label id="ip">
                <input type="text" name="pass" placeholder="Hasełko" value="test123">
            </label>
            <br /><input type="Submit" value="Wyślij">
        </form>
        <br /><br />
        <p> <b> Password </b>: <?php echo $pass; ?> </p> <br><br>
        
        <?php
        //$world = "Hello world";
        //echo strtoupper($world);
            
            function set_hashed_password1($password): string
            {
                return password_hash($password, PASSWORD_BCRYPT);
            }
        
            //$password = password_hash('test123', PASSWORD_DEFAULT);
            $password = set_hashed_password1("$pass");
                echo "<p> <b> HASHED_PASS: </b>  $password </p><br /><br />";
        
            $matches = password_verify('test123', $password);
            if ($matches != true ) {
                echo "<p> This password is incorrect </p> <br /> ";
            } else {
                echo "<p> Matches: 1. <b>This password is correct.</b> </p><br />";
            }
        
        ?>
    </body>
</html>