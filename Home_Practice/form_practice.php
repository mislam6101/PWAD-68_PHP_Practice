<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Full Name :</label><br>
        <input type="text" name="name" id="" placeholder="Enter Your Name"><br><br>

        <label for="">Age :</label><br>
        <input type="number" name="age" id="" placeholder="Enter Your Age"><br><br>

        <label for="">Gender :</label><br>
        <input type="radio" name="gender" id="" value="Male"> Male <br>
        <input type="radio" name="gender" id="" value="Female"> Female <br><br>

        <label for="">District :</label><br>
        <select name="district" id="">
            <option value="">Select One</option><br>
            <option>Dhaka</option><br>
            <option>Nilphamari</option><br>
            <option>Noakhali</option><br>
        </select><br><br>

        <label for="">Address</label><br>
        <textarea name="address" id="" placeholder="Enter Your Address"></textarea><br><br>

        <input type="submit" name="click" id="" value="SUBMIT">
    </form>
<br><br><br>
    <?php
        if(isset($_REQUEST["click"])){
            $name = $_REQUEST["name"];
            $age = $_REQUEST["age"];
            $gender = $_REQUEST["gender"];
            $district = $_REQUEST["district"];
            $address = $_REQUEST["address"];

            echo "Your name is " . $name . ". ";
            echo "You are " . $age . " years old. ";
            echo "OH! You Are " . $gender . ". ";
            echo "I see you are from " . $district . ". ";
            echo "OWW! Now you are in " . $address . ".";
        }
    ?>
</body>
</html>