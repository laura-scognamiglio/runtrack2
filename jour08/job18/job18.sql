SELECT etage.nom FROM etage
INNER JOIN salles 
WHERE etage.id = salles.id_etage AND
 (SELECT MAX(capacites) FROM salles)

/*SELECT etage.nom 
     FROM `etage`
INNER JOIN `salles` 
WHERE etage.id = salles.id_etage
WHEN MAX(capacites) FROM salles

AND 
(SELECT MAX(capacites) 
     FROM salles );
     
   */