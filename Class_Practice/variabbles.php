<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H3>PHP Variable</H3>
    <?php

        $id = 10;
        $name = "Md. Mahmudul Islam";
        $age = 26;
        $contact = 1959186101;
        echo $id . "<br>";


        $flowers = ["Rose", "Daffodil", "Rododendrone"];
        echo "<pre>";
        var_dump($flowers); #This method is use for get describe and type of variabble.

        class person{
            public $fname = "Md. Mahmudul";
            public $lname = "Islam";
 
        }
        $person = new Person;
        var_dump($person);

        echo "</pre>";


    ?>
</body>
</html>


