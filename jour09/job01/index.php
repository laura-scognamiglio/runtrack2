<?php
$bdd = mysqli_connect('localhost','root','root','jour08');
$requete = mysqli_query($bdd, "SELECT * FROM etudiants");
// $prenom = mysqli_query($bdd, "SELECT `prenom` FROM etudiants");
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


