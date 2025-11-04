<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table style="margin: 0 auto">
            <h1 style="text-align: center">Registration Form</h1>
            <tr>
                <td>Full-Name: </td>
                <td><input type="text" name="name" id="" placeholder="Enter Your Name"></td>
            </tr>
            <tr>
                <td>Age: </td>
                <td><input type="text" name="age" id="" placeholder="Enter Your Age"></td>
            </tr>
            <tr>
                <td>Sex: </td>
                <td><input type="radio" name="sex" id="" value="Male">Male
                <input type="radio" name="sex" id="" value="Female">Female</td>
            </tr>
            <tr>
                <td>Divison: </td>
                <td><select name="division" id="">
                    <option value="" selected disabled>Selec One</option>
                    <option value="Chottogram">Chottogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensing">Mymensing</option>
                    <option value="Sylhet">Barisal</option>
                </select></td>
            </tr>
            <tr>
                <td>Your Image: </td>
                <td><input type="file" name="myfile" id=""></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="email" id="" placeholder="name@email.com"></td>
            </tr>
            <tr>
                <td>Create Password: </td>
                <td><input type="password" name="pass" id="" placeholder="Between 8 to 24 Character"></td>
            </tr>
            <tr>
                <td>Confirm Password: </td>
                <td><input type="password" name="conPass" id="" placeholder="Retype your password"></td>
            </tr>
            <tr>
                <td col-span="2"><input type="submit" name="submit" id="" value="SUBMIT"></td>
            </tr>
        </table>
    </form>

    <?php 

    if(isset($_REQUEST["submit"])){
        $name = $_REQUEST["name"];
        $age = $_REQUEST["age"];
        $sex = $_REQUEST["sex"];
        $division = $_REQUEST["division"];
        $mail = $_REQUEST["email"];
        $pass = $_REQUEST["pass"];
        $cPass = $_REQUEST["conPass"];
        
        if(strlen($name) < 6){
            echo "Must be entry fullname. <br>";
        }
        if(!is_numeric($age)){
            echo"Please entry your age <br>";
        }
        else{
            if($age < 18){
                echo "Sorry! You are not adult <br>";
            }
        }
        if($sex == ""){
            echo "Please check the sex field.<br>";
        }
        if($division == ""){
            echo "Please select your division. <br>";
        }
        if($mail == ""){
            echo "Please fill the email field. <br>";
        }
        else{
            if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            echo "Must be entry a valid email. <br>";
            }
        }
        if(strlen((string)$pass) < 8){
            echo "Password must be 8 Character. <br>";
        }
        else{
            if($pass != $cPass){
                echo "Retype the same password please.";
            }
        }

        $filename = $_FILES["myfile"]["name"];
        $tempfile = $_FILES["myfile"]["tmp_name"];
        $filesize = $_FILES["myfile"]["size"];
        $max_file_size = 1024 * 1024 * 1; //1MB

        $extension = pathinfo($filename, PATHINFO_EXTENSION);        

        if ($extension == "jpeg" || $extension == "jpg" || $extension == "png"){
            if ($filesize > $max_file_size){
                echo "Image size is too large. Please provide a image within 1 MB";
            }
        }
        else{
            echo "The file must be a image.";
        }
    }
    
    
    ?>
    
</body>
</html>