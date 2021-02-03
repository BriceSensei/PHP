<?php 

$magnitude = rand(1, 9);
$result;

switch ($magnitude){ 
    case 1:
     $result= "Micro-séisme impossible à ressentir.";
    break;  

    case 2: 
    $result= "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
    break;

    case 3: 
    $result= "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
    break;   

    case 4: 
    $result= "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
    break;    

    case 5:
     $result= "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
    break;    

    case 6:
     $result= "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
    break;    

    case 7: 
    $result= "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
    break;    

    case 8:
     $result= "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
    break;   

    case 9:
     $result= "Excellent travail, c'est parfait !";
    break;   

    default: $result= "Séisme capable de tout détruire sur une très vaste zone.";

};
?>

 <!-- echo "Séisme de magnitude " . $magnitude . " " . $result;
 ou -->
<p> le séisme de magnitude <?=$magnitude?> <?=$result?> </p>



<!doctype html>
<html lang="fr">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>

</body>

</html>