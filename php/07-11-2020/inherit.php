<?php 


function dd($arg){
    echo '<pre>';
    print_r($arg);
    die;
}


class User{

    private $account;
    protected $name = '';
    protected $fname = '';

    protected function  getMyData(){

    }

}


class Saqib extends User{

    private $cnic;

    public function getData(){

        $this->cnic = 2132131321321;
        $this->name = 'Saqib';
        $this->fname = 'Tariq';

        echo $this->cnic  . ' -- ' . $this->name . ' ' . $this->fname; 

    }

}



$user = new User();

$objSaqib = new Saqib();

$user->name = 131321321;
dd($objSaqib);

$objSaqib->getData();