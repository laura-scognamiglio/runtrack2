<?php

$str = "Dans l'espace, personne ne
vous entend crier.";

for($a = 0; isset($str[$a]) == true; $a++){

    echo $str[$a];
}
echo $a;