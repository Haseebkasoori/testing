<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {

    $this->name = $name;
    $this->color = $color;
  }
  public function getName(){
      echo "Name: ", $this->name, "<br>";
  }
  public function getColor(){
      echo "color: ", $this->color, "<br>";
    }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

class Strawberry extends Fruit {
    private $taste;
    public function __construct($name,$color,$taste){
        parent::__construct($name,$color);
        $this->taste=$taste;
    }
    public function getTaste(){
        echo "Taste: ", $this->taste, "<br>";
      }
}

// $strawberry = new Strawberry("Strawberry", "red"); //__construct() can be called since its public
$strawberry1 = new Strawberry("Strawberry","Dark Pink","Sweet");
$strawberry1->getName();
$strawberry1->getColor();
$strawberry1->getTaste();
// $strawberry->message(); // calling public() using message(). protected methods can be accessed within class
?>
