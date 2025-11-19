<?php 
$id = $_REQUEST["id"];
include_once("db_config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $sql = "SELECT * FROM patiants WHERE patiants.id = '$id'";
    $rawdata = $db->query($sql);
    $row = $rawdata->fetch_object();

    ?>
    <h3>Patiant Information Update...</h3>
    <form action="" method="post">
        <label for="">Patiant Name : </label><br>
        <input type="text" name="name" id="" placeholder="Enter your full name" value="<?php echo $row->patiant_name ?>"><br><br>

        <label for="">Age :</label>
        <br>
        <input type="text" name="age" id="" placeholder="Enter your age" value="<?php echo $row->age ?>"><br><br>

        <label for="">Email :</label><br>
        <input type="text" name="email" id="" placeholder="name@gmail.com" value="<?php echo $row->email ?>"><br><br>

        <label for="">Contact :</label><br>
        <input type="text" name="cont" id="" placeholder="+8801234567891" value="<?php echo $row->contact ?>"><br><br>

        <input type="submit" name="click" id="" value="UPDATE">
    </form>
    <?php 
        if(isset($_REQUEST["click"])){
            extract($_REQUEST);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo "Please enter a valid email";
            }
            else{
                $sql = "UPDATE patiants SET patiant_name = '$name', age = '$age', email = '$email' , contact = '$cont' WHERE patiants.id = '$id'";
                $db->query($sql);
                $db->close();
                header("Location:index.php");
            }
        }
    
    ?>
    
</body>
</html>