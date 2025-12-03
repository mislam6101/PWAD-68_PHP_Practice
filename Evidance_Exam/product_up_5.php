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
    <h2>Products</h2>
    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Address</td>
            <td>Contact</td>
        </tr>
        <?php 
            $db = new mysqli('localhost', 'root', '','company');
            $sql = "SELECT * FROM prodcuts_upper_5000";
            $rawdata = $db->query($sql);
            while($row = $rawdata->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['manufacturer_id']; ?></td>
        </tr>
        <?php
        }
    ?>
    </table>
</body>
</html>