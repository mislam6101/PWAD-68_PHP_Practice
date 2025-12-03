<?php include_once ("db_config.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>User Login</h2>
    <form action="" method="post">
        <label for="">Email:</label><br>
        <input type="text" name="email" id="" placeholder="name@email.com"><br><br>

        <label for="">Password: </label><br>
        <input type="text" name="pass" id="" placeholder="enter you password"><br><br>

        <input type="submit" name="click" id="" value="Login">
    </form>
    <?php 
    if(isset($_REQUEST["click"])){
        extract($_REQUEST);
        $pass = md5($pass);
        $sql = "SELECT * FROM user WHERE email = '$email' AND `password` = '$pass'";
        $record = $db->query($sql);
        $row = $record->fetch_assoc();
        if($record->num_rows > 0){
            echo "Valid User";
        }
        else{
            echo "Invalid User";
        }
        
    }

    ?>
</body>
</html>