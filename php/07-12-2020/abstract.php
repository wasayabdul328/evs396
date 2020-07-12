<?php 

abstract class User{


    public function getData(){
        echo 'Parent get Data';
    }


    abstract public function myGetData();

}

class Saqib extends User{


    public function myData(){
        $this->getData();
    }

}


$saqib  = new Saqib();
$saqib->myData();