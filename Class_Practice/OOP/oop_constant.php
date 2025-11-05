<?php 

class Gd_Bye{

    const msg = "Thank You";
    function ba_bye(){
        return self::msg; 
    }
}

$gb = new Gd_Bye();
echo $gb->ba_bye();

?>