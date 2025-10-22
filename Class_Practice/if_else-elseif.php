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
        if($x % 2 == 0){
            echo $x . " is an Even Number <br> <br>";
        }
        else{
            echo $x . " is an Odd Number <br> <br>";
        }
        // Grade System
        $score = 30;
        if($score >= 80){
            echo "You got A+";
        }
        elseif($score >= 70){
            echo "You got A.";
        }
        elseif($score >= 60){
            echo "You got A-";
        }
        elseif($score >= 50){
            echo "You got B";
        }
        else{
            echo "Fail";
        }
        ?>
        <br>
        <br>
        <?php
        // Prime Number
        $num = 90;
        if($num == 0){
            echo "This is Zero";
        }
        elseif($num == 1){
            echo "This is not a prime number";
        }
        elseif($num == 2){
            echo "This is a prime number";
        }
        else{
            for($i = 2; $i < $num; $i++){
                if($num % $i == 0){
                    echo "This is a not prime number";
                    break;
                }
            }
            echo "This is a prime number";
        }
    ?>
</body>
</html>