<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Prime Number with PHP</h2>
    <?php
        $num = 21;
        if($num == 0){
            echo "It's Zero";
        }
        elseif($num == 1){
            echo "It's not a Prime Number";
        }
        elseif($num == 2){
            echo "It's a Prime Number";
        }
        else{
            for($i = 2; $i < $num; $i++){
                echo $num % $i;
                if($num % $i == 0){
                    echo "Aarif";
                    break;
                }
                echo "Orny";
                // if($num % $i == 0){
                //     echo "It's not a Prime Number";
                //     break;
                // }
                // else{
                //     echo "It's a Prime Number";
                //     break;
                // }

            }
        }
    ?>
</body>
</html>