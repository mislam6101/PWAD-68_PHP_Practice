<?php include_once("db_config.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="text" name="name" id="" placeholder="Your Name"><br><br>
        <input type="text" name="add" id="" placeholder="Your address"><br><br>
        <input type="text" name="cont" id="" placeholder="Your Contact"><br><br>
        <input type="submit" name="click" id="" value="SUBMIT">
    </form>
    <?php 
        if(isset($_REQUEST['click'])){
            extract($_REQUEST);
            $sql = "CALL student_insert('$name', '$add', '$cont')";
            $db->query($sql);
            if($db->affected_rows){
                echo "Student Submitted";
            }
            else{
                echo "Student Not entry";
            }
        }
    ?>
</body>
</html>