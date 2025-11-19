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
    $sql = "SELECT * FROM students WHERE students.id = '$id'";
    $rawdata = $db->query($sql);
    $row = $rawdata->fetch_object();
    
    ?>
    <h3>Update Your Info...</h3>
    <form action="" method="post">
        <label for="">Full Name : </label><br>
        <input type="text" name="name" id="" placeholder="Enter your full name" value="<?php echo $row->student_name ?>"><br><br>

        <label for="">Email :</label>
        <br>
        <input type="text" name="email" id="" placeholder="name@gmail.com" value="<?php echo $row->email ?>"><br><br>

        <label for="">Contact :</label><br>
        <input type="text" name="cont" id="" placeholder="+8801234567891" value="<?php echo $row->contact ?>"><br><br>

        <label for="">DOB :</label><br>
        <input type="date" name="dob" id="" value="<?php echo $row->dob ?>"><br><br>

        <input type="submit" name="click" id="" value="UPDATE">
    </form>
    <?php 

    if(isset($_REQUEST["click"])){
        extract($_REQUEST);

        $sql = "UPDATE students SET student_name = '$name', email = '$email', dob = '$dob', contact = '$cont' WHERE students.id = $id";
        $db->query($sql);
        $db->close();
        
        header("Location:index.php");

    }
    
    ?>
</body>
</html>