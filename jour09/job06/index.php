
<?php
$bdd = mysqli_connect('localhost','root','root','jour08');
$requete = mysqli_query($bdd, "SELECT * FROM `etudiants`");
$student = mysqli_fetch_all($requete, MYSQLI_ASSOC);
$requete2 = mysqli_query($bdd, "SELECT COUNT(*) FROM `etudiants`");
$studentSpecify = mysqli_fetch_all($requete2, MYSQLI_ASSOC);
mysqli_set_charset($bdd, 'utf8');
echo '<pre>';
var_dump($studentall);
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
                    <td><?=$students['id'];?></td>
                    <td><?=$students['prenom'];?></td>
                    <td><?=$students['nom'];?></td>
                    <td><?=$students['naissance'];?></td>
                    <td><?=$students['sexe'];?></td>
                    <td><?=$students['email'];?></td>
                    
                    
                </tr>
        <?php endforeach;?>
    </tbody>
</table>
<table>

    
    <thead>
        <tr>
            
            <td>nb_etudiants</td>
            
        </tr>
    </thead>
    <tbody>
            <?php foreach($studentSpecify as $specify): ?>
                <tr>
                    
                    <td><?=$specify["COUNT(*)"];?></td>
                    
                </tr>
        <?php endforeach;?>
    </tbody>
</table>

