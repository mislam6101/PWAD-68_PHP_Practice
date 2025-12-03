<?php include_once ("db_config.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Write a student id what you want to delete</h4>
    <form action="">
        <input type="text" name="id" id="">
        <br><br>
        <input type="submit" name="click" id="" value="DELETE">
    </form>
    <?php 
    if(isset($_REQUEST['click'])){
        extract($_REQUEST);
        $sql = "DELETE FROM students WHERE id = '$id'";
        $rawdata = $db->query($sql);
    }
    
    ?>
</body>
</html>