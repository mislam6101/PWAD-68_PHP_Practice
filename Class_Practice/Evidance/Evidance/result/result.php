<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Please give me your Id for know the result.</h4>
    <form action="" method="post">
        ID : <br>
        <input type="text" name="std_id" id=""><br><br>

        <input type="submit" name="search" id="" value="SEARCH"><br>
    </form>
    <?php 
    if(isset($_REQUEST["search"])){
        $std_id = $_REQUEST["std_id"];

        include ("resultclass.php");
        $i = new std("resultsheet.txt");
        echo $i->result($std_id);
    }
    ?>
</body>
</html>