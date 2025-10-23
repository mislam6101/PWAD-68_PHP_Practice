<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Largest Number</h2>
    <?php
    $arr = [2,20,6,28,10];
    $larg = $arr[0];
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i]> $larg){
            $larg = $arr[$i];
        }
        
        // echo $arr[$i];
    }
    echo $larg;
    // if($arr[0] < $arr[1]){
    //     $larg = $arr[1];
    // }
    // else{
    //     $larg = $arr[0];
    // }
    // echo $larg;
    ?>
</body>
</html>