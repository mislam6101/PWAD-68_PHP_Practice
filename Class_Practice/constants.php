<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // using const:
    const car_name = "Ferarri";
    echo car_name . "<br>";

    // using define:
    define("FLOWER","Rododendron");

    function flower() {
        define("FRUIT","Apple");
        echo FRUIT;
    }
    flower();
    ?>
</body>
</html>