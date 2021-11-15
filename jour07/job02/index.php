<!-- 
if(!isset($_COOKIE['nbvisites']))
{
    setcookie('nbvisites',1,time()+30*24*3600);
}
else
{
    setcookie('nbvisites',$_COOKIE['nbvisites'] + 1,time()+30*24*3600);
    echo $_COOKIE['nbvisites'];

}

var_dump($_COOKIE);
if(isset($_POST["reset"])==true){
    setcookie('nbvisites');
}
<form action= "index.php" method= "POST"> 
    <input name= "reset" type= "submit" value= "Reset">
</form> -->


<?php

if(!isset($_COOKIE['nbvisites'])){
    setcookie('nbvisites',1,time()+ 3600);
}
else{
    setcookie('nbvisites',$_COOKIE['nbvisites']+1,time()+ 3600);
    echo $_COOKIE['nbvisites'];
}
if(isset($_POST['reset'])){
    setcookie('nbvisites');
}

?>
<form action= "index.php" method= "POST"> 
    <input name= "reset" type= "submit" value= "Reset">
</form> 