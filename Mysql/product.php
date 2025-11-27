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
    <h3>Product List</h3>
    <table>
        <tr>
            <th>ID.</th>
            <th>Product Name</th>
            <th>Manufacturer Name</th>
            <th>Price</th>
        </tr>
        <?php 
        include_once("db_config.php");
        $sql = "SELECT * FROM product_list";
        
        $rawData = $db->query($sql);
        while ($row = $rawData->fetch_assoc()):
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['product_name'] ?></td>
            <td><?php echo $row['manufacturer_name'] ?></td>
            <td><?php echo $row['price'] ?></td>
        </tr>
        <?php endwhile;
        $db->close(); ?>
    </table>
<br>
    <a href="manufacturer_form.php">
    <button type="button" class="btn btn-danger">Manufacturer</button>
    </a>
</body>
</html>