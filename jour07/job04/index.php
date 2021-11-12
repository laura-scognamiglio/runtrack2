<!-- Créez un formulaire de connexion qui contient un input de type de text
nommé “prenom” et un bouton submit nommé “connexion”. Lorsque l’on
valide le formulaire, le prénom est ajouté dans un cookie. Si un utilisateur a
déjà entré son prénom n'affichez plus le formulaire de connexion. A la
place, écrivez “Bonjour prenom !” et ajouter un bouton “Déconnexion”
nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à nouveau
afficher le formulaire de connexion. -->




<?php
if(!isset($_COOKIE['user'])) {
     setcookie('user',1,time()+ 365*24*3600);

    echo('<form action= "index.php" method= "POST">
    <input name="prenom"  type= "text">
    <input type="submit" name="connexion" value="connexion"> 
    <!-- <input type="submit" name="reset" value="reset"> -->
    </form>');
    if(isset($_POST["prenom"]) && isset($_POST["connexion"])){
    echo 'Bonjour ' . $_POST["prenom"] . '!' ;}
} else {
    echo ('cc'. $_COOKIE['user']);
    echo ('<form action= "index.php" method= "POST">
         <input type="submit" name="deco" value="deco">
         </form>');
         if(isset($_POST['deco'])){
    unset ($_COOKIE['user']);
        //var_dump($_COOKIE['user']);
        
    }
}

