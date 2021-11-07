

<form action="index.php" method="POST"> 
    <label for="nom">Nom : </label>
    <input type="text" name="nom"><br>
    <label for="prenom">Prénom : </label>
    <input type="text" name="prenom"><br>
    <input type="submit" value="valider">
</form>

<?php
// $nom = $_POST['nom'];
// $prenom = $_POST['prenom'];

// if(isset($_POST['submit']))

// echo  $nom . $prenom ;

foreach($_POST as $key => $value){
    echo $key . "<br>";
    echo $value . "<br>";
}