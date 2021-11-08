<?php


function calcule($a,$operation,$b){
    if($operation == '+'){
        return ($a + $b);
    }
    elseif($operation == '-'){
        return ($a - $b);
    }
    elseif($operation == '*'){
        return ($a * $b);
    }
    elseif($operation == '/'){
        return ($a / $b);
    }
    elseif($operation == '%'){
        return ($a % $b);
    }
    return("oups");
}

echo calcule(11, '*', 20);