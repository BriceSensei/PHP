<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Partie 8 exercice1 page target</title>
</head>
<body>
    <p><?= 'Je m\'appelle ' . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . ', et j\'ai ' . $_SESSION['age'] . 'ans' ?></p>
    <p><a href="/exo2/exo2.php">Retour au menu</a></p>
</body>
</html>