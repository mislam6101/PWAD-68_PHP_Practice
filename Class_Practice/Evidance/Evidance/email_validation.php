<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Registrationn System</h1>
    <form action="" method="post">
        <label for="">Username : </label><br>
        <input type="text" name="name" id="" placeholder="create a username"><br><br>

        <label for="">Email : </label><br>
        <input type="text" name="email" id="" placeholder="name@gmail.com"><br><br>

        <label for="">Password : </label><br>
        <input type="password" name="pass" id="" placeholder="create a password"><br><br>

        <input type="submit" name="click" id="" value="SUBMIT">
    </form>

    <?php 
    
    if(isset($_REQUEST["click"])){
        $uname = $_REQUEST["name"];
        $email = $_REQUEST["email"];
        if(strlen($uname) < 4 || strlen($uname) > 9){
            echo "Username must be between 4 to 8 charecter <br>";
        }
        else{
            echo "Username : " . $uname . "<br>";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Please entry a valid Email. <br>";
        } else {
            echo "Email : " . $email . "<br>";
        }
    }
    
    ?>
</body>
</html>