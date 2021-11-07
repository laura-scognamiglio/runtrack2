

<form action="index.php" method="POST"> 
    <label for="valeur">Nombre : </label>
    <input type="number" name="nbr"><br>
    <input type="submit" value="valider">
</form>

<?php

$int = 0;

if (isset($_POST['nbr']) == true){

    foreach($_POST as $key => $value){
        
            if ($_POST['number'] %2 == 0)
            echo "Nombre paire" ;
            else {
                echo "Nombre impair";
            }
    }
}