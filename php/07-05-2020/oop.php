<?php 


// Object

// Camera , Speaker, Mic , LCD, 
// =>  properties / Data members


//  Functionalities 
// => Data functions / Methods



/*

 => Encapsulation 
 => Inheritance
 => Polymorphisam
 => Abstract

 */


 // Access modifiers
 // => Public
 // => Protected
 // => Private


 // Encaps

 class User{
     // property
    public $name = 'Evs';


    // Magic Methods
    
    public function __construct($arg)
    {
        print_r($arg);die;
    }

    // Method / Data function
    public function getName(){

    }

 }

 new User(12);



//  function getName(){
//      return 'saqib';
//  }

// getName();

//  $objUser = new User(12);
// //  $objUser = new User;


//  echo $objUser->name;
