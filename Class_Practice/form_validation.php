<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h2>Form Validation</h2>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
                <label for="">Your name:</label><br>
                <input type="text" name="name" id=""><br><br>

                <label for="">Email: </label><br>
                <input type="text" name="email" id=""><br><br>

                <label for="">Current skills: </label><br>
                <select name="lang[]" id="" multiple="multiple">
                    <option value="CSharp">C#</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="Python">Python</option>
                    <option value="Ruby">Ruby</option>
                </select><br><br>

                <label for="">What you want to learn?</label><br>
                <input type="checkbox" name="language[]" id="" value="PHP">PHP<br>
                <input type="checkbox" name="language[]" id="" value="C">C<br>
                <input type="checkbox" name="language[]" id="" value="R">R<br>
                <input type="checkbox" name="language[]" id="" value="C++">C++<br><br>

                <input type="submit" name="submit" id="" value="SUBMIT">

            </form>
        </div>
        <div class="col-md-6">

        </div>
    </div>

    <?php
    // echo "Client IP: " . $_SERVER["REMOTE_ADDR"];
    // echo "Server IP: " . $_SERVER["SERVER_ADDR"];
    // ini_set("display_error", 1);
    if (isset($_REQUEST["submit"])) {
        $name = $_REQUEST["name"];
        $mail = $_REQUEST["email"];
        // print_r($_REQUEST["lang"]);
        // echo "<br>";
        // print_r($_REQUEST["language"]);
        // echo "<br>";
        // print_r($_REQUEST);
        if (strlen($name) == 0){
            echo "Name Required <br>";
        }
        else{
            $name = htmlentities($name);
            echo $name . "<br>";
        }
        
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            echo "Please entry a valid Email. <br>";
        } else {
            echo $mail . "<br>";
        }
        echo "<br>Skills: <br>";
        if (isset($_REQUEST["lang"])) {
            $skills = $_REQUEST["lang"];
            foreach ($skills as $skill) {
                echo $skill . "<br>";
            }
        }
        else{
            echo "Please select your fav. languages.";
        }
        echo "<br>";
        echo "Want to learn: <br>";
        if(isset($_REQUEST["language"])){
            $learn = $_REQUEST["language"];
            foreach ($learn as $l) {
            echo $l . "<br>";
        }
        }
        else{
            echo "What acctully you want";
        }
        

    ?>
    <!-- <table>
            <tr>
                <th>Name:</th>
                <td><?php echo $name . "<br>"; ?></td>
            </tr>
            <tr>
                <th>Email : </th>
                <td><?php if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                        echo "Please entry a valid Email. <br>";
                    } else {
                        echo $mail . "<br>";
                    } ?></td>
            </tr>
            <tr>
                <th>Skills : </th>
                <td><?php foreach ($skills as $skill) {
                        echo $skill . "<br>";
                    } ?></td>
            </tr>
            <tr>
                <th>Want to learn : </th>
                <td><?php foreach ($learn as $l) {
                        echo $l . "<br>";
                    } ?></td>
            </tr>

        </table> -->

    <?php
    }
    ?>

</body>

</html>