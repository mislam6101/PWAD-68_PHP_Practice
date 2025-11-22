<?php 

$arr = [30,4,60,1,7];

$max = $arr[0];

foreach($arr as $a){
    if($a > $max){
        $max = $a;
    }
}
echo "largest number : " . $max ;
?>