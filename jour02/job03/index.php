<?php

$int = 0;

for ($int = 0; $int <= 100; $int++ ) {

    if ( $int >= 0 && $int <= 20 ) {
        echo  "<i>" . $int . "<br></i>";
    }
    elseif ($int == 42 ){
        echo  "<u>" . "La PLateforme_" . "<br></u>";
    }
    elseif ($int > 25 && $int < 50 ){
        echo  "<u>" . $int . "<br></u>";
    }
    else {
        echo $int . "</br>";
    }
}

