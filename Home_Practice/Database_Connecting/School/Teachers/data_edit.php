<?php 
$id = $_REQUEST["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Upgrade Your Information..</h3>
    <?php
    include_once "db_config.php";
    $sql = "SELECT * FROM teacher WHERE teacher.id = '$id'";
    $rawdata = $db->query($sql);
    $row = $rawdata->fetch_object();
    ?>
    <form action="" method="post">
        <label for="">Teacher's Name : </label><br>
        <input type="text" name="name" id="" value="<?php echo $row->teacher_name ?>"><br><br>

        <label for="">Email : </label><br>
        <input type="text" name="email" id="" value="<?php echo $row->email ?>"><br><br>

        <label for="">Contact : </label><br>
        <input type="text" name="cont" id="" value="<?php echo $row->contact ?>"><br><br>

        <label for="">Address : </label><br>
        <textarea name="address" id="" value="<?php echo $row->address ?>"></textarea><br><br>

        <label for="">Zip Code : </label><br>
        <input type="number" name="zip" id="" value="<?php echo $row->zip_code ?>"><br><br>

        <input type="submit" name="click" id="" value="UPDATE">
    </form>

    <?php 
    if(isset($_REQUEST["click"])){
        extract($_REQUEST);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    ?>
            <script>alert("Please enter a valid email")</script>
    <?php
        }
        else{
            $sql_2 = "UPDATE teacher SET teacher_name = '$name', email = '$email', contact = '$cont', `address` = '$address', zip_code = '$zip' WHERE teacher.id = '$id'";
            $db->query($sql_2);
            $db->close();

            header("Location:index.php");
        }
    }
    
    ?>

</body>
</html>