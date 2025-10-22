<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //$_GET $_POST $_REQUEST

    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";
    ?>



    <h3>Registration Form</h3>
    <form action="" method="post">
        <label for="">Name:</label><br>
        <input type="text" name="name" id="" placeholder="Enter yor name"><br><br>

        <label for="">Email:</label><br>
        <input type="text" name="email" id="" placeholder="name@email.com"><br><br>

        <label for="">Password:</label><br>
        <input type="password" name="password" id="" placeholder="Between 8 to 32 Char"><br><br>

        <input type="submit" name="submit" value="SUBMIT"><br><br><br><br>
    </form>

    <?php

    if (isset($_REQUEST["submit"])) {
        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];
        $pass = $_REQUEST["password"];

        echo "<label>Name: </label>" . $name . "<br>";
        echo "<label>Email: </label>" . $email;
    }

    ?>
</body>

</html>