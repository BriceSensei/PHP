<?php
    function concat($string, $nomFamille ,$nombre){
        return  "je m'appelle " . $string . $nomFamille .  "j'ai " . $nombre . "  ans";
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
    <p> <?php echo concat("Léo ", "Messi ",  34) ?></p>

</body>

</html>