<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h3>Give me Your Result:</h3>
        <input type="text" name="result" id="">
        <br><br>
        <input type="submit" name="click" id="" value="SUBMIT">
    </form>
    <?php 

    if(isset($_REQUEST["click"])){
        $result = $_REQUEST["result"];
        switch ($result){ 
            case "A":
                echo "Execellent";
                break;

            case "B":
                echo "Good";
                break;
            
            case "F":
                echo "Fail";
        }
    }

    ?>
</body>
</html>