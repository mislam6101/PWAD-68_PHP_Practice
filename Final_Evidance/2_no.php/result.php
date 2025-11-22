<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Find your result..</h3>
    <form action=""> 
        <label for="">Please give you ID</label><br>
        <input type="text" name="s_id" id=""><br><br>
        <input type="submit" name="click" id="" value="SUBMIT">
    </form>
    <?php
    if(isset($_REQUEST["click"])){
        extract($_REQUEST);
        include ("class.php");

        $rsl = new std("resultsheet.txt");
        echo $rsl->result($s_id);
    }

    ?>
</body>
</html>