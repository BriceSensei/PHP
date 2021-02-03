<?php

    $hautDeFrance = [
        '02' => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas-de-Calais',
        '80' => 'Somme'];
        var_dump($hautDeFrance);
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
<p> <?php $hautDeFrance['35'] = 'Rennes';
var_dump($hautDeFrance); ?> </p>

</body>

</html>