<?php

class fruit
{
    private $name;
    private $color;

    function set_value($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function get_value()
    {
        return $this->name . "<br>" . $this->color;
    }
}

$fruitobj = new fruit;
$fruitobj->set_value("Apple", "Red");
echo $fruitobj->get_value();
