<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            font: italic 1.2em "Fira Sans", serif;
            background-color: #72f8fc;
            width: 80%;
            margin: auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>php website</h1>
        <h3>your party status is here</h3>
        <?php
            $age = 13;
            if($age>18){
                echo "you can go to party";
            }
            else if($age == 13){
                echo "Congrats you are 13 years old few more years to go to the party";
            }
            else{
                echo "you cannot go to the party";
            }
            echo "<br>";
            $languages = array("c", "c++", "node", "ubuntu");
            echo count($languages);

            $a = 2;
            while ($a < 10) {
                echo "<br>";
                echo "the value of a is: ";
                echo $a;
                $a++;
            }
        ?>

    </div>
</body>
</html>