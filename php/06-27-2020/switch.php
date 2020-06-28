<?php 


// echo 'Select Flav';
// echo '<select>';
// echo '<option>Fla1<option>';
// echo '<option>Fla1<option>';
// echo '<option>Fla1<option>';
// echo '<option>Fla1<option>';
// echo '<option>Fla1<option>';
// echo '<option>Fla1<option>';
// echo '</select>';


// if else

// switch

$number = 'fla3';

switch($number){
    case 'fla1':
        echo 'Price 599';
    break;
    case 'fla2':
        echo 'Price 699';
    break;
    case 'fla3':
        echo 'Price 799';
    break;
    case 'fla4':
        echo 'Price 899';
    break;
    case 'fla5':
        echo 'Price 999';
    break;
    case 'fla6':
        echo 'Price 299';
    break;
    default:
    echo 'Fla not available';
}