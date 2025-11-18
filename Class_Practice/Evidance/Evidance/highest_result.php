<?php 

$result = [
    "Aarif" => 79,
    "Jarin" => 78,
    "Rafi" => 79,
    "Sakib" => 81,
    "Tawfiq" => 33
];

$max_result = 0;
foreach($result as $value){
    if($value > $max_result){
        $max_result = $value;
    }
}
foreach($result as $key => $value){
    if($value == $max_result){
        echo "Name : " . $key . " Result : " . $value . "<br>";
    }
}

?>