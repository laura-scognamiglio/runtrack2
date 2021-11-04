<?php

$str = "I'm sorry Dave I'm afraid I can't
do that.";
$voy = ['a', 'e', 'i', 'o', 'u', 'y', 'I'];

for ($a = 0; isset($str[$a]) == true; $a++) {

    for ($i = 0; isset($voy[$i]) == true; $i++) {

        if($str[$a] == $voy[$i])
        echo $str[$a];
    }


}

