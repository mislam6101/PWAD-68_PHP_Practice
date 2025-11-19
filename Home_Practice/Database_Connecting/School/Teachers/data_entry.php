<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Entry</title>
</head>
<body>
    <h2>Teacher's Entry Form</h2>
    <form action="" method="post">
        <label for="">Teacher's Name : </label><br>
        <input type="text" name="name" id="" placeholder="Enter your name"><br><br>

        <label for="">Email : </label><br>
        <input type="text" name="email" id="" placeholder="name@email.com"><br><br>

        <label for="">Contact : </label><br>
        <input type="text" name="cont" id="" placeholder="Enter your number"><br><br>

        <label for="">Address : </label><br>
        <textarea name="address" id="" placeholder="Enter your address"></textarea><br><br>

        <label for="">Zip Code : </label><br>
        <input type="number" name="zip" id="" placeholder="Area Zip Code"><br><br>

        <input type="submit" name="click" id="" value="SUBMIT">
    </form>
    <?php
    if(isset($_REQUEST["click"])){
        extract($_REQUEST);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            ?> <script>alert("Please enter a valid email")</script>
        <?php
        }
        else{
            include_once("db_config.php");
            $sql = "INSERT INTO teacher VALUES(NULL, '$name', '$email', '$cont', '$address', '$zip')";
            $db->query($sql);
            $db->close();
        }
        
    }

    ?>
    

    <br><br>
    <button type="button" class="btn btn-default"><a href="index.php">Teacher List</a></button>
    
</body>
</html>