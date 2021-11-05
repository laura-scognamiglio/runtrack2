<?php

$str = "On n est pas le meilleur quand
on le croit mais quand on le sait";

$cV = 0;
$cC = 0;

 $dic = array(
    'voyelles' => ['a','e', 'i','o','u','y','A','E','I','O','U','Y'],
    'consonnes' => ['s','z','r','t','p','q','d','f','g','h','j','k','m','w','x','c','v','b','n','Z','R','T','P','Q','D','F','G','H','J','K','M','W','X','C','V','B','N','S']
);


  for($a = 0; isset($str[$a]) == true; $a++){

    for ($i = 0; isset($dic['voyelles'][$i]) == true; $i++){
 
            if($str[$a] == ($dic['voyelles'][$i])) {

                $cV++; 
                
            };
            if($str[$a] == ($dic['consonnes'][$i])) {
                
                $cC++;
            };

    }

} 
  
echo "<table>
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <td>$cV</td>
        <td>$cC</td>
    </tbody>
</table>";


/* $tabAssociatif = ['a' =>['v','c'],'b'];

$tabNorm = "ab   cvhupo";

echo $tabAssociatif['a'][0];
echo $tabNorm[1]; */