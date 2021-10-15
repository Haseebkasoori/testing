<?php
// class Fruit{
//     // properties
//     public $name;
//     public $weight;

//     // methods 
//     function set_name($name)
//     {
//         $this->name = $name;
//     }
//     function get_name()
//     {
//         return $this->name;
//     }

// }


// $orange =   new Fruit();
// $apple = new Fruit();
// $orange->set_name('Orange');
// $apple->set_name('Apple');


// echo $apple->get_name();
// echo $orange->get_name();
// var_dump($orange instanceof Fruit);
// echo "<br>";


// Constructer

class Fruit{
    // properties
    public $name;
    public $weight;

    // methods 
    function __construct($name,$weight)
    {
        $this->name = $name;
        $this->weight = $weight;

    }
    function get_name()
    {
        return $this->name;
    }
    function get_weight()
    {
        return $this->weight;
    }

}
$apple= new Fruit('Apple', 12);

echo $apple->get_name();
echo $apple->get_weight();



?>
