<?php

$int = 0;

for ($int = 0; $int <= 100; $int++ ) {
    
    if ( $int % 5 == 0 && $int % 3 == 0 ){
        echo  "FizzBuzz <br>";
    }
    elseif ( $int % 3 == 0 ) {

        echo  "Fizz <br>";
    }
    elseif ( $int % 5 == 0 ){
        echo  "Buzz <br>";
    }
    else {
        echo  "$int</br>";
    }
}