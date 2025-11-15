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
        <input<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DuckDuckGo Search</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      text-align: center;
    }
    .logo {
      font-size: 50px;
      font-weight: bold;
      color: #de5833;
      margin-bottom: 20px;
    }
    input[type="text"] {
      width: 400px;
      padding: 12px 18px;
      border: 1px solid #ccc;
      border-radius: 30px;
      font-size: 16px;
      outline: none;
    }
    input[type="text"]:focus {
      border-color: #de5833;
    }
    button {
      padding: 10px 20px;
      border: none;
      border-radius: 30px;
      background-color: #de5833;
      color: white;
      font-size: 16px;
      margin-left: 10px;
      cursor: pointer;
    }
    button:hover {
      background-color: #c14d2f;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">DuckDuckGo</div>
    <form action="https://duckduckgo.com/" method="get" target="_blank">
      <input type="text" name="q" placeholder="Search the web..." required />
      <button type="submit">Search</button>
    </form>
  </div>
</body>
</html>
 type="text" name="email" id="" placeholder="name@email.com"><br><br>

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