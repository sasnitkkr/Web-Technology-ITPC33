<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximum Number</title>
</head>
<body>
    <form action="3-max3.php" method="get">
        Number 1 :<input type="number" name="num1" id="">
        Number 2 :<input type="number" name="num2" id="">
        Number 3 :<input type="number" name="num3" id="">
        <input type="submit">
    </form>
    <?php

        function max3($num1, $num2, $num3){
            if($num1>$num2){
                if($num1>$num3){
                    return $num1;
                }
                else{
                    return $num3;
                }
            }
            else{
                if($num2>$num3){
                    return $num2;
                }
                else{
                    return $num3;
                }
            }
        }

        //get input from user
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $num3 = $_GET["num3"];

        echo max3($num1, $num2, $num3);

    ?>
</body>
</html>