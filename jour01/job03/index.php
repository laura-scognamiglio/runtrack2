<?php

$entier = 3;
$float = 3.5;
$string = "chaine de caractères";
$bool = true;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>
<body>
<table>
    <thead>
        
        <tr>
            <th>Type</th>
        
        
            <th>Nom</th>
       
        
            <th>Valeur</th>
        </tr>
        
    </thead>
    <tbody>
        <tr>
            <td>nombre décimaux</td>
            <td>$float</td>
            <td><?php echo $float;?></td>
        </tr>
        <tr>
            <td>nombre entier</td>
            <td>$entier</td>
            <td><?php echo $entier;?></td> 
        </tr>
        <tr>
            <td>string</td>
            <td>$string</td>
            <td><?php echo $string;?></td>
        </tr>
        <tr>
            <td>booléen</td>
            <td>$bool</td>
            <td><?php echo $bool;?></td>
        </tr>
    </tbody>
       
     </table>

</body>
</html>



