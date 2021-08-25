<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
<!-- Never bend your head. Always hold it high. Look the world straight in the eye. -->
    <h1>Using Different String Functions</h1>
    <form action="4-string.php" method="get">
        <input type="text" name="inputStr" value="">
        <input type="submit">
    </form>
    <?php
        $inputString = $_GET["inputStr"];
        echo "You entered : $inputString <br>";
        $stringLength = strlen($inputString);
        $stringWordCount = str_word_count($inputString);
        $stringReverse = strrev($inputString);
        $stringPosition = strpos($inputString, "world");

        echo "string length = $stringLength <br>";
        echo "word count = $stringWordCount <br>";
        echo "Reverse String = $stringReverse <br>";
        echo "world's Postion in string = $stringPosition <br>" ;
    ?>
</body>
</html>