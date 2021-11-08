<?php
$str = "j'aime le code";
$char = "e";

function occurences($str, $char){
    $b =0;
    for($a = 0; isset($str[$a])== true; $a++){
        // for($b =0; isset($char[$b])== true; $b++){
            // ya 1 boucle
            if($str[$a] == $char){
                $b++;
                
            }
        // }
    } 
    return "Il y a ".$b." ocurrences de la lettre ".$char." dans la phrase ".$str;
}
$result = occurences($str,$char);
echo $result;

