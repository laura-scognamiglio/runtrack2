
<?php
$bdd = mysqli_connect('localhost','root','root','jour08');
$requete = mysqli_query($bdd, "SELECT SUM(`capacites`) FROM salles");
$salles = mysqli_fetch_all($requete, MYSQLI_ASSOC);
mysqli_set_charset($bdd, 'utf8');
echo '<pre>';
var_dump($salles);
echo '</pre>';
?>

<table>

    
    <thead>
        <tr>
            <td>superficie_totale</td>
            
        </tr>
    </thead>
    <tbody>
    <?php foreach($salles as $salle): ?>
        <tr>
            <td><?=$salle["SUM(`capacites`)"];?></td>
            
        </tr>
    <?php endforeach;?>
    </tbody>
</table>


