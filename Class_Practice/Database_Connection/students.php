<?php include_once("db_config.php") ?>

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
        table{
            margin: 0 auto;
        }
    </style>
</head>
<body>

<?php 

    $sql = "SELECT * FROM students order by ID desc";
    $result = $conn->query($sql);

    // $row = $result->fetch_assoc();
    

    // echo $row["Student Name"];
    // echo $row["Email"];

    // $conn->close();

   


?>
    <table>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Contact</th>
        </tr>
        <?php while($row1 = $result ->fetch_object()){ ?>
        <tr>
            <td><?php echo $row1->ID; ?></td>
            <td><?php echo $row1->Email; ?></td>
            <td><?php echo $row1->Contact; ?></td>
        </tr>
        <?php }
        $conn->close(); ?>
    </table>

    <a href="student_entry.php">Student Entry</a>
</body>
</html>