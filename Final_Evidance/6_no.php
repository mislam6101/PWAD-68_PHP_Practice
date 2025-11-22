<?php 

$arr = ["Bangladesh" => "Dhaka",
"India" => "Delhi",
"Pakistan" => "Islamabad",
"Afganistan" => "Kabul",
"Bhutan" => "Thimpu"];

ksort($arr);

foreach($arr as $key=>$value){
    echo $value. " is the capital of " . $key . "<br>";
}

?>