<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime/Not prime</title>
</head>
<body>
    <h2>Check prime number</h2>
    <form action="">
        <label for="">Please give me a number..</label><br>
        <input type="text" name="number" id=""><br><br>

        <input type="submit" name="click" id="" value="CHECK">
    </form>
    <?php 
    if(isset($_REQUEST["click"])){
        extract($_REQUEST);
        if($number == 1){
            echo "It's not a prime number";
        }
        if($number == 2){
            echo "It's a prime number";
        }
        if($number > 2){
            for($i = 2; $i < $number; $i++){
                if($number % $i == 0){
                    echo "It's not a prime number";
                    exit();
                }
                
            }
            echo "It's a prime number";
        }
    }
    
    ?>
</body>
</html>