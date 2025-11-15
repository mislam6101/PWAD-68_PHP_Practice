<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Check Prime Number :</h1>
    <form action="">
        <input type="number" name="num" id="" placeholder="input a number"><br><br>
        <input type="submit" name="click" id="" value="CHECK"><br>
    </form>

    <?php 
    if(isset($_REQUEST["click"])){
        $c_num = $_REQUEST["num"];
        // if(!is_int($c_num)){
        //     echo "Please give me a Integer Number";
        // // }
        // else{
            if($c_num == 0){
                echo "It's Zero";
            }
            elseif($c_num == 1){
                echo "It's not a prime number";
            }
            elseif($c_num == 2){
                echo "It's a prime number";
            }
            else{
                for($i = 2; $i < $c_num; $i++){
                    if($c_num % $i == 0){
                        echo "It's not a prime number";
                        exit();
                    }
                }
                echo "It's a prime number";
            }
        }
    // }
    
    ?>
</body>
</html>