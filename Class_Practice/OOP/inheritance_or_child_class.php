<?php

class fruits
{
    private $name;
    private $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function intro()
    {
        echo "This is {$this->name} and the color is {$this->color} .";
    }
}

class blueberry extends fruits
{
    function msg()
    {
        echo "<br> Am I a fruit or berry?";
    }
}

$jaam = new blueberry("Blueberry", "Blue");
$jaam->intro();
$jaam->msg();


?>