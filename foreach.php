<?php

 //$numbers = array(1, 2, 3, 4, 5);
// for ($i = 0; $i < count($numbers); $i++) {
//     echo ("\$numbers has an element with a value of {$numbers[$i]}\n");
// }


// foreach($numbers as $value) {
// 	echo ("\$number has a value of {$value}\n");
// }

// $names = ['John', 'Andrew', 'Isaac', 'Thomas', 'Liz', 'Denali_the_person'];

// foreach($names as $name) {
// 	echo "Hello {$name}\n";
// }

// $numbers = array(1, 2, 3, 4, 5);
// foreach ($numbers as $value) {
//     $newNumber = $value * 2;
//     echo ("$value * 2 is {$newNumber}\n");
// }

// $data = array(42, 'bacon', (6 * 3), 'The Big Bang Theory', 98.6);
// foreach ($data as $datum) {
//     if (is_numeric($datum)) {
//         echo "{$datum} is a number\n";
//     } else if (is_string($datum)) {
//         echo "{$datum} is a string\n";
//     }
// }

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $stuff) {
	
	if (is_array($stuff)) {
	
		foreach ($stuff as $stuffs) {
	
			echo "$stuffs\n";
		}
	} else if (is_integer($stuff)) {
		echo "$stuff\n";
	} else if (is_float($stuff)) {
		echo "$stuff\n";
	} else if (is_bool($stuff)){
		echo "$stuff\n";
	} else if (is_null($stuff)) {
		echo "$stuff\n";	
	} else if (is_string($stuff)) {
		echo "$stuff\n";
	}
}