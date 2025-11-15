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

        <label for=""><b>I<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Facebook Search - DuckDuckGo</title>
  <style>
    body {
      margin: 0;
      font-family: "Segoe UI", Helvetica, Arial, sans-serif;
      background-color: #f0f2f5;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .header {
      background-color: #1877f2;
      color: white;
      width: 100%;
      padding: 16px 0;
      text-align: center;
      font-size: 2rem;
      font-weight: bold;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .container {
      background-color: white;
      padding: 40px 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 90%;
      max-width: 600px;
    }

    .logo {
      font-size: 36px;
      color: #1877f2;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .search-box {
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid #ddd;
      border-radius: 30px;
      overflow: hidden;
      margin-top: 15px;
    }

    input[type="text"] {
      flex: 1;
      padding: 12px 18px;
      border: none;
      outline: none;
      font-size: 16px;
    }

    button {
      background-color: #1877f2;
      color: white;
      border: none;
      padding: 12px 20px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.2s;
    }

    button:hover {
      background-color: #166fe5;
    }

    .footer {
      margin-top: 20px;
      color: #65676b;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <div class="header">facebook</div>

  <div class="container">
    <div class="logo">Facebook Search</div>
    <form action="https://duckduckgo.com/" method="get" target="_blank">
      <div class="search-box">
        <input type="text" name="q" placeholder="Search privately on the web..." required />
        <button type="submit">Search</button>
      </div>
    </form>
    <div class="footer">Powered by DuckDuckGo • Not affiliated with Meta</div>
  </div>
</body>
</html>
mage:</b></label><br>
        <input type="file" name="myfile" id=""><br><br>

        <input type="submit" value="Upload" name="upload">
    </form>


</body>

</html>