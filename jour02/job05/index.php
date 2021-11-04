<?php



for ($int = 2; $int <= 1000; $int++) {

    $x = 0 ;
    for ($i = 1; $i <= $int; $i++) {
        
        if($int % $i == 0){
            $x++;
        } 
             
    }       
    if($x == 2){
        echo "$int</br>";
    }
}

