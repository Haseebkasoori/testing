<?php

class School {

    public $teachers;
    public $students;

    function __Construct ($teachers, $students){
        $this->teachers= $teachers;
        $this->students= $students;
    }
    public function message(){
        return " My trainer is : ". $this->teachers . "</br>" . "His Student is  : ". $this->students . "</br>" ;
    }
}
$mySchool = new School("Sir Sami","Shayan");
echo $mySchool -> message();
class training  {
    public $trainees;
    public $trainer;
    function __construct($trainer , $trainees){
        $this->trainer=$trainer;
        $this->trainees=$trainees; 
    }
    public function output(){
        return "The Trainer is : " . $this->trainer . "</br>" . "The Trainees are : " . $this->trainees ; 
    }
}
class Fees extends training {
    function output() {
        echo" $500 per teacher is the charge for each subject <br>";
    }
}
class Hometime {
    const HOME_TIME = " Yes !! Its Home Time ! "; 
}


$Fees = new Fees(" 100 "," 10");
$Fees-> output();
$training = new Training(" Maam Kiran "," All Students <br>");
echo $training -> output();
echo Hometime :: HOME_TIME;

?>