<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd</title>
</head>
<body>
    <form action="2-evenodd.php" method="GET">
        Enter a Number : <input type="number" name="inputNo" value = 0><br>
        <input type="submit" >
    </form>    
         <?php
            function isOdd($num)
            {
                return (($num&1) == 1);
            }
            $inputNumber = $_GET["inputNo"];
            if(isOdd($inputNumber))
            {
                echo "$inputNumber is an odd Number";
            } 
            else
            {
                echo "$inputNumber is an even Number";
            }
        ?>
</body>
</html>