<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <h2>File upload using PHP Procedural Coding</h2>

    <?php

    if (isset($_REQUEST["upload"])) {
        // print_r($_FILES);

        $filename = $_FILES["myfile"]["name"];
        $destination = "./" . $filename;
        $tempfile = $_FILES["myfile"]["tmp_name"];

        $size = $_FILES["myfile"]["size"];
        $maxsize = 1048576; //1MB

        $extention = pathinfo($filename, PATHINFO_EXTENSION);

        

        /* if ($extention == "jpeg" || $extention == "jpg" || $extention == "png") {
            if ($size > $maxsize) {
                echo "File is too large.";
            } else {
                move_uploaded_file($tempfile, $destination);
                echo "Upload Successfull";
            }
        }
        else{
            echo "This is not a image file.";
        } */
        // another way:
        $allow_ext = ["jpg", "jpeg", "png"];
        $errors = [];
        if($size > $maxsize){
            $errors[] = "File is too large.";
        }
        if(!in_array($extention, $allow_ext)){
            $errors[] = "This is not a image file.";
        }
        if(count($errors)>0){
            foreach($errors as $error){
                echo $error . "<br>";
            }
        }
        else{
            move_uploaded_file($tempfile, $destination);
            echo "Upload Successfull";
        }
    }

    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <label for=""><b>Name:</b></label><br>
        <input type="text" name="" id="" placeholder="Enter Your Name"><br><br>
  </form>

</body>
