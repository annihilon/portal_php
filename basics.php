<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        this is my first php website
        <?php
            echo "hello world this is my first website using php";
        ?>
        <?php
            define('pi', 3);
            $variable1 = 6;
            $variable2 = 3;
            echo "<br>";

            $myvar = (true) and (true);
            echo var_dump($myvar);
            
            echo "<br>Data TYPES<br>";
            $var = true;
            echo var_dump($var);

            echo pi;
            
        ?>
    </div>
</body>
</html>