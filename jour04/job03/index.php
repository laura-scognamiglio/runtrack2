

<form action="index.php" method="$_POST">
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