<?php

$str = "Tous ces instants seront
perdus dans le temps comme les larmes sous la pluie.";

echo "$str <br>";
for($i = 0; isset($str[$i]) == true; $i++) {
    
    if($i % 2 == 1)
    echo ($str[$i]);

}

echo "</br>";

for($i = 0; isset($str[$i]) == true; $i++) {
    
    if($i % 2 == 0)
    echo ($str[$i]) ;

}