<?php

class fruit
{
    private $name;
    private $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function get_value(){
        return $this->name . "<br>" . $this->color;
    }
}

$fruitobj = new fruit("Grape","Black");
echo $fruitobj->get_value();


?>
