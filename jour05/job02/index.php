<?php

function bonjour($jour){
    $bjr    ="Bonjour";
    $bsr    ="Bonsoir";
    if($jour == true){
        echo $bjr;
    }
        
    elseif($jour == false){
        echo $bsr;
    }
    return (0);  

}

bonjour(false);