<?php

function leetspeak($str){
    for($a = 0; isset($str[$a]); $a++){
        if($str[$a]== "A"||$str[$a]== "a"){
            $str[$a] = 4;
        }
        elseif($str[$a]== "B"||$str[$a]== "b"){
            $str[$a] = 8;
        }
        elseif($str[$a]== "E"||$str[$a]=="e"){
            $str[$a] = 3;
        }
        elseif($str[$a]== "G"||$str[$a]=="g"){
            $str[$a] = 6;
        }
        elseif($str[$a]== "L"||$str[$a]=="l"){
            $str[$a] =$str[$a] = 1;
        }
        elseif($str[$a]== "S"||$str[$a]=="s"){
            $str[$a] = 5;
        }
        elseif($str[$a]== "T"||$str[$a]=="t"){
            $str[$a] = 7;
        }
        else{
            $str[$a] = $str[$a];
            //il faut echo la str sinon les lettres normales ne s'affichent pas
        }
    }
   return ($str);
   
}

$result = leetspeak("lolo le veau");
echo $result;
