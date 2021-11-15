
<!DOCTYPE html>
<html lang="en">
<head>
<?php
$fuego = '<link rel="stylesheet" href="style1.css">';
$love = '<link rel="stylesheet" href="style2.css">';
$boring ='<link rel="stylesheet" href="style3.css">';
if(!isset($_GET["valider"])){
    echo "choose a style!";
}
if($_GET["color"] == "fuego"){
    echo $fuego;
}
elseif($_GET["color"] == "love"){
    echo $love;
}
elseif($_GET["color"] == "boring"){
    echo $boring;
}


?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method= GET>
    <label for="color-select">Choose a style:</label>
    
    <select name="color">
        <option value="choose">choose a style</option>
        <option value="fuego">fuego</option>
        
        <option value="love">love</option>
        
        <option value="boring">boring</option>
    </select>
    <input name= "valider" type= "submit" value= "okay">
</form>
</body>
</html>
