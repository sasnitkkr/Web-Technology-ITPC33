<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Count</title>
</head>
<body>
    <h1>Visits : </h1>
    <?php
        // read original count
        // update new count
        // erase previous count
        // save new count
        $visitFile = fopen("visits.txt", 'r');
        $count = fread($visitFile, filesize("visits.txt"));
        fclose($visitFile);

        $count++;

        $visitFile = fopen("visits.txt", 'w');
        fwrite($visitFile, $count);
        fclose($visitFile);

        echo $count;
    ?>
</body>
</html>