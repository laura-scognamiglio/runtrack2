
<?php
$bdd = mysqli_connect('localhost','root','root','jour08');
$requete = mysqli_query($bdd, "SELECT `capacites` FROM `salles` ORDER BY `capacites` DESC");
$salles = mysqli_fetch_all($requete, MYSQLI_ASSOC);
mysqli_set_charset($bdd, 'utf8');
echo '<pre>';
var_dump($salles);
echo '</pre>';
?>

<table>

    
    <thead>
        <tr>
            <td>salles</td>
            
        </tr>
    </thead>
    <tbody>
    <?php foreach($salles as $salle): ?>
        <tr>
            <td><?=$salle['capacites'];?></td>
            
        </tr>
    <?php endforeach;?>
    </tbody>
</table>


