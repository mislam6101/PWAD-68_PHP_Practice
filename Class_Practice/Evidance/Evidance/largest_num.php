<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Largest Number</h1>
    <form action="">
        Numbers: <br>
        <input type="text" name="num" id=""><br><br>
        <!-- Second Number: <br>
        <input type="text" name="" id=""><br><br>
        Third Number: <br>
        <input type="text" name="" id=""><br><br> -->

        <input type="submit" name="click" id="" value="SUBMIT"><br>
    </form>
    <?php 
    
    if(isset($_REQUEST["click"])){
        $num = $_REQUEST["num"];
        $num_arr = explode(",", "$num");
        $larg = $num_arr[0];
        $min = $num_arr[0];
        
        foreach($num_arr as $n){
            if($n > $larg){
                $larg = $n;
            }
            if($n < $min){
                $min = $n;
            }
        }
        echo "The Largest Number is: " . $larg . "<br>";
        echo "The Minimum Number is: " . $min;
    }
    
    ?>
</body>
</html>