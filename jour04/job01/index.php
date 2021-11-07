<?php
// var_dump($_GET['prenom']);
// var_dump($_GET['nom']);
// $_GET['nom'];
// $_GET['prenom'];

$var = array(
    'nom' => $_GET['nom'],
    'prenom' => $_GET['prenom']
);



?>

<form action="index.php" method="GET"> 
    <label for="nom">Nom : </label>
    <input type="text" name="nom"><br>
    <label for="prenom">Prénom : </label>
    <input type="text" name="prenom"><br>
    <input type="submit" value="valider">
</form>

<?php


foreach($_GET as $key => $value){
    echo $key . "<br>";
    echo $value . "<br>";
}