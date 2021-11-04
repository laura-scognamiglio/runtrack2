<?php

$tab = array(200, 204, 173, 98, 171, 404, 459);
$count = 0;

    while (isset($tab[$count]) == true){
        
            if( $tab[$count] % 2 == 0){ 
                 
                echo $tab[$count] . " est paire". "</br>"; 

            }
            else{
                 
                echo $tab[$count] . " est impaire". "</br>";            
            }
            
            $count++;          
    }
    
