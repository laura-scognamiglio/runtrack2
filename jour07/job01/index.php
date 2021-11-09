<?php
session_start();

$_SESSION['nbvisites'] = $_SESSION['nbvisites'] + 1;

echo $_SESSION['nbvisites'];

if(isset($_POST["reset"])==true){
    session_destroy();
}
else{
    $_SESSION['nbvisites'] = $_SESSION['nbvisites'];
}


?>

<form action= "index.php" method= "POST"> 
    <input name= "reset" type= "submit" value= "Reset">
</form>