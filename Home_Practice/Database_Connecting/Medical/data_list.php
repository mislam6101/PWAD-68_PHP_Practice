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
    $sql = "SELECT * FROM patiants";
    $result = $db->query($sql);

    ?>

    <table>
        <caption>Patiant List</caption>
        <tr>
            <th>ID</th>
            <th>Patiant Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Contact</th>
        </tr>
        <?php while($row = $result->fetch_object()): ?>
            <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->patiant_name ?></td>
                <td><?php echo $row->age ?></td>
                <td><?php echo $row->email ?></td>
                <td><?php echo $row->contact ?></td>
            </tr>
        <?php endwhile;
        $db->close();
        ?>
    </table>
    <hr>
    <button><a href="data_entry.php">Patiant Entry</a></button>
</body>
</html>