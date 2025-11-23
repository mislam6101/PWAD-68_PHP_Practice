<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, tr, td{
            border:1px solid;
            border-collapse:collapse;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Result</th>
        </tr>
        <?php 
                $std = ["Aarif" => 30,
                "Rafi" => 50,
                "Naziur" => 70,
                "Alif" =>68,
                "Engineer" => 20];
                $highest = 0;
                foreach($std as $key => $value){
            ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
        </tr>
        <?php 
        if($value > $highest){
            $highest = $value;
        }
        } 
        echo "<h2>Highest Score</h2> <br>";
        foreach($std as $key => $value){
                if($highest == $value){
                    echo "Name : " . $key . " Score : " . $value . "<br><br>";
                }
            }
            ?>
    </table>
</body>
</html>