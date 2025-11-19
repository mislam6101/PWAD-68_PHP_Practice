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
    <h3>Update Your Data</h3>
    <?php 
        $sql = "SELECT * FROM students WHERE students.ID ='$id'";
        $raw = $conn->query($sql);
        $row = $raw->fetch_object();

    ?>
    <form action="" method="post">
        <label for="">Full-Name : </label><br>
        <input type="text" name="name" id="" placeholder="Enter Your Full-Name"><br><br>

        <label for="">Email :</label><br>
        <input type="text" name="email" id=""  value="<?php echo $row->Email; ?>"><br>
        <br>
        <label for="">Contact :</label><br>
        <input type="text" name="cont" id="" placeholder="name@email.com"  value="<?php echo $row->Contact; ?>"><br><br>
<!-- 
        <label for="">Notes : </label><br>
        <input type="text" name="notes" id="" placeholder="Enter notes"><br><br> -->

        <input type="hidden" name="id" value="<?php echo $id ?>">

        <input type="submit" name="click" id="" value="UPDATE">

    </form>
    <?php 
    
    if(isset($_REQUEST["click"])){
        extract($_REQUEST);
        $sql1 = "UPDATE students SET Email='$email', Contact='$cont' WHERE students.ID = '$id'";
        $conn->query($sql1);
        header("Location:index.php");
    }


    
    ?>
    
    
</body>
</html>

