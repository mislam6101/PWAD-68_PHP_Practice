<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Factorial :</label><br>
        <input type="text" name="number" id="" placeholder="Enter a number"><br><br>
        <input type="submit" name="click" id="" value="SUBMIT"><br><br><br>
    </form>

    <?php
    if (isset($_REQUEST["click"])) {
        $mynum = $_REQUEST["number"];
        $fact = 1;
        for ($i = 1; $i <= $mynum; $i++) {
            $fact *= $i;
        }
        echo "The Factorial of $mynum! =" . $fact;
    }

    ?>
</body>

</html>