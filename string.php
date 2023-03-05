
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            font: italic 1.2em "Fira Sans", serif;
            background-color: #ebd5a4;
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
    $var = "Sagnik Roy";
    
    echo $var;
    echo "<br>";
    $len = strlen($var);
    echo "the length of the string is: ".$len;
    echo "<br>the length of the string is: ".str_word_count($var);
    // echo $len;


?> 
    </div>
</body>
</html>