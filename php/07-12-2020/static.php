<?php 


$db = mysqli_connect('stagebproperty.cntodcbcko2z.eu-west-1.rds.amazonaws.com', 'bprop_stage', 'asdfasd@asdce', 'bproperty_beta');
        echo'<pre>';print_r($db);die;
class User{


    public static function getMyName(){
        echo 'print';
    }

}

User::getMyName();

