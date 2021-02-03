<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Partie 8 exercice1</title>
</head>
<body>
    <p><?= 'User Agent : ' . $_SERVER['HTTP_USER_AGENT']; //on affiche l'user agent?></p>
    <p><?= 'Adresse IP : ' . $_SERVER['REMOTE_ADDR']; //on affiche l'adress ip?></p>
    <p><?= 'Nom du serveur : ' . $_SERVER['SERVER_NAME']; // on affiche le nom de domaine?></p>
    <p><a href="../exo1.php">Retour au menu</a></p>
</body>
</html>