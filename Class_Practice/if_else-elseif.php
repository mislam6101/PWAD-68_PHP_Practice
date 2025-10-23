<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Even and Odd Number
    $x = 39;
    if ($x % 2 == 0) {
        echo $x . " is an Even Number <br> <br>";
    } else {
        echo $x . " is an Odd Number <br> <br>";
    }
    // Grade System
    $score = 30;
    if ($score >= 80) {
        echo "You got A+";
    } elseif ($score >= 70) {
        echo "You got A.";
    } elseif ($score >= 60) {
        echo "You got A-";
    } elseif ($score >= 50) {
        echo "You got B";
    } else {
        echo "Fail";
    }
    ?>
    <br>
    <br>

    <form action="" method="post">
        <label for="">Check Prime :</label><br>
        <input type="text" name="number" id="" placeholder="Enter a number"><br><br>
        <input type="submit" name="click" id="" value="SUBMIT"><br><br><br>
    </form>
    <?php
    if (isset($_REQUEST["click"])) {
        $n = $_REQUEST["number"];
        $a = fact($n);
        echo $a;
    }
    // Prime Number
    function fact($num)
    {
        if ($num == 0) {
            return "This is Zero";
        } elseif ($num == 1) {
            return "This is not a prime number";
        } elseif ($num == 2) {
            return "This is a prime number";
        } else {
            for ($i = 2; $i < $num; $i++) {
                if ($num % $i == 0) {
                    return "This is a not prime number";
                }
            }
            return "This is a prime number";
        }
    }

    ?>
</body>

</html>