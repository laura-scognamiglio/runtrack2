
<?php
$bdd = mysqli_connect('localhost','root','root','jour08');
$requete = mysqli_query($bdd, "SELECT `prenom`, `nom`, `naissance`, `sexe` FROM `etudiants` WHERE `sexe` = 'Femme'");
$student = mysqli_fetch_all($requete, MYSQLI_ASSOC);
mysqli_set_charset($bdd, 'utf8');
echo '<pre>';
var_dump($student);
echo '</pre>';
?>

<table>

    
    <thead>
        <tr>
            <td>id</td>
            <td>prenom</td>
            <td>nom</td>
            <td>naissance</td>
            <td>sexe</td>
            <td>email</td>
            
        </tr>
    </thead>
    <tbody>
    <?php foreach($student as $students): ?>
        <tr>
            <td></td>
            <td><?=$students['prenom'];?></td>
            <td><?=$students['nom'];?></td>
            <td><?=$students['naissance'];?></td>
            <td></td>
            <td></td>
            
        </tr>
    <?php endforeach;?>
    </tbody>
</table>


