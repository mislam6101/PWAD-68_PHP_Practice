<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H3>Factorial in PHP</H3>
    <?php
        $num = 4;
        $fact = 1;
        for($i = 1; $i <= $num; $i++){
            $fact *= $i;
        }
        echo $fact;
    ?>
</body>
</html>