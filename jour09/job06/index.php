
<?php
$bdd = mysqli_connect('localhost','root','root','jour08');
$requete = mysqli_query($bdd, "SELECT COUNT(*) FROM `etudiants`");
$student = mysqli_fetch_all($requete, MYSQLI_ASSOC);
mysqli_set_charset($bdd, 'utf8');
echo '<pre>';
var_dump($student);
echo '</pre>';
?>

<table>

    
    <thead>
        <tr>
            <td>nb_etudiants</td>
            
        </tr>
    </thead>
    <tbody>
    <?php foreach($student as $students): ?>
        <tr>
            <td><?=$students["COUNT(*)"];?></td>
            
        </tr>
    <?php endforeach;?>
    </tbody>
</table>


