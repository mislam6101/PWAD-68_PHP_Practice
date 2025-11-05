<?php 

abstract class Fruit{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    abstract function genre();
}

class Mango extends Fruit{
    function genre()
    {
        return "I'm from Bangladesh and also I'm a seasonal fruit. <br>";
    }
}
class Apple extends Fruit{
    function genre()
    {
        return "I am form Australia.";
    }
}

$mange = new Mango("Mango");
echo "Mango : " . $mange -> genre();

$apple = new Apple("Apple");
echo "Apple : " . $apple -> genre();

?>