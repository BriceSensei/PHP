<?php 

function deuxNombre($nombre1, $nombre2) {
    if ($nombre1 > $nombre2){
    return  "Le 1er nombre est plus grand";
    }else if ($nombre1 < $nombre2){
        return "Le 1er nombre est plus petit";
    }else if ($nombre1 == $nombre2) {
        return "les nombres sont égaux";
    }
}
?>


<!doctype html>
<html lang="fr">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>
<?= 
deuxNombre(5,5)
?>
</body>

</html>