<!-- Créez un formulaire de connexion qui contient un input de type de text
nommé “prenom” et un bouton submit nommé “connexion”. Lorsque l’on
valide le formulaire, le prénom est ajouté dans un cookie. Si un utilisateur a
déjà entré son prénom n'affichez plus le formulaire de connexion. A la
place, écrivez “Bonjour prenom !” et ajouter un bouton “Déconnexion”
nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à nouveau
afficher le formulaire de connexion. -->




<?php
if (!isset($_COOKIE['user'])){
    setcookie('user',1,time()+ 365*24*3600);
}

else {
    (isset($_POST["prenom"]) && isset($_POST["connexion"]));
        echo "Bonjour " . $_POST["prenom"] . " !";
};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="formtohide" >
    <form action= "index.php" method= "POST" class= "formtohide">
        <input name="prenom"  type= "text">
    <input type="submit" name="connexion" value="connexion"> 
    </form>
</div>
</body>
</html>


