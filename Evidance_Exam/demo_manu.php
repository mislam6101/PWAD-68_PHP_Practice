<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td, th{
            border: 1px solid;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <form action="">
        <label for="">Manufacturer company:</label><br>
        <input type="text" name="name" id="" placeholder="Company Name"><br><br>

        <label for="">Manufacturer Address:</label><br>
        <input type="text" name="add" id="" placeholder="Company address"><br><br>

        <label for="">Manufacturer Contact:</label><br>
        <input type="text" name="cont" id="" placeholder="Company Contact"><br><br>
        <input type="submit" name="click" id="" value="SUBMIT">
    </form>
    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Address</td>
            <td>Contact</td>
            <td>Action</td>
        </tr>
        <?php 
        if(isset($_REQUEST['click'])){
            extract($_REQUEST);
            $db = new mysqli('localhost', 'root', '','company');
            $sql = "CALL manufacture_insert('$name', '$add', '$cont')";
            $db->query($sql);
            if($db->affected_rows){
                $sql = "SELECT * FROM manufacturer";
                $rawdata = $db->query($sql);
                while($row = $rawdata->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['contact_no']; ?></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>">DELETE</a></td>
        </tr>
        <?php
            }
        }
    }?>
    </table><br><br>
    <a href="product_list.php">Products</a>
</body>
</html>