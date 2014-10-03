<?php

 $a = 100;
 $b = 50;
 $c = '50';

//  if ($a < $b) {
//      // output the appropriate result
//      echo "$a is less than $b\n";
//  }

//  if ($b > $a) {
//      // output the appropriate result
//      echo "$b is greater than $a\n";
//  }

//  if ($b >= $c) {
//      // output the appropriate result
//      echo "$b is greater than or equal to $c\n";
//  }

//  if ($b <= $c) {
//      // output the appropriate result
//      echo "$b is less than or equal to $c\n";
//  }

//  if ($b == $c) {
//      // output the appropriate result
//      echo "$b is equal to $c\n";
//  }

//  if ($b === $c) {
//      // output the appropriate result
//      echo "$b is identical to $c\n";
//  }

//  // output the appropriate result
//  if ($b != $c) {
//      echo "$b is not equal to $c\n";
//  }

//  // output the appropriate result
//  if ($b !== $c) {
//      echo "$b is not identical to $c\n";
//  }



// NEXT EXERCISE



// Shorten the next 2 statements into an if/else
// if ($a < $b) {
//     // output the appropriate result
//     echo "$a is less than $b";
// }

// if ($b > $a) {
//     // output the appropriate result
//     echo "$b is greater than $a";
// }
echo $a > $b ? "$a is greater than $b\n" : "$a is less than $b\n";

// Shorten the next 2 statements into an if/else
// if ($b >= $c) {
//     // output the appropriate result
//     echo "$b is ____ $c\n";
// }

// if ($b <= $c) {
//     // output the appropriate result
//     echo "$b is ____ $c\n";
// }

echo $b >= $c ? "$b is greater than or equal to $c\n" : "b is less than or equal to $c\n";

// combine the next 4 conditionals into
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal
if ($b === $c) {
    // output the appropriate result
    echo "$b is identical to $c\n";
}

elseif ($b == $c) {
    // output the appropriate result
    echo "$b is equal to $c\n";
}

elseif ($b !== $c) {
    // output the appropriate result
    echo "$b is not identical to $c\n";
}

elseif ($b != $c) {
    // output the appropriate result
    echo "$b is not equal to $c\n";
}



?>