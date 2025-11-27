<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #alif{
            float: left;
            width: 45%;
            margin-left: 10px;
        }
        iframe{
            float: left;
            width: 40%;
            height: 500px;
        }
    </style>
</head>

<body>
    <div id="alif">
        <h2>Manufacturer Entry</h2>
    <form action="" method="post">
        <label for="">Name:</label><br>
        <input type="text" name="name" id=""><br><br>

        <label>Address:</label><br>
        <input type="text" name="address" id=""><br><br>

        <label for="">Contact:</label><br>
        <input type="text" name="cont" id=""><br><br>

        <input type="submit" name="click" id="" value="SUBMIT">
    </form>
    <br>

    <?php
    if (isset($_REQUEST['click'])) {
        extract($_REQUEST);
        include_once("db_config.php");

        // $sql = "INSERT INTO manufacturer VALUES(NULL, '$name', '$address', '$cont')";
        // $db->query($sql);

        //Store Procedural :
        $sql = "CALL manufacturer_insert('$name', '$address', '$cont')";
        $db->query($sql);
    }
    ?>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        include_once("db_config.php");
        $sql = "SELECT * FROM manufacturer";
        $rawdata = $db->query($sql);
        while ($row = $rawdata->fetch_object()):
        ?>
            <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->name ?></td>
                <td><?php echo $row->address ?></td>
                <td><?php echo $row->contact_no ?></td>
                <td><a href="delete.php?id=<?php echo $row->id ?>">
                        <button type="button" class="btn btn-danger">DELETE</button>
                    </a></td>
            </tr>
        <?php endwhile; ?>
    </table><br>
    <a href="product.php">
    <button type="button" class="btn btn-success">Product List</button>
    </a>
    </div>

    <iframe src="product.php" frameborder="0"></iframe>
</body>

</html>