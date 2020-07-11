<?php 

function dd($arg){
    echo '<pre>';
    print_r($arg);
    die;
}

// echo $name;


class User{
    

    private $username = 'avx';
    public $name = 'Saqib';

    // Class calling / Create an class object
    public function __construct()
    {
        // calcul
        // die('const');
    }

    // datamember value init
    public function __set($name, $value)
    {
        $this->$name = $value;
        // $this->username = 'saqib123';
    }

    // datamember value init
    public function __get($name)
    {
        return $this->$name;
        // dd($name);
    }

}

// Object
$user = new User();


// $name = 'Saqib';
$user->username = 'saqib123'; // Temp member / property 

echo $user->username;


// $user->name = 'Evs';
// print_r($user);die;
// dd($user);

// $objUser = new User();

// $name = 'saqib';
// $name = 'EVS';


// $value = 51;  // setter
// echo $value; // getter