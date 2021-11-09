<?php
session_start();


if(isset($_POST["prenom"])==true){
 $_SESSION["prenom"] = $_SESSION["prenom"] . " ". $_POST["prenom"]; 
 echo $_SESSION["prenom"];
}

if(isset($_POST['reset'])==true){
    unset($_SESSION["prenom"]);
}


?>

<form action= "index.php" method= "POST">
    <input name="prenom"  type= "prenom">
   <input type="submit" name="envoyer" value="envoyer"> 
   <input type="submit" name="reset" value="reset">
    
</form>