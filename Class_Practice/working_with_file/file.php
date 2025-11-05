<?php 

$data = file("user.txt");
echo "<pre>";
print_r($data);

foreach($data as $line){
    // echo $line;

    $info = list($name, $email) = explode(" ", $line);
    echo "Name: $name " . "Email: $email";
}
?>