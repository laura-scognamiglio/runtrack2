<?php
$bdd = mysqli_connect('localhost','root','root','jour08');
mysqli_set_charset($bdd, "utf8");
$requete = mysqli_query($bdd, "SELECT * FROM etage");
$etages = mysqli_fetch_all($requete, MYSQLI_ASSOC);
$requete2 = mysqli_query($bdd, "SELECT SUM(superficie) FROM etage");
$etageSpecify = mysqli_fetch_all($requete2, MYSQLI_ASSOC);
?>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>numero</th>
            <th>superficie</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($etages as $etage): ?>
            <tr>
                <td><?=$etage['id'];?></td>
                <td><?=$etage['nom'];?></td>
                <td><?=$etage['numero'];?></td>
                <td><?=$etage['superficie'];?></td>
            </tr>
    <?php endforeach;?>
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <th>superficie_totale</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($etageSpecify as $specify): ?>
            <td><?=$specify["SUM(superficie)"];?></td>
        <?php endforeach;?>
    </tbody>
</table>

