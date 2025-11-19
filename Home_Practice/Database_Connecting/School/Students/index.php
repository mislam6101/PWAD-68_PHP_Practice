<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data List</title>
    <style>
        table, tr, td, th{
            border : 1px solid;
            border-collapse : collapse;
        }
    </style>
</head>
<body>
    <?php 
    include_once ("db_config.php");
    $sql = "SELECT * FROM students";
    $result = $db->query($sql);
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>DOB</th>
            <th>E-mail</th>
            <th>Contact</th>
            <th colspan="2">Action</th>
        </tr>
        <tr>
            <?php while($row = $result->fetch_object()): ?>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->student_name ?></td>
                <td><?php echo $row->dob ?></td>
                <td><?php echo $row->email ?></td>
                <td><?php echo $row->contact ?></td>
                <td><a href="data_edit.php?id=<?php echo $row->id ?>">Edit</a></td>
                <td><a onclick="return confirm('Confirm Delete')" href="data_delete.php?id=<?php echo $row->id ?>">Delete</a></td>
        </tr>
        <?php endwhile;
        $db->close();
        ?>
    </table>
    <hr>
    <button><a href="data_entry.php">Student Entry</a></button>
</body>
</html>