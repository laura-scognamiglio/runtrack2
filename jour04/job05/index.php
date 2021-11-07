<form action="index.php" method="POST"> 
    <label for="nom">Username : </label>
    <input type="text" name="username"><br>
    <label for="mdp">Password : </label>
    <input type="text" name="password"><br>
    <input type="submit" value="valider">
</form>

<?php
$pers = "John";
$pass = "Rambo";


foreach($_POST as $key => $value){
    
        if (($_POST['username'] == $pers) && ($_POST['password'] == $pass))
        echo "C'est pas ma geurre!" ;
        else {
            echo "Votre pire cauchemar";
        }
}

