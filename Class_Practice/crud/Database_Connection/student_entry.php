<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>New students</h3>
    <form action="" method="post">
        <label for="">Full-Name : </label><br>
        <input type="text" name="name" id="" placeholder="Enter Your Full-Name"><br><br>

        <label for="">Email :</label><br>
        <input type="text" name="email" id=""><br>
        <br>
        <label for="">Contact :</label><br>
        <input type="text" name="cont" id="" placeholder="name@email.com"><br><br>
<!-- 
        <label for="">Notes : </label><br>
        <input type="text" name="notes" id="" placeholder="Enter notes"><br><br> -->

        <input type="submit" name="click" id="" value="SUBMIT">

    </form>
    

    

    <?php 
    if(isset($_REQUEST["click"])){
        extract($_REQUEST);
        include_once ("db_config.php");

        $sql = "INSERT INTO students VALUES (NULL, '$name', '$email', '$cont')";

        $conn->query($sql);

        if($conn->affected_rows){
            echo "Successfully Submited";
        }
        $conn->close();
    }

    ?>

    <a href="index.php">Student List</a>
</body>
</html>