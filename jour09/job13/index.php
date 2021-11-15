
<?php
$bdd = mysqli_connect('localhost','root','root','jour08');
$requete = mysqli_query($bdd, "SELECT * FROM salles");
$salle = mysqli_fetch_all($requete, MYSQLI_ASSOC);
$requete2 = mysqli_query($bdd, "SELECT salles.nom AS 'SN', etage.nom 'EN' FROM `salles` INNER JOIN `etage` ON salles.id_etage = etage.id;");
$salleSpecify = mysqli_fetch_all($requete2, MYSQLI_ASSOC);
mysqli_set_charset($bdd, 'utf8');
echo '<pre>';
var_dump($salleSpecify);
echo '</pre>';
?>
<table>
<thead>
    <tr>
        <td>id</td>
        <td>nom</td>
        <td>id_etage</td>
        <td>capacites</td>
        
    </tr>
</thead>
<tbody>
<?php foreach($salle as $salles): ?>
    <tr>
        <td><?=$salles["id"];?></td>
        <td><?=$salles["nom"];?></td>
        <td><?=$salles["id_etage"];?></td>
        <td><?=$salles["capacites"];?></td>
        
    </tr>
<?php endforeach;?>
</tbody>
</table>

<table>
    <thead>
        <tr>
            <td>nom des salles et les etages</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($salleSpecify as $salle): ?>
        <tr>
            <td><?=$salle["SN"];?></td>
            <td><?=$salle["EN"];?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>


