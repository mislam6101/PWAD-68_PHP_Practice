<?php 

class fruit {
    public $name;
    public $color;
}

$fruitobj = new fruit;

$fruitobj->name = "Apple";
$fruitobj->color = "Red";

$fruitobj2 = new fruit;

$fruitobj2->name = "Mango";
$fruitobj2->color = "Green";



var_dump($fruitobj);
var_dump($fruitobj2);

?>