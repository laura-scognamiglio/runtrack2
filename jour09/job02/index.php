<?php
$bdd = mysqli_connect('localhost','root','root','jour08');
$requete = mysqli_query($bdd, "SELECT * FROM salles");
// $prenom = mysqli_query($bdd, "SELECT `prenom` FROM etudiants");
$salle = mysqli_fetch_all($requete, MYSQLI_ASSOC);
mysqli_set_charset($bdd, 'utf8');
echo '<pre>';
var_dump($salle);
echo '</pre>';
?>

<table>

    <thead>
        <tr>
            
            <td>nom</td>
            <td>capacités</td>
            
        </tr>
    </thead>
    <tbody>
    <?php foreach($salle as $salles): ?>
        <tr>
            <td><?=$salles['nom'];?></td>
            <td><?=$salles['capacites'];?></td>
            
        </tr>
    <?php endforeach;?>
    </tbody>
</table>


