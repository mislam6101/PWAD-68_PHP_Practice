<?php include "db_config.php" ?>
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
    <h4>student list</h4>
    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Module Name</td>
            <td>Mark</td>
        </tr>
        <?php 
        $sql = 'SELECT * FROM student_list';
        $rawdata = $db->query($sql);
        while($row = $rawdata->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['module_name']; ?></td>
            <td><?php echo $row['total_mark']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>