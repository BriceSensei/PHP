<?php 

function chiffre($nombre1 =0, $nombre2 =5, $nombre3 =3) {
    $result = $nombre1 + $nombre2 + $nombre3;
        return $result;
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


<p> <?php echo chiffre() ?></p>

</body>

</html>