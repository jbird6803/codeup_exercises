<?php

//$value = 'Hello!';

// if (is_int($value)) {
//     echo '$value is an integer';
// } elseif (is_float($value)) {
//     echo '$value is a float';
// } elseif (is_bool($value)) {
//     echo '$value is a boolean';
// } elseif (is_array($value)) {
//     echo '$value is an array';
// } elseif (is_null($value)) {
//     echo '$value is null';
// } elseif (is_string($value)) {
//     echo '$value is a string';
// }

// //////////////////////////////////////

// $value = 'Hello!';

// switch (gettype($value)) {
//     case 'integer':
//         echo '$value is an integer';
//         break;
//     case 'float':
//         echo '$value is a float';
//         break;
//     case 'boolean':
//         echo '$value is a boolean';
//         break;
//     case 'array':
//         echo '$value is an array';
//         break;
//     case 'null':
//         echo '$value is null';
//         break;
//     case 'string':
//         echo '$value is a string';
//         break;
// }

// // ////////////////////////////////////

// $value = 1;

// switch(gettype($value)) {
//     case 'string':
//         echo '$value is a string';
//         break;
//     default:
//         echo '$value is not a string';
//         break;
// }

// // ///////////////////////////////////

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
    case 1:
        echo 'Monday';
        break;
    case 2:
    	echo 'Tuesday';
     	break;
	case 3:
    	echo 'Wednesday';
     	break;
	case 4:
    	echo 'Thursday';
     	break;
 	case 5:
    	echo 'Friday';
     	break;
 	case 6:
    	echo 'Saturday';
     	break;
 	case 7:
    	echo 'Sunday';
     	break;
 }




















