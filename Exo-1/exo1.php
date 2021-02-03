<?php
$name = 'Pierre';
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

    <h1> <?php echo $name  ?></h1>
    <!-- echo court  -->
    <h1> <?= $name ?> </h1> 
    <p> ceci est un paragraphe </p>

</body>

</html>