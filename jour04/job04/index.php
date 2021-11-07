<form action="index.php" method="POST"> 
    <label for="nom">Nom : </label>
    <input type="text" name="nom" ><br>
    <label for="prenom">Prénom : </label>
    <input type="text" name="prenom" ><br>
    <input type="submit" value="valider">
</form>

<table>
    <thead>
        <tr>
            <th>Arguments</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
        //isset permet de determiner si ce qu'il y a entre parentheses est determiné et non null
        // if (isset($_GET['nom']) && isset($_GET['prenom']))
        {
            foreach($_POST as $key => $value){
                echo "
                <tr>
                    <td>$key</td>
                    <td>$value</td>
                </tr>
                ";
            }
        }
        
        ?>
        
    </tbody>
</table>


