<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Entry</title>
</head>
<body>
    <h3>Please fill the form :</h3>
    <form action="" method="post">
        <label for="">Patiant Name : </label><br>
        <input type="text" name="name" id="" placeholder="Enter your full name"><br><br>

        <label for="">Age :</label>
        <br>
        <input type="text" name="age" id="" placeholder="Enter your age"><br><br>

        <label for="">Email :</label><br>
        <input type="text" name="email" id="" placeholder="name@gmail.com"><br><br>

        <label for="">Contact :</label><br>
        <input type="text" name="cont" id="" placeholder="+8801234567891"><br><br>

        <input type="submit" name="click" id="" value="SUBMIT">
    </form>
    <?php 

    if(isset($_REQUEST["click"])){
        extract($_REQUEST);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Please entry a valid email";
        }
        else{
            include_once("db_config.php");
            $sql = "INSERT INTO patiants VALUES (NULL, '$name', '$age', '$email','$cont')";
            $db->query($sql);

            if($db->affected_rows){
                echo "Submitted";
            }
            $db->close();
        }

        
    }
    
    
    
    ?>
<hr>
<button><a href="index.php">Patiant List</a></button>

</body>
</html>