<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers</title>
    <style>
        table, td, tr, th{
            border : 1px solid;
            border-collapse : collapse;
            text-align : center;
        }
        table{
            width: 100%;
        }
        h3{
            text-align:center;
        }
        button{
            margin-left: 580px;
        }
    </style>
</head>
<body>
    <h3>Teachers</h3>
    <?php 
    
    include_once("db_config.php");
    $sql = "SELECT * FROM teacher";
    $rawdata = $db->query($sql);
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Teacher's Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Zip Code</th>
            <th colspan="2">Action</th>
        </tr>
        <?php while($row = $rawdata->fetch_object()): ?>
        <tr>
            <td><?php echo $row->id ?></td>
            <td><?php echo $row->teacher_name ?></td>
            <td><?php echo $row->email ?></td>
            <td><?php echo $row->contact ?></td>
            <td><?php echo $row->address ?></td>
            <td><?php echo $row->zip_code ?></td>
            <td><a href="data_edit.php?id=<?php echo $row->id ?>">Edit</a></td>
            <td><a href="data_delete.php?id=<?php echo $row->id ?>">Delete</a></td>
        </tr>
        <?php 
        endwhile;
        $db->close();
        ?>
        </table><br><br>
        <button type="button" class="btn btn-info"><a href="data_entry.php">Teacher Entry</a></button>
        
</body>
</html>