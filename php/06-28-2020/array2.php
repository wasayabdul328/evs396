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
        'asdasd'=> 'asdaasd',
        'add'
    ];

    // print_r();
    // var_dump()

    // echo $names['ddd'];die;    
    
    foreach($names as $k => $val){
        // echo $k . '<br>';
        echo $names[$k] . '<br>';
        // if($k === 'ddd'){
        //     die;
        // }
        echo $k . '-----' . $val . '<br>';
    }