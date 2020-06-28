<?php 

    // $data  = array();
    // $data  = [];


    // Keys  / Index
    // Values


    // one dimen / Single dimen array
    $names  = [  
        'EVS' ,
        'Institute',
        'ddd' => 'abc',
        'cdcd',
        'asdaasd',
        'add'
    ];

    // print_r();
    // var_dump()

    // echo $names[1];    
    


    $count = count($names);
    // echo ($count); die;

    for($a = 0 ; $a < $count ; $a++ ){
        echo $names[$a] . '<br>';
    }