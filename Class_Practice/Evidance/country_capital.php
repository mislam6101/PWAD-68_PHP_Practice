<?php 

$country = ["Bangladesh" => "Dhaka", 
    "India" => "Delhi", 
    "Pakistan" => "Islamabad", 
    "Nepal" => "Kathmondu", 
    "Bhutan" => "Thimpu"];

ksort($country); // Key sort
// sort($country) ; value sort
// rsort($country) ; Revearse value sort
// krsort($country) ; Revearse key sort
foreach( $country as $key => $capital){
    echo "<ul>";
    echo "<li>" . $key ." : " . $capital . "<br>". "</li>";
    echo "</ul>";
}
?>