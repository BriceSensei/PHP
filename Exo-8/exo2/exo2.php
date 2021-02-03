<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
// On créer quelques variables de session dans $_SESSION
$_SESSION['firstname'] = 'Brice';
$_SESSION['lastname'] = 'Briere';
$_SESSION['age'] = 28;

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Partie 8 exercice2</title>
</head>
<body>
    <a href="user.php">Clique ici !</a>
    <p><a href="/exo2/exo2.php">Retour au menu</a></p>
</body>
</html>