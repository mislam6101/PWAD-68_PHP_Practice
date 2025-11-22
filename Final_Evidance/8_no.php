<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Find the Factorial</h2>
    <form action="">
        <label for="">Please give me a number..</label><br>
        <input type="text" name="number" id=""><br><br>

        <input type="submit" name="click" id="" value="CHECK">
    </form>
    <?php 
    if(isset($_REQUEST["click"])){
        extract($_REQUEST);
        $fact = 1;
        for($i=1; $i <= $number; $i++){
            $fact *= $i;
        }
        echo "The factorial of $number is ! = $fact";
    }
    
    ?>
</body>
</html>