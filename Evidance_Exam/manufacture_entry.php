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
    <?php 
        if(isset($_REQUEST['click'])){
            extract($_REQUEST);
            $db = new mysqli('localhost', 'root', '','company');
            $sql = "CALL manufacture_insert('$name', '$add', '$cont')";
            $db->query($sql);
            if($db->affected_rows){
                echo "Manufacturer Company Inserted";
            }
            else{
                echo "Not Inserted";
            }
        }
    ?>
</body>
</html>