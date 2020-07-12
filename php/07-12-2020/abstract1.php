<?php 

abstract class Car{

    public function getData(){
        echo 'Parent get Data';
    }


    abstract public function getMyWindows();

}


// class Civic extends Honda{

// }


class Honda extends Car{


    public function myData(){
        $this->getData();
    }

    public function getMyWindows(){
      
    }
}


$saqib  = new Honda();
$saqib->myData();

// $car = new Car();
