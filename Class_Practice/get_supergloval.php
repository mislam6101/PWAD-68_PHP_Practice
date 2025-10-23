<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="get_supergloval.php?name=Aarif&id=20">Click Here</a><br><br>

    <?php
    if(isset($_REQUEST["name"])){
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
        // echo "Name :" . $_GET["name"] . "<br>";
        // echo "Id :" . $_GET["id"];
    }
    ?>
</body>
</html>